<?php

    //Image Unit Tests

    require_once "config.inc.php";

    class ImageTestSuite extends TestSuite {
        public function __construct() {
            parent::__construct('All Image tests');
            $this->addFile(TEST_BASE . '/unit/image.test.php');
            $this->addFile(TEST_BASE . '/unit/analyser.test.php');
            $this->addFile(TEST_BASE . '/unit/fx.test.php');
            $this->addFile(TEST_BASE . '/unit/thumbnail.test.php');

            $this->addFile(TEST_BASE . '/unit/plugin.blackandwhite.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.border.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.canvassize.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.captcha.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.corners.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.crop.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.filter.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.flip.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.gaussian.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.infobar.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.jitter.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.offset.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.primitive.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.resize.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.ripple.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.scanline.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.sobel.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.trueshadow.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.vignette.test.php');
            $this->addFile(TEST_BASE . '/unit/plugin.watermark.test.php');

        }
    }
