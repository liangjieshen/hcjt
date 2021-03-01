<?php
namespace APP\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use zgldh\QiniuStorage\QiniuStorage;
class UploadsController extends Controller
{

    // 单图片上传
    public function upload(Request $request) {

        //上传文件最大大小,单位M
        $maxSize = 10;
        //支持的上传图片类型
        $allowed_extensions = ["png", "jpg", "jpeg", "gif"];
        //返回信息json
        $data = ['code' => 200, 'msg' => '上传失败', 'data' => ''];
        $file = $request->file('file');

        //检查文件是否上传完成
        if (!$file->isValid()) {
            $data['msg'] = $file->getErrorMessage();
            return response()->json($data);
        }
        //检测图片类型
        $ext = $file->getClientOriginalExtension();
        if (!in_array(strtolower($ext), $allowed_extensions)) {
            $data['msg'] = "请上传" . implode(",", $allowed_extensions) . "格式的图片";
            return response()->json($data);
        }
        //检测图片大小
        if ($file->getClientSize() > $maxSize * 2048 * 2048) {
            $data['msg'] = "图片大小限制" . $maxSize . "M";
            return response()->json($data);
        }
        $disk = Storage::disk('uploadImg');
//        $disk = QiniuStorage::disk('qiniu');
        $newFile = uniqid() . time() . "." . $file->getClientOriginalExtension();
        $res = $disk->put($newFile, file_get_contents($file->getRealPath()));
        if ($res) {
            $downloadUrl = '/upload/images/' . date('Ymd') . '/' . $newFile;
            $data = [
                'code' => 0,
                'msg' => '上传成功',
                'data' => $newFile,
                'url' => $downloadUrl
            ];
        } else {
            $data['data'] = $file->getErrorMessage();
        }
        return response()->json($data);

    }



    // 富文本上传图片
    public function LayEdit(Request $request) {

        //上传文件最大大小,单位M
        $maxSize = 10;
        //支持的上传图片类型
        $allowed_extensions = ["png", "jpg", "jpeg", "gif"];
        //返回信息json
        $data = ['code' => 200, 'msg' => '上传失败', 'data' => ''];
        $file = $request->file('file');

        //检查文件是否上传完成
        if (!$file->isValid()) {
            $data['msg'] = $file->getErrorMessage();
            return response()->json($data);
        }
        //检测图片类型
        $ext = $file->getClientOriginalExtension();
        if (!in_array(strtolower($ext), $allowed_extensions)) {
            $data['msg'] = "请上传" . implode(",", $allowed_extensions) . "格式的图片";
            return response()->json($data);
        }
        //检测图片大小
        if ($file->getClientSize() > $maxSize * 1024 * 1024) {
            $data['msg'] = "图片大小限制" . $maxSize . "M";
            return response()->json($data);
        }
        $disk = Storage::disk('uploadImg');
//        $disk = QiniuStorage::disk('qiniu');
        $newFile = uniqid() . time() . "." . $file->getClientOriginalExtension();
        $res = $disk->put($newFile, file_get_contents($file->getRealPath()));
        if ($res) {
            $downloadUrl = '/upload/images/' . date('Ymd') . '/' . $newFile;
            $data = [
                'code' => 0,
                'msg' => '上传成功',
                'data' => [
                    'src' => $downloadUrl,
                    'title' => $newFile
                ]
            ];
        } else {
            $data['data'] = $file->getErrorMessage();
        }
        return response()->json($data);

    }


}
