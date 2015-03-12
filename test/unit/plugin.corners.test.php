<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginCornersTest extends UnitTestCase {

        public function testPluginCorners() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_corners()), true);

        }

    }
