# Creating a basic image #

Let's make a bright red square 100 pixels wide and high.

In order to create any image we need to include the image class.

`include_once "image/image.class.php";`

Now that the class is loaded we can create an image. Creating a new instance of image with 2 parameters will automatically create a new true color image with the specified dimensions.

`$image = new Image(100,100);`

At the moment the image is a plain white square as that is the default background color. That's a bit dull though, so we'll call the `imagefill()` method to change it to a lovely red. `imagefill()` requires the same parameters as the PHP function with the same name, with the exception that it needs the color to be specified as a hex color.

`$image->imagefill(0,0,"FF0000");`

Our image is now a bright red square. As that's what we want we need to send it to the browser. We can send it in one of three formats, GIF, PNG or JPEG. As it's a simple graphic either GIF or PNG would result in the best looking file. It's true color though so using PNG will result in a 24 bit image that won't have to be palettised before it's sent - that's ideal.

`$image->imagePng();`

Saving the script and calling it from a browser will now display a red square. Easy!

Putting the whole script together:

```
include_once "image/image.class.php";

$image = new image(100,100);
$image->imagefill(0,0,"FF0000");

$image->imagePng();
```

The final image:
![http://www.ooer.com/phpimage/tutorialBasics.png](http://www.ooer.com/phpimage/tutorialBasics.png)

Next we'll learn how to use Image to create a thumbnail of an existing or an uploaded image.