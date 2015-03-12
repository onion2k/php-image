<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginInfobarTest extends UnitTestCase {

        public function testPluginInfobar() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_infobar()), true);

        }

    }
