<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class ImageTest extends UnitTestCase {

//-----------------------------------------------------------------------------
// Setting Methods
//-----------------------------------------------------------------------------

        public function testGD2Extension() {

            $image = new image();
            $this->assertWithinMargin($image->gd_version, 2, 1);

        }

        public function testImageFormats() {

            $image = new image();
            $this->assertEqual($image->gd_support_gif, true);
            $this->assertEqual($image->gd_support_png, true);
            $this->assertEqual($image->gd_support_jpg, true);

        }

        public function testFreetype() {

            $image = new image();
            $this->assertEqual($image->gd_support_ttf, true);

        }

        public function testCreateAndDestroyImage() {

            $image = new image();
            
            $image->createImage(100,100);
            $this->assertEqual($image->testImageHandle(), true);
            $image->destroyImage();
            $this->assertNull($image->image);

        }

        public function testOpenAndDestroyImage_GIF() {

            $image = new image();
            
            if ($image->gd_support_gif) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.gif"), true);
                $this->assertEqual(get_resource_type($image->image), "gd");
                $image->destroyImage();
                $this->assertNull($image->image);
            }

        }

        public function testOpenAndDestroyImage_PNG() {

            $image = new image();
            
            if ($image->gd_support_png) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png"), true);
                $this->assertEqual(get_resource_type($image->image), "gd");
                $image->destroyImage();
                $this->assertNull($image->image);
            }

        }

        public function testOpenAndDestroyImage_JPEG() {

            $image = new image();
            
            if ($image->gd_support_jpg) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.jpg"), true);
                $this->assertEqual(get_resource_type($image->image), "gd");
                $image->destroyImage();
                $this->assertNull($image->image);
            }

        }

        public function testImageIsTrueColor() {

            $image = new image();

            if ($image->gd_support_gif) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.gif"), true);
                $this->assertEqual($image->imageIsTrueColor(), false);
            }

            $image->destroyImage();
            $this->assertNull($image->image);

            if ($image->gd_support_jpg) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.jpg"), true);
                $this->assertEqual($image->imageIsTrueColor(), true);
            }

            $image->destroyImage();
            $this->assertNull($image->image);
            
        }

        public function testImageColorAt() {

            $image = new image();

            if ($image->gd_support_gif) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.gif"), true); //8 bit GIF image
                $this->assertEqual($image->imageColorAt(3,3), 255); //Solid blue
            }

            $image->destroyImage();
            $this->assertNull($image->image);

            if ($image->gd_support_png) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png"), true); //32 bit PNG image
                $this->assertEqual($image->imageColorAt(3,3), 255); //Solid blue
            }

            $image->destroyImage();
            $this->assertNull($image->image);

            if ($image->gd_support_jpg) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.jpg"), true); //24 bit JPEG image
                $this->assertEqual($image->imageColorAt(3,3), 4537); //Solid blue (with jpg compression so it's the wrong color)
            }

            $image->destroyImage();
            $this->assertNull($image->image);

        }
        
        public function testEvaluateFXStack() {
        
            $image = new image();
            $analyser = $image->attach(new image_analyser());

            if ($image->gd_support_png) {
                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png"), true); //32 bit PNG image
                $this->assertEqual($image->evaluateFXStack(), true);
            }
       
        }

    }
