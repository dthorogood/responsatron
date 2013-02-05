var debug = true;

jQuery.fn.setAllToMaxHeight = function(){
   return this.height( Math.max.apply(this, jQuery.map( this , function(e){ return jQuery(e).height() }) ) );
};

jQuery.fn.matchHeight = function (target){
    return this.height($(target).height());
}



function initializeWindow() {
    
    $('#page_content').width($('#inner_wrapper').width() - $('.sidebar').outerWidth(true) - 1 );
    
    // constrain all listing images to a square
    $('.listing_image').each(function() { 
        $(this).height($(this).width());
    });
    
    $('.match_height').each(function() {
        $(this).matchHeight($(this).attr('match')); 
    });
    $('.listing_image').setAllToMaxHeight();
    //console.log($('.sidebar').outerWidth(true) + " : " + $('#page_content').width() + " : " + $(document).width());
    
    navTop = $('.scroll_top').offset();
}



var rtime = new Date(1, 1, 2000, 12,00,00);
var timeout = false;
var delta = 200;
$(window).resize(function() {
    rtime = new Date();
    if (timeout === false) {
        timeout = true;
        setTimeout(resizeend, delta);
    }
});

function resizeend() {
    if (new Date() - rtime < delta) {
        setTimeout(resizeend, delta);
    } else {
        timeout = false;
        initializeWindow();
    }               
}

$(window).load(function() { 
    initializeWindow();
    
    $("a.fancybox").fancybox();
    
    enquire.register("screen and (min-width:1210px)",{ 
        match : function() {
            if (debug) { setDebug('Large Desktop'); }
        }
     }).listen();
    
    enquire.register("screen and (min-width:940px) and (max-width:1210px)",{ 
        match : function() {
            if (debug) { setDebug('Small Desktop'); }
        }
     }).listen();
    
    enquire.register("screen and (min-width:768px) and (max-width:940px)",{ 
        match : function() {
            
            if (debug) { setDebug('Landscape Tablet'); }
        }
     }).listen();
     
     enquire.register("screen and (min-width:768px)", {
         match : function() {
             swapImageSizes('data-1200');
         }
     }).listen();
    
    enquire.register("screen and (min-width:480px) and (max-width:768px)", {
        match : function() {
            if (debug) { setDebug('Portrait Tablet'); }
        }
    }).listen();
    
    enquire.register("screen and (max-width:480px)",{ 
        match : function() {
            swapImageSizes('data-480');
            $('#search').addClass('mobile');
            if (debug) { setDebug('Landscape Phone'); }
        },
        unmatch : function() {
            $('#search').removeClass('mobile');
            $('#search input[type="text"]').show();
        }
    }).listen();
    
     enquire.register("screen and (max-width:320px)",{ 
        match : function() {
            if (debug) { setDebug('Portrait Phone'); }
        }
     }).listen();
    
    // Slide in/out sidebar
    $('.sidebar_toggle a').toggle(function(e) {
    e.preventDefault();
    $(this).parent().parent('.sidebar').animate({
        left:0
    },
    500
    )
},
    function() {
        $(this).parent().parent('.sidebar').animate({
        left:-180
    },
    500
    )
});

// Slide in/out search box
$('#search_toggle').toggle(function(e) {
    e.preventDefault();
    $(this).siblings('input[type="text"]').fadeIn('fast').focus();
},
    function() {
        $(this).siblings('input[type="text"]').hide();
});
    
});

function swapImageSizes(newSize) {
    $('img').each(function() { 
        $(this).attr('src', $(this).attr(newSize));
        });
}

var navTop = 0;
$(window).scroll(function() { 
    var scrollTop = getScrollTop();
    if(navTop != null) {
        if(scrollTop >= navTop.top) {
            $('.scroll_top').addClass("fixed_top");
        }
        else {
            $('.scroll_top').removeClass("fixed_top");
        }
    }
});

function getScrollTop() {
    return $(window).scrollTop();
}

function setDebug(content) {
    $('#debug').html(content + "<p class='small'>(" + $(window).width() + " x " + $(window).height() + ")</p>");
}