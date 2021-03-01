<?php
function can()
{
    $currRouteName = \Illuminate\Support\Facades\Route::currentRouteName();

    if (ends_with($currRouteName, 'white')) {
        return true;
    }

    $user = session()->get('user');
    if ($user['administrator'] == \App\Http\Models\Users::ADMIN_YES) {
        return true;
    }

    $role_ids = \App\Http\Models\UsersRoles::where('users_id', $user['id'])->pluck('roles_id')->toArray();

    $permission_ids = \App\Http\Models\RolePermission::whereIn('roles_id', $role_ids)->pluck('permission_id')->toArray();

    $check = \App\Http\Models\Permission::whereIn('id', $permission_ids)->where('routes', 'like', "%{$currRouteName}%")->count();
    if ($check > 0) {
        return true;
    }
    return false;
}


/**
 * 发送HTTP请求方法
 * @param  string $url    请求URL
 * @param  array  $params 请求参数
 * @param  string $method 请求方法GET/POST
 * @return array  $data   响应数据
 */
function httpCurl($url, $params, $method = 'POST', $header = array(), $multi = false){
    date_default_timezone_set('PRC');
    $opts = array(
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER     => $header,
        CURLOPT_COOKIESESSION  => true,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_COOKIE         =>session_name().'='.session_id(),
    );
    /* 根据请求类型设置特定参数 */
    switch(strtoupper($method)){
        case 'GET':
            // $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
            // 链接后拼接参数  &  非？
            $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
            break;
        case 'POST':
            //判断是否传输文件
            $params = $multi ? $params : http_build_query($params);
            $opts[CURLOPT_URL] = $url;
            $opts[CURLOPT_POST] = 1;
            $opts[CURLOPT_POSTFIELDS] = $params;
            break;
        default:
            throw new Exception('不支持的请求方式！');
    }
    /* 初始化并执行curl请求 */
    $ch = curl_init();
    curl_setopt_array($ch, $opts);
    $data  = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);
    if($error) throw new Exception('请求发生错误：' . $error);
    return  $data;
}


/**
 * 请求过程中因为编码原因+号变成了空格
 * 需要用下面的方法转换回来
 */
function define_str_replace($data)
{
    return str_replace(' ', '+', $data);
}


/**
 * 微信信息解密
 * @param string $appid 小程序id
 * @param string $sessionKey 小程序密钥
 * @param string $encryptedData 在小程序中获取的encryptedData
 * @param string $iv 在小程序中获取的iv
 * @return array 解密后的数组
 */
function decryptData($appid, $sessionKey, $encryptedData, $iv)
{
    $OK = 0;
    $IllegalAesKey = -41001;
    $IllegalIv = -41002;
    $IllegalBuffer = -41003;
    $DecodeBase64Error = -41004;

    if (strlen($sessionKey) != 24) {
        return $IllegalAesKey;
    }
    $aesKey = base64_decode($sessionKey);

    if (strlen($iv) != 24) {
        return $IllegalIv;
    }
    $aesIV = base64_decode($iv);

    $aesCipher = base64_decode($encryptedData);

    $result = openssl_decrypt($aesCipher, "AES-128-CBC", $aesKey, 1, $aesIV);
    $dataObj = json_decode($result);
    if ($dataObj == NULL) {
        return $IllegalBuffer;
    }
    if ($dataObj->watermark->appid != $appid) {
        return $DecodeBase64Error;
    }
    $data = json_decode($result, true);

    return $data;
}


/**
 * 将xml格式转换成数组
 *
 * return array
 */
function xmlToArray($xml)
{
    //禁止引用外部xml实体
    libxml_disable_entity_loader(true);
    $xmlstring = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
    $val = json_decode(json_encode($xmlstring), true);
    return $val;
}


/**对emoji表情转义
 * @param $nickname
 * @return string
 */
function emoji_encode($nickname)
{
    $strEncode = '';
    $length = mb_strlen($nickname, 'utf-8');
    for ($i = 0; $i < $length; $i++) {
        $_tmpStr = mb_substr($nickname, $i, 1, 'utf-8');
        if (strlen($_tmpStr) >= 4) {
            $strEncode .= '[[EMOJI:' . rawurlencode($_tmpStr) . ']]';
        } else {
            $strEncode .= $_tmpStr;
        }
    }
    return $strEncode;
}


// 对emoji表情转反义
function emoji_decode($str)
{
    $strDecode = preg_replace_callback('|\[EMOJI:(.∗?)\]|', function ($matches) {
        return rawurldecode($matches[1]);
    }, $str);

    return $strDecode;
}


// 短信CURL提交
function Post($curlPost,$url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
    $return_str = curl_exec($curl);
    curl_close($curl);
    return $return_str;
}



/**
 * 获取客户端浏览器信息
 * @param   null
 * @author  https://blog.jjonline.cn/phptech/168.html
 * @return  string
 */
