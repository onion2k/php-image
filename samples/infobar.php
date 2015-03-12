<?php

    define("IMAGE_BASE","..");

    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/road.jpg");
    
    $image->attach(new image_fx_resize(250));
    $image->attach(new image_fx_crop(196, 70));
    $image->attach(new image_draw_infobar("[Filename]", "t", "c", "FFFFBB", "000000"));
    $image->attach(new image_fx_corners(10,10));
    $image->attach(new image_draw_border(5, "000000"));
    $image->attach(new image_fx_corners(12,12));

    $image->imagePng();
