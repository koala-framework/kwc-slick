<?php
class Kwc_Slick_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Slick Carousel');
        $ret['generators']['child']['component'] = 'Kwc_Slick_Image_Component';

        // For more settings see: https://github.com/kenwheeler/slick/
        $ret['slickConfig'] = array(
            'autoplay' => false,
            'autoplaySpeed' => 3000,
            'centerMode' => false,
            'infinite' => true,
            'fade' => false,
            'arrows' => true,
            'dots' => true,
            'speed' => 500,
            'pauseOnHover' => true,
            'slidesToShow' => 1,
            'slidesToScroll' => 1,
            'mobileFirst' => true,
            'prevArrow' => '<div class="slickPrevious"><span>&lsaquo;</span></div>',
            'nextArrow' => '<div class="slickNext"><span>&rsaquo;</span></div>',
            'dotsClass' => 'slickDots'
        );

        $ret['assetsDefer']['dep'][] = 'slick.js';
        return $ret;
    }

    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['config'] = array(
            'slickConfig' => $this->_getSetting('slickConfig'),
            'countItems' => count($ret['listItems']),
            'contentWidth' => $this->getContentWidth()
        );
        return $ret;
    }
}

