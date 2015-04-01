Kwf.onJElementReady('.kwcSlick', function(el, config) {
    var listWrapper = el.find('.listWrapper');
    var maxHeight = 0;
    var items = listWrapper.find('.listItem');
    if (items.length) {
        items.each(function() {
            maxHeight = Math.max(maxHeight, $(this).height());
        });
        listWrapper.css('display', '');
        el.height(maxHeight);
    }
}, { defer: false });
