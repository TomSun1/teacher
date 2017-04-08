<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Session;
use think\Request;
use org\Upload;
class Exercises extends Base {

    public function index() {
        return $this->fetch();
    }

    public function add() {
        if (Request::instance()->param()) {
            $param = Request::instance()->param();
            
        }
        return $this->fetch();
    }

    public function upload() {
        $config = [
            'maxSize'      => 2048000,
            'exts'         => ['jpg','gif','png','jpeg'],
            'autoSub'      => true,
            'subName'      => ['date', 'Y-m-d'],
            'savePath'     => 'attachement/',
            'saveExt'      => 'jpg',
            'hash'         => true,
            'callback'     => true,
            'driver'       => 'Local',
        ];
        $uploader = new Upload($config);
        $info = $uploader->upload();
        if(!$info){
            echo $uploader->getError();
        }else{
            header("Content-type:image/jpeg");
            echo '../../../Uploads/'.$info['wangEditorH5File']['savepath'].$info['wangEditorH5File']['savename'];
        }

    }
}

?>