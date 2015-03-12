<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginVignetteTest extends UnitTestCase {

        public function testPluginVignette() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_vignette()), true);

        }

    }
