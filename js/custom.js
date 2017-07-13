$(document).ready(function() {
    if(window.matchMedia('(max-width: 992px)').matches) {
        $('.faculity-member-wrapper').removeClass('slide');
    }
    if(window.matchMedia('(max-width: 1200px)').matches) { 
        $('#faculity-member').addClass('fp-auto-height');
        $('#testimonial').addClass('fp-auto-height');
        $('iframe').css('pointer-events', 'auto');
    }
    
    $('#fullpage').fullpage({
        navigation:true,
        scrollBar: true,
        slidesNavigation: true,
        scrollOverflow: false,
        responsiveWidth: 1440
    });
});

(function ($) {
    


    // Navigation scrolls
    $('.navbar-nav li a').bind('click', function(event) {
        $('.navbar-nav li').removeClass('active');
        $(this).closest('li').addClass('active');
        var $anchor = $(this);
        var nav = $($anchor.attr('href'));
        if (nav.length) {
        $('html, body').stop().animate({				
            scrollTop: $($anchor.attr('href')).offset().top				
        }, 1500, 'easeInOutExpo');
        
        event.preventDefault();
        }
    });
    
    // Add smooth scrolling to all links in navbar
    $(".navbar a, a.mouse-hover, .overlay-detail a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });

})(jQuery);
$(function(){
  $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

  // If you want to keep full screen on window resize
  $(window).resize(function(){
    $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  });
});

//<![CDATA[
window.onload=function(){
var LoadVideo = function(player_id){

    var Program = {
    
        Init: function(){
            this.NewPlayer();
            this.EventHandler();
        },

        NewPlayer: function(){
            var _this = this;
            this.Player = new YT.Player(player_id, {});
            _this.Player.$element = $('#' + player_id);
        },

        Play: function(){
            if( this.Player.getPlayerState() === 1 ) return;
            this.Player.playVideo();
        },

        Pause: function(){
            if( this.Player.getPlayerState() === 2 ) return;
            this.Player.pauseVideo();
        },

        ScrollControl: function(){
            if( Utils.IsElementInViewport(this.Player.$element[0]) ) this.Play();
            else this.Pause();
        },

        EventHandler: function(){
            var _this = this;
            $(window).on('scroll', function(){
                _this.ScrollControl();
            });
        }
        
    };
    
    var Utils = {
    
        IsElementInViewport: function(el){
            if (typeof jQuery === "function" && el instanceof jQuery) el = el[0];
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
        
    };
    
    return Program.Init();

};

LoadVideo('video');

if (window.parent && window.parent.parent){
    window.parent.parent.postMessage(["resultsFrame", {
      height: document.body.getBoundingClientRect().height,
      slug: "gsfkL6xL"
    }], "*")
  }


// or (loop mode)

//$('iframe').each(function(){
//  LoadVideo($(this).attr('id'));
//});
}//]]> 
