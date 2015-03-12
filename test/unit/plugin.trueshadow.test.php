<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginTrueshadowTest extends UnitTestCase {

        public function testPluginTrueshadow() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_trueshadow()), true);

        }

    }
