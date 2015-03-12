<?php

    require_once IMAGE_BASE."/image/image.inc.php";

    class pluginCaptchaTest extends UnitTestCase {

        public function testPluginCaptcha() {

            $image = new image();
            $this->assertEqual($image->attach(new image_draw_captcha()), true);

        }

    }
