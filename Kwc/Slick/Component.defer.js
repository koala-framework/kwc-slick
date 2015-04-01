Kwf.onJElementReady('.kwcSlick', function(el, config) {
    el.height('');
    var slickWrapper = el.find('.listWrapper');
    if (slickWrapper.length) {
        slickWrapper.slick(config.slickConfig);

        //to initialize cloned elements
        Kwf.callOnContentReady(slickWrapper, { action: 'render' });
    }
});
