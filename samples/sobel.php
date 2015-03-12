<?php

    define("IMAGE_BASE","..");

    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/flowers.jpg");
    
    $image->attach(new image_fx_resize(196));
    $image->attach(new image_fx_crop(0,100));
    $image->attach(new image_fx_sobel());

    $image->imagePng();
