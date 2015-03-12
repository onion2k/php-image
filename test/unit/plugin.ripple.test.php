<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginRippleTest extends UnitTestCase {

        public function testPluginRipple() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_ripple()), true);

        }

    }
