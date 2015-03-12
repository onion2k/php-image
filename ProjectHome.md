# PHP Image #
PHP Image is an image class framework to help create images with PHP and GD2. Pretty much any common task is achievable through the use of simple plugins. The code is PHP 5 only, it is extensively unit tested, and it's completely free.


---


# A simple thumbnail example #
Creating a thumbnail of an image is very easy indeed.
```
$image = new Image("image.jpg");
$image->attach(new image_fx_resize(200));
$image->imagePng();
```


---


# A simple CAPTCHA example #
Creating a captcha is also straightforward.
```
$image = new Image();
$image->createImageTrueColor(206,96,"FF0000");

$captcha = new image_draw_captcha("captcha");
$captcha->addTTFFont("fonts/arial.ttf");
$image->attach($captcha);

$image->imagePng();
```