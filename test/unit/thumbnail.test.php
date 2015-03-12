<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class ThumbnailTest extends UnitTestCase {

//-----------------------------------------------------------------------------
// Setting Methods
//-----------------------------------------------------------------------------

        public function testSetAndGet() {

            $image = new image();

            $image->value = 100;

            $this->assertEqual($image->value, 100);

        }

        public function testSetResizeShortcut() {

            $image = new image();
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."resize.png");

            $this->assertEqual($image->imagesx(), 320);
            $this->assertEqual($image->imagesy(), 240);
            
            $resize = new image_fx_resize();
            $resize->setResize(100,100);

            $attachment_id = $image->attach($resize);

            $this->assertEqual($image->$attachment_id->resize_x, 100);
            $this->assertEqual($image->$attachment_id->resize_y, 100);
            
            $image->evaluateFXStack();

            $this->assertEqual($image->imagesx(), 100);
            $this->assertEqual($image->imagesy(), 100);

        }

        public function testSetCropShortcut() {

            $image = new image();
            $image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."resize.png");

            $this->assertEqual($image->imagesx(), 320);
            $this->assertEqual($image->imagesy(), 240);
            
            $crop = new image_fx_crop();
            $crop->setCrop(100,100);

            $attachment_id = $image->attach($crop);

            $this->assertEqual($image->$attachment_id->crop_x, 100);
            $this->assertEqual($image->$attachment_id->crop_y, 100);
            
            $image->evaluateFXStack();

            $this->assertEqual($image->imagesx(), 100);
            $this->assertEqual($image->imagesy(), 100);

        }
        
        public function testCalculateResize() {

            $image = new image();
            $resize = new image_fx_resize();
            $attachment_id = $image->attach($resize);

            if ($image->gd_support_png) {

                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."resize.png"), true);
            
                $image->$attachment_id->setResize(160);
                $image->$attachment_id->calculate();
                $this->assertEqual($image->$attachment_id->canvas_x, 160);
                $this->assertEqual($image->$attachment_id->canvas_y, 120);

                $image->$attachment_id->setResize(0,60);
                $image->$attachment_id->calculate();
                $this->assertEqual($image->$attachment_id->canvas_x, 80);
                $this->assertEqual($image->$attachment_id->canvas_y, 60);

                $image->$attachment_id->setResize(100,50);
                $image->$attachment_id->calculate();
                $this->assertEqual($image->$attachment_id->canvas_x, 100);
                $this->assertEqual($image->$attachment_id->canvas_y, 50);

            }

        }
        
        public function testCalculateCropping() {

            $image = new image();
            $crop = new image_fx_crop();
            $attachment_id = $image->attach($crop);
            
            if ($image->gd_support_png) {

                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."resize.png"), true);
            
                $image->$attachment_id->setCrop(160);
                $image->$attachment_id->calculate();
                $this->assertEqual($image->$attachment_id->canvas_x, 160);
                $this->assertEqual($image->$attachment_id->canvas_y, 240);

                $image->$attachment_id->setCrop(0,60);
                $image->$attachment_id->calculate();
                $this->assertEqual($image->$attachment_id->canvas_x, 320);
                $this->assertEqual($image->$attachment_id->canvas_y, 60);

                $image->$attachment_id->setCrop(100,50);
                $image->$attachment_id->calculate();
                $this->assertEqual($image->$attachment_id->canvas_x, 100);
                $this->assertEqual($image->$attachment_id->canvas_y, 50);

            }

        }


        public function testCalculateResizeAndCrop() {

            $image = new image();

            $resize = new image_fx_resize();
            $resize_id = $image->attach($resize);

            $crop = new image_fx_crop();
            $crop_id = $image->attach($crop);

            if ($image->gd_support_png) {

                $this->assertEqual($image->openImage(TEST_BASE.DIRECTORY_SEPARATOR."resize.png"), true);
            
                $image->$resize_id->resize_x = 160;
                $image->$crop_id->crop_x = 120;
                
                $image->evaluateFXStack();
                
                $this->assertEqual($image->imagesx(), 120);
                $this->assertEqual($image->imagesy(), 120);

            }

        }

    }
