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