function get_broswer()
{
    $sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串
    if (stripos($sys, "Firefox/") > 0) {
        preg_match("/Firefox\/([^;)]+)+/i", $sys, $b);
        $exp[0] = "Firefox";
        $exp[1] = $b[1];  	//获取火狐浏览器的版本号
    } elseif (stripos($sys, "Maxthon") > 0) {
        preg_match("/Maxthon\/([\d\.]+)/", $sys, $aoyou);
        $exp[0] = "傲游";
        $exp[1] = $aoyou[1];
    } elseif (stripos($sys, "MSIE") > 0) {
        preg_match("/MSIE\s+([^;)]+)+/i", $sys, $ie);
        $exp[0] = "IE";
        $exp[1] = $ie[1];  //获取IE的版本号
    } elseif (stripos($sys, "OPR") > 0) {
        preg_match("/OPR\/([\d\.]+)/", $sys, $opera);
        $exp[0] = "Opera";
        $exp[1] = $opera[1];
    } elseif(stripos($sys, "Edge") > 0) {
        //win10 Edge浏览器 添加了chrome内核标记 在判断Chrome之前匹配
        preg_match("/Edge\/([\d\.]+)/", $sys, $Edge);
        $exp[0] = "Edge";
        $exp[1] = $Edge[1];
    } elseif (stripos($sys, "Chrome") > 0) {
        preg_match("/Chrome\/([\d\.]+)/", $sys, $google);
        $exp[0] = "Chrome";
        $exp[1] = $google[1];  //获取google chrome的版本号
    } elseif(stripos($sys,'rv:')>0 && stripos($sys,'Gecko')>0){
        preg_match("/rv:([\d\.]+)/", $sys, $IE);
        $exp[0] = "IE";
        $exp[1] = $IE[1];
    }else {
        $exp[0] = "未知浏览器";
        $exp[1] = "";
    }
    return $exp[0].'('.$exp[1].')';
}



function p($arr) {
    echo '<pre>'. print_r($arr, true). '</pre>';
}



/**
 *  @author 组合输出分类树状列表图标(缩进)
 *  @param  $arr 数组
 *  @return arr
 */
function get_tree_icons($path) {
    $icons = '';
    // 顶级
    if($path == 1){
        $icons = '';
    }
    if($path > 1){
        $iconsNum = $path * ($path - 1);
        for($i = 0; $i < $iconsNum; $i++){
            $icons .= '&nbsp;&nbsp;&nbsp;';
        }
        $icons = $icons . '|--- ';
    }

    return $icons;
}



/**
 * @author 截取字符串长度
 * @param $string 要截取的字符串
 * @param $sublen 截取数量
 * @param $start  开始长度默认为 0
 */
function cutStr($string, $sublen, $start = 0, $code = 'UTF-8'){
    if($code == 'UTF-8'){
        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
        preg_match_all($pa, $string, $t_string);
        if(count($t_string[0]) - $start > $sublen)
            return join('', array_slice($t_string[0], $start, $sublen))."...";
            return join('', array_slice($t_string[0], $start, $sublen));
    }else{
        $start = $start*2;
        $sublen = $sublen*2;
        $strlen = strlen($string);
        $tmpstr = '';
        for($i=0; $i<$strlen; $i++){
            if($i>=$start && $i<($start+$sublen)){
                if(ord(substr($string, $i, 1))>129){
                    $tmpstr.= substr($string, $i, 2);
                }else{
                    $tmpstr.= substr($string, $i, 1);
                }
            }
            if(ord(substr($string, $i, 1))>129) $i++;
        }
    if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";
    return $tmpstr;
    }
}


/**
 * @author 随机生成字符串
 * @param $len 生成数量
 */
function GetfourStr($len)
{
    $chars_array = array(
        "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
//        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
//        "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
//        "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",
//        "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",
//        "S", "T", "U", "V", "W", "X", "Y", "Z",
    );
    $charsLen = count($chars_array) - 1;

    $outputstr = "";
    for ($i=0; $i<$len; $i++)
    {
        $outputstr .= $chars_array[mt_rand(0, $charsLen)];
    }
    return $outputstr;
}


/**
 * @author 对二维数组排序
 * @param $arrays
 * @param $sort_key
 * @param int $sort_order
 * @param int $sort_type
 * @return array
 */
function my_sort( $arrays,$sort_key,$sort_order=SORT_DESC,$sort_type=SORT_NUMERIC ){
    if(is_array($arrays)){
        foreach ($arrays as $array){
            if(is_array($array)){
                $key_arrays[] = $array[$sort_key];
            }else{
                return false;
            }
        }
    }else{
        return false;
    }
    array_multisort($key_arrays,$sort_order,$sort_type,$arrays);
    return $arrays;
}


/**
 * @author  删除原有的图片
 * @param   $img [图片地址]
 */
function deleteOldImg ($img) {
    if ( $img != '' ) {
        $len = substr($img,0, 5);
        if ( $len != 'http' || $len != 'https' ) {
            $filePath = public_path() . $img;
            if (is_file($filePath)) {
                unlink($filePath);
            }
        }
    }
}




/********************************************  数据库类型函数  ********************************************************/
