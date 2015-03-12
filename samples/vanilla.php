<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image(IMAGE_BASE.DIRECTORY_SEPARATOR."source/hotel.jpg");
    $image->attach(new image_fx_resize(200));
    $image->attach(new image_fx_crop(0, 94));
    $image->attach(new image_draw_border(1, "FFFFFF"));
    $image->attach(new image_draw_border(1, "BBBBBB"));
    $image->attach(new image_draw_border(1, "FFFFFF"));

    $image->imagePng();
