# Creating and saving a thumbnail #

One of the most common tasks for PHP and GD in web development is the creation of a thumbnail from an image uploaded by a user. In this tutorial we will go through the necessary stages to open an image, resize and crop it if necessary, and then save a copy to the server.

Actually uploading an image is beyond the scope of this tutorial. Suffice to say there are many tutorials that cover this on the internet, so Google 'file upload php' first if you need to create that part of the script. In this tutorial we will assume that there is a working upload form that places the uploaded file into $_FILES with a field name of 'image\_upload'._

As with all image.class.php scripts the first thing we need to do is include the library. Note that this time, rather than only including the image.class.php file we are including the image.inc.php file. This file includes all the plugins as well as the image.class.php library.

`include_once "image/image.inc.php";`

The image has been uploaded as 'image\_upload' so we first need to gather a few bits of data from the `$_FILES` array:

```
$name = $_FILES['image_upload']['name'];
$tmp_name = $_FILES['image_upload']['tmp_name'];
```

The original filename is now stored in `$name` and the name of the temporary copy is stored in `$tmp_name`. You should also valid the filetype and the filesize of the uploaded file as a matter of course, but again that is beyond the scope of this tutorial.

Next we need to create an instance of the Image class and open the image file.

`$image = new Image($tmp_name);`

As this stage it is sensible to check the file opened correctly. image.class.php provides a method for checking that an image is a valid GD resource.

```
if (!$image->testImageHandle()) {
  //Display an error to the user;
}
```

Now that we have tested the image and we know that it is a valid resource we can attach a plugin to resize it. This is done with the `image_fx_resize()` plugin. `image_fx_resize()` takes one or two parameters, a maximum width and a maximum height. If either parameter is set to zero then the image will be resized with the correct aspect ratio to the parameter that is non-zero. If both parameters are set to a non-zero value then the image will be resized to those specific dimensions. If both parameters are set to zero then no resizing will occur. For our thumbnail in this example we will set the width to 200px.

```
$image->attach(new image_fx_resize(200));
```

To resize the height we would need to set the width to zero manually, eg `new image_fx_resize(0,150)`.

Now that the image is set to resize to a maximum of 200px wide we need to control the height in case someone uploads a very tall image. That would break the layout of our website. We could give `image_fx_resize()` a second parameter to resize the height but that would cause the aspect ratio of the image to be wrong and would result in a nasty squashed thumbnail. Instead we will crop the image. This means that the thumbnail will lose some of the image data from the top and bottom, but that is usually preferable to resizing badly.

Cropping is achieved with the `image_fx_crop()` plugin. Like the resize plugin this also takes a width and a height parameter. If either is set to zero then no cropping will occur along that axis. If either is non-zero then the image will be cropped to that value. We will make our image a maximum of 160px tall.

`$image->attach(new image_fx_crop(0,160));`

Our image is ready to go. Once uploaded the image will be resized to 200px wide, then cropped to 160px tall. All we need to do now is save it.

Saving the image is very straightforward. All we need to do is call one of the image output functions with a filename.

```
$image->imagePng("thumbnail.png");
```

Of course, this would overwrite the thumbnail every time someone uploads a new image, so in a real script we would need a routine to generate a thumbnail filename based on the original image's filename.

Putting all the code together we get:

```
    include_once "image/image.inc.php";

    $image = new image($tmp_name);

    if (!$image->testImageHandle()) {
        //Display an error to the user;
    }

    $image->attach(new image_fx_resize(200));
    $image->attach(new image_fx_crop(0,160));

    $image->imagePng("thumbnail.png");
```