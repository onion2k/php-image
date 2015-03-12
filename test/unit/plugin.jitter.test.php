<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginJitterTest extends UnitTestCase {

        public function testPluginJitter() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_jitter()), true);

        }

    }
