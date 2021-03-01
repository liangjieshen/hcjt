// 手机和电话验证
function checkPhone(phone){
    if( !(/^1[3456789]\d{9}$/.test(phone)) ){ 
        return false; 
    }
}