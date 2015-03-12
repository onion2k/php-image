<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginCanvassizeTest extends UnitTestCase {

        public function testPluginCanvassize() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_canvassize()), true);

        }

    }
