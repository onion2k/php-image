<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/reflect.jpg");
    
    $image->attach(new image_fx_resize(206));
    $image->attach(new image_fx_crop(194, 88));

    $image->attach(new image_fx_corners(15,15));
    
    $image->attach(new image_draw_trueshadow(5, "444444", array(1,1,1,2,2,4,4,8,4,4,2,2,1,1,1)));

    $image->imagePng();
