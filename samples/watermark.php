<?php

    define("IMAGE_BASE","..");

    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/boat.jpg");
    
    $image->attach(new image_fx_resize(198));
    $image->attach(new image_fx_crop(196,96));

    $wm_image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/phpimage.png");
    $wm_image->mid_handle = false;

    $watermark = new image_draw_watermark($wm_image);
    $watermark->setPosition(0,60);
    $image->attach($watermark);
    $image->attach(new image_draw_border(2, "000000"));

    $image->imagePng();
