<?php

    define("IMAGE_BASE","..");

    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/stamens.jpg");
    
    $image->attach(new image_fx_resize(196));
    $image->attach(new image_fx_crop(0,96));
    $watermark = new image_draw_watermark(new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/watermark.png"));
    $watermark->setPosition("tile");
    $image->attach($watermark);
    $image->attach(new image_draw_border(2, "000000"));

    $image->imagePng();
