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

$(document).ready(function() { 
    initializeWindow();
    
    enquire.register("screen and (min-width:768px)", {
        match : function() {
            swapImageSizes('data-1200');
        }
    }).listen();
    
    enquire.register("screen and (max-width:480px)",{ 
        match : function() {
            swapImageSizes('data-480');
            $('#search').addClass('mobile');
        },
        unmatch : function() {
            $('#search').removeClass('mobile');
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




function swapImageSizes(newSize) { console.log('swapping images');
    $('img').each(function() { 
        $(this).attr('src', $(this).attr(newSize));
        });
}