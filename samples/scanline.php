<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/quay.jpg");
    
    $image->attach(new image_fx_resize(250));
    $image->attach(new image_fx_crop(206, 100));
    
    $image->attach(new image_draw_scanline(2, "FFFFFF", 120, 110));

    $image->attach(new image_fx_corners(15,15));

    $image->imagePng();
