<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginResizeTest extends UnitTestCase {

        public function testPluginResize() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_resize()), true);

        }

    }
