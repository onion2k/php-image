<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/face.jpg");
    $image->attach(new image_fx_resize(198));
    $image->attach(new image_fx_crop(194,94));
    
    $image->attach(new image_fx_filter(IMG_FILTER_NEGATE));
    $image->attach(new image_draw_border(1, "FFFFFF"));
    $image->attach(new image_draw_border(1, "BBBBBB"));
    $image->attach(new image_draw_border(1, "FFFFFF"));

    $image->imagePng();
