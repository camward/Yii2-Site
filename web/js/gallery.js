$(document).ready(function() {
    $('div.navigation').css({'width' : '920px', 'float' : 'left'});
    $('div.content').css('display', 'block');

    // Initially set opacity on thumbs and add
    // additional styling for hover effect on thumbs
    var onMouseOutOpacity = 1;
    $('#thumbs ul.thumbs li a').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  0.6,
        fadeSpeed:		'fast',
        exemptionSelector: '.selected'
    });

    // Initialize Advanced Galleriffic Gallery
    var gallery = $('#thumbs').galleriffic({
        delay:					30000,
        numThumbs:				6,
        preloadAhead:			6,
        enableTopPager:			false,
        enableBottomPager:		false,
        imageContainerSel:		'#slideshow',
        controlsContainerSel:	'#controls',
        captionContainerSel:	'#caption',
        loadingContainerSel:	'',
        renderSSControls:		true,
        renderNavControls:		true,
        playLinkText:			'',
        pauseLinkText:			'P',
        prevLinkText:			'Prev',
        nextLinkText:			'Next',
        nextPageLinkText:		'',
        prevPageLinkText:		'',
        enableHistory:			false,
        autoStart:				7000,
        syncTransitions:		true,
        defaultTransitionDuration: 900,
        onSlideChange:			function(prevIndex, nextIndex) {
            // 'this' refers to the gallery, which is an extension of $('#thumbs')
            this.find('ul.thumbs li').children()
                .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                .eq(nextIndex).fadeTo('fast', 0.6);
        },
        onPageTransitionOut:	function(callback) {
            this.fadeTo('fast', 0.0, callback);
        },
        onPageTransitionIn:		function() {
            this.fadeTo('fast', 1.0);
        }
    });
});