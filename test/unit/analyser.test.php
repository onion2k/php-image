<?php

    require_once IMAGE_BASE."/image/image.inc.php";
    require_once IMAGE_BASE."/image/analyser.class.php";

    class ImageAnalyserTest extends UnitTestCase {

//-----------------------------------------------------------------------------
// Setting Methods
//-----------------------------------------------------------------------------

        public function testSize() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png");
            $this->assertEqual($image->testImageHandle(), true);
            $this->assertEqual($image->imagesx(), 100);
            $this->assertEqual($image->imagesy(), 100);
            $image->destroyImage();

        }

        public function testCountColors() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png");
            $this->assertEqual($image->$analyser->countColors(), 19);
            $image->destroyImage();

        }

        public function testHue() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."lightgreen.png");
            $this->assertEqual($image->$analyser->hue(3, 3), 120);
            $image->destroyImage();

        }

        public function testBrightness() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."lightgreen.png");
            $this->assertEqual($image->$analyser->brightness(3, 3), 100);
            $image->destroyImage();

        }

        public function testSaturation() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."lightgreen.png");
            $this->assertEqual($image->$analyser->saturation(3, 3), 50);
            $image->destroyImage();

        }

        public function testAverageChannel() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png");
            $this->assertEqual($image->$analyser->averageChannel("r"), 218);
            $this->assertEqual($image->$analyser->averageChannel("g"), 218);
            $this->assertEqual($image->$analyser->averageChannel("b"), 218);
            $image->destroyImage();

        }

        public function testMaxChannel() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png");
            $this->assertEqual($image->$analyser->maxChannel("r"), 255);
            $this->assertEqual($image->$analyser->maxChannel("g"), 255);
            $this->assertEqual($image->$analyser->maxChannel("b"), 255);
            $image->destroyImage();

        }

        public function testMinChannel() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."image.png");
            $this->assertEqual($image->$analyser->minChannel("r"), 1);
            $this->assertEqual($image->$analyser->minChannel("g"), 1);
            $this->assertEqual($image->$analyser->minChannel("b"), 1);
            $image->destroyImage();

        }

        public function testImageHue() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."green.png");
            $this->assertEqual($image->$analyser->imageHue(), 120);
            $image->destroyImage();

        }

        public function testImageSaturation() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."green.png");
            $this->assertEqual($image->$analyser->imageSaturation(), 100);
            $image->destroyImage();

        }

        public function testImageBrightness() {

            $image = new image();
            $analyser = $image->attach(new image_analyser());
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."green.png");
            $this->assertEqual($image->$analyser->imageBrightness(), 100);
            $image->destroyImage();

        }

    }
