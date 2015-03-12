<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginGaussianTest extends UnitTestCase {

        public function testPluginGaussian() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_gaussian()), true);

        }

    }
