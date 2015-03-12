<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginWatermarkTest extends UnitTestCase {

        public function testPluginWatermark() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_watermark()), true);

        }

    }
