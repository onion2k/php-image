<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/beach.jpg");
    
    $image->attach(new image_fx_resize(200));
    $image->attach(new image_fx_crop(0, 86));
    $image->attach(new image_draw_border(2, "000000"));
    $image->attach(new image_fx_canvassize(0, 10, 10, 0));

    $watermark = new image_draw_watermark(new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/button.png"));
    $watermark->setPosition("br");
    $image->attach($watermark);

    $image->imagePng();
