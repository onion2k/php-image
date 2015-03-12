<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/field.jpg");
    
    $image->attach(new image_fx_resize(200));
    $image->attach(new image_fx_crop(0, 90));

    $image->attach(new image_fx_ripple());
    $image->attach(new image_fx_corners(13,13));
    $image->attach(new image_draw_border(5, "FFFFFF"));
    $image->attach(new image_fx_corners(15,15));

    $image->imagePng();
