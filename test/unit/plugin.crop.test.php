<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginCropTest extends UnitTestCase {

        public function testPluginCrop() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_crop()), true);

        }

    }
