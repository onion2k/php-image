<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class FXTest extends UnitTestCase {

        public function testFXStack() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_resize(50)), true);
            $this->assertEqual($image->attach(new image_fx_crop(50)), true);

        }

    }
