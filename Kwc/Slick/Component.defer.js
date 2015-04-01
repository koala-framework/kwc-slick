Kwf.onJElementReady('.kwcSlick', function(el, config) {
    var slickWrapper = el.find('.listWrapper');
    if (slickWrapper.length) {
        slickWrapper.slick(config.slickConfig);

        //to initialize cloned elements
        Kwf.callOnContentReady(slickWrapper, { action: 'render' });
    }
});
