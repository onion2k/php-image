<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginFlipTest extends UnitTestCase {

        public function testPluginFlip() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_flip()), true);

        }

    }
