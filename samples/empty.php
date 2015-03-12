<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image();
    $image->createImageTrueColorTransparent(192,96);
    $image->attach(new image_fx_canvassize(0, 0, 0, 0, "FFFFFF"));
    $image->attach(new image_draw_border(1, "BBBBBB"));
    $image->attach(new image_draw_border(1, "FFFFFF"));

    $image->imagePng();
