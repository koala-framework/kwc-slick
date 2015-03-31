<?php
class Kwc_Slick_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Slick Carousel');
        $ret['generators']['child']['component'] = 'Kwc_Slick_Image_Component';

        $ret['carouselConfig'] = array(

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

