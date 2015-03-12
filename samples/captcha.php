<?php

    define("IMAGE_BASE","..");
    
    include_once IMAGE_BASE.DIRECTORY_SEPARATOR."image/image.inc.php";

    $image = new Image();
    $image->createImageTrueColor(206,96,"FF0000");
    
    //Primitives
    $background = new image_draw_primitive("FFFFFF");
    $background->addLine(20,20, 80,80);
    $background->addRectangle(100,20, 180,80);
    $background->addFilledRectangle(150,10, 170,30);

    $background->addEllipse(10,50, 20,60);
    $background->addFilledEllipse(140,60, 160,80);

    $background->addCircle(200,50,30);

    $image->attach($background);
    
    //Captcha text
    $captcha = new image_draw_captcha("captcha");
    $captcha->addTTFFont(IMAGE_BASE.DIRECTORY_SEPARATOR."fonts/blambotcustom.ttf");
    $captcha->addTTFFont(IMAGE_BASE.DIRECTORY_SEPARATOR."fonts/adventure.ttf");
    $captcha->addTTFFont(IMAGE_BASE.DIRECTORY_SEPARATOR."fonts/bluehigh.ttf");
    $captcha->text_size = 20;
    $captcha->text_size_random = 20;
    $captcha->text_angle_random = 60;
    $captcha->text_spacing = 5;
    $image->attach($captcha);

    //Add a border
    $image->attach(new image_draw_border(1, "BBBBBB"));
    $image->attach(new image_draw_border(1, "FFFFFF"));

    $image->imagePng();
