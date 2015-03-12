<?php

    define("IMAGE_BASE","..");

    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/car.jpg");
    
    $image->attach(new image_fx_resize(198));
    $image->attach(new image_fx_crop(156,60));
    $image->attach(new image_fx_blackandwhite());
    
    $image->attach(new image_draw_border(2, "000000"));
    $image->attach(new image_draw_border(1, "FFFFFF"));
    $image->attach(new image_draw_border(17, "000000"));

    $image->imagePng();
