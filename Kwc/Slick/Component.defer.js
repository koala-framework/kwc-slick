Kwf.onJElementReady('.kwcSlick', function(el, config) {
    el.height('');
    var slickWrapper = el.find('.listWrapper');
    if (slickWrapper.length) {
        if (config.slickConfig.startRandom) {
            config.slickConfig.initialSlide = Math.floor(Math.random() * config.countItems);
            delete config.slickConfig.startRandom;
        }

        slickWrapper.slick(config.slickConfig);

        //to initialize cloned elements
        Kwf.callOnContentReady(slickWrapper, { action: 'render' });
    }
});
Kwf.onJElementWidthChange('.cssClass', function(el) {
    /**
     *  https://github.com/kenwheeler/slick/issues/790
     *  Todo: after slick update to >1.4.1 check if this fix is needed any more
     *  and remove it when not.
    **/
    var slickslider = el.find('.slick-slider');
    if (slickslider) {
        slickslider[0].slick.setPosition();
    }
});
