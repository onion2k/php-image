<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginPrimitiveTest extends UnitTestCase {

        public function testPluginPrimitive() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_primitive()), true);

        }

    }
