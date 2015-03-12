<?php

    define("IMAGE_BASE","..");

    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/icecream.jpg");
    
    $image->attach(new image_fx_resize(196));
    $image->attach(new image_fx_crop(166,70));

    $image->attach(new image_fx_corners(15,15));

    $image->attach(new image_draw_border(5, "FF0000"));
    $image->attach(new image_fx_corners(17,17));

    $image->attach(new image_draw_border(5, "FF8888"));
    $image->attach(new image_fx_corners(20,20));
    
    $image->attach(new image_draw_border(5, "FFCCCC"));
    $image->attach(new image_fx_corners(22,22));

    $image->imagePng();
