<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginOffsetTest extends UnitTestCase {

        public function testPluginOffset() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_offset()), true);

        }

    }
