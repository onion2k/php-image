<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginBorderTest extends UnitTestCase {

        public function testPluginBorder() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_border()), true);

        }

    }
