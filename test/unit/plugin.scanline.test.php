<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginScanlineTest extends UnitTestCase {

        public function testPluginScanline() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_scanline()), true);

        }

    }
