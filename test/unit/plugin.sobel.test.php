<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginSobelTest extends UnitTestCase {

        public function testPluginSobel() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_sobel()), true);

        }

    }
