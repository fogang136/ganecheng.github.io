<?php
//上传操作
require_once './libs/uploadx.php';
$upx = new uploadx();
$upx->uploadx_form = 'swfile';
$upx->uploadx_save = "upload";
$upx->uploadx_size = "1024"; 
$upx->uploadx_name = time();
$upx->file();
print_r($upx->file);

