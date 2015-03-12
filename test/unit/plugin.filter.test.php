<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginFilterTest extends UnitTestCase {

        public function testPluginFilter() {

            $image = new image();
            $this->assertEqual($image->attach(new image_fx_filter()), true);

        }

    }
