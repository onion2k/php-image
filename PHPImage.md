# PHP Image #

PHP Image consists of a base framework class, image.class.php, and any number of plugin objects that change the image or perform calculations on the image.

## Using image.class.php ##

  * [A basic guide to using image.class.php](tutorialBasics.md)
  * [Creating and saving a thumbnail image](tutorialThumbnails.md)
  * [Generating a CAPTCHA image with TTF fonts](tutorialCaptcha.md)
  * [Modifying an image with some effect plugins](tutorialPlugins.md)
  * [A more advanced image created with stacked plugins](tutorialAdvancedPlugins.md)
  * [Writing your own plugins for image.class.php](tutorialPluginCreation.md)

## Image Class ##

  * [image.class.php](imageClass.md)
  * [image\_plugin interface and image plugin base class](imagePlugin.md)

## Analyser plugins ##

Analyser plugins gather data and perform calculations.

  * [analyser.class.php - Perform a number of calculations on an image](pluginAnalyser.md)
  * [exif.class.php - Gather EXIF data from a digital photo](pluginExif.md)

## Drawing Plugins ##

Drawing plugins add new pixels to an image.

  * [border.class.php - add borders to an image](pluginBorder.md)
  * [captcha.class.php - draw TTF captcha text on an image](pluginCaptcha.md)
  * [infobar.class.php - Add an information bar to an image](pluginInfo.md)
  * [scanline.class.php - Add alternating scanlines to an image](pluginScanline.md)
  * [trueshadow.class.php - Add a drop shadow to an image](pluginTrueshadow.md)
  * [watermark.class.php - Add a watermark image to an image](pluginWatermark.md)

## Effect Plugins ##

Effect plugins change the pixels in an image.

  * [blackandwhite.class.php - Convert to black and white with a number of algorithms](pluginBlackAndWhite.md)
  * [canvassize.class.php - Increase the size of the image adding transparent pixels at the edges](pluginCanvassize.md)
  * [corners.class.php - Round the corners of an image](pluginCorners.md)
  * [crop.class.php - Crop an image to a smaller size](pluginCrop.md)
  * [filter.class.php - Access imagefilter() effects](pluginFilter.md)
  * [flip.class.php - Flip an image in the horizontal or vertical axis](pluginFlip.md)
  * [gaussian.class.php - Blur pixels in an image with a gaussian convolution](pluginGaussian.md)
  * [jitter.class.php - Randomly jitter pixels](pluginJitter.md)
  * [offset.class.php - Move pixels by an offset amount](pluginOffset.md)
  * [resize.class.php - Resize an image](pluginResize.md)
  * [ripple.class.php - Transform pixels with an ripple effect](pluginRipple.md)
  * [sobel.class.php - Convert an image to Sobel Edges](pluginSobel.md)
  * [vignette.class.php - Add a transparent vignette](pluginVignette.md)