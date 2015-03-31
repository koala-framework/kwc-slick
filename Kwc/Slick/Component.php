<?php
class Kwc_Slick_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Slick Carousel');
        $ret['generators']['child']['component'] = 'Kwc_Slick_Image_Component';

        // For more settings see: https://github.com/kenwheeler/slick/
        $ret['slickConfig'] = array();
        $ret['slickConfig']['dots'] = true;
        $ret['slickConfig']['autoplay'] = false;
        $ret['slickConfig']['speed'] = 500;
        $ret['slickConfig']['mobileFirst'] = true;
        $ret['slickConfig']['prevArrow'] = '<div class="slickPrevious"><span>&lsaquo;</span></div>';
        $ret['slickConfig']['nextArrow'] = '<div class="slickNext"><span>&rsaquo;</span></div>';
        $ret['slickConfig']['dotsClass'] = 'slickDots';

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

