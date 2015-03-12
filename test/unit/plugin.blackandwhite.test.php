<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginBlackAndWhiteTest extends UnitTestCase {

        public function testPluginBlackAndWhite() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_blackandwhite()), true);

        }

    }
