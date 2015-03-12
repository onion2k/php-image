# Image.class.php #

Image.class.php is the framework upon which everything in PHP Image sits. It contains methods for creating new images, opening existing images, attaching plugins, outputting images, and a few helper methods that plugins can access for things like dimensions, colors and calculated stuff like convolution and displacement.

## `__Construct` ##

`__construct()` is called whenever a new image object is instantiated. It accepts one or two parameters. If one parameter is passed then it is assumed to be a filename, and the image at that location is opened. If two parameters are passed they are assumed to be dimensions and a truecolor image that size is created.

## Attaching plugins ##

There are two plugin functions - `attachePlugin()` and `evaluateFXStack()`. `attachPlugin()` adds a new plugin to the plugin stack. `evaluateFXStack()` is called when an image is outputted and runs the attached plugins.

## Image Creation ##

There are 3 image creation methods:

  * `createImage()` - Creates an 8 bit palette image. Accepts 3 parameters: width, height and a background color.
  * `createImageTrueColor()` - Creates a 32 bit true color image. Accepts 3 parameters: width, height and a background color.
  * `createImageTrueColorTransparent()` - Creates a 32 bit true color image with a transparent background. Accepts 2 parameters: width and height.

## Opening Existing Images ##

There is only one method for creating an image from an existing file - `openImage()`. The file specified will be examined and which GD function for opening it will be determined automatically, then the file will be opened properly if the format is supported.

## Image Output ##

There are 3 image output methods:

  * `imageGif()` - Outputs a GIF image.
  * `imagePng()` - Outputs a PNG image.
  * `imageJpeg()` - Outputs a JPEG image.

All three output methods work the same way as their PHP counterparts. All will run the FX stack prior to generating an image.

## Image Information Functions ##

Information functions return a small amount of commonly accessed information about an image. There are 3 functions, `imagesx()` and `imagesy()` that work in the same way as there PHP counterparts returning the width and height of the image respectively, and `testImageHandle()` that confirms the image handle is a valid GD resource.

## Working with colors ##

Accessing color information, and performing color conversion is an important aspect of working with images. To that end there are several color functions in image.class.php.

  * `imageIsTrueColor()` - Checks whether the image is true color or palette.
  * `imageColorAt()` - Returns an integer value for the color at position $x,$y. Unlike it's PHP counterpart this function always returns the color even if the image is not true color so there's no need to gather that information from the palette.
  * `arrayColorToIntColor()` - A function to take a color array and return it's integer value. Can be called as a static function.
  * `arrayColorToHexColor()` - A function to take a color array and return it's hex value. Can be called as a static function.
  * `intColorToArrayColor()` - A function to take a color integer and return a color array. Can be called as a static function.
  * `intColorToHexColor()` - A function to take a color integer and return a hex color. Can be called as a static function.
  * `hexColorToArrayColor()` - A function to take a hex color and return a color array. Can be called as a static function.
  * `hexColorToIntColor()` - A function to take a hex color and return a color integer. Can be called as a static function.

## Helper Functions ##

Helper functions perform image manipulations that might be needed in several different plugins.

  * `imagefill()` - The same as it's PHP counterpart. Mainly used in the imagecreate functions for background colors.
  * `imagecolorallocate()` - The same as it's PHP counterpart.
  * `displace()` - Shifts pixels around according to a displacement map. Currently used by the ripple and the jitter plugins.

## Magic Functions ##

The magic functions are `__get()` and `__set()`. These are called whenever a class variable is accessed or set. Most class variables are stored in the settings array, with the exception of:

  * `image` - the handle for the GD image resource.
  * `handle_x` - The handle position for the image, either the top left or the centre depending on whether mid\_handle is true or false.
  * `handle_y` - As handle\_x.
  * `a_` - Values starting with `a_` are the id of an attached plugin.

## Private Functions ##

  * `_detectGD()` - Performs a small number of functions to check GD settings when an image is created.
  * `_file_info()` - Performs a small number of functions when an image is opened.
  * `_blank_png()` - A base64 encoded PNG file stored as a string that is used to create transparent images quickly.