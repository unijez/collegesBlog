jQuery(document).ready(function($){function e(){a.click(function(e){e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation(),t.hasClass("menu-active")?(t.removeClass("menu-active"),a.removeClass("button-active"),o.removeClass("stop-scroll"),n.removeClass("menuOpen")):(t.addClass("menu-active"),a.addClass("button-active"),o.addClass("stop-scroll"),n.addClass("menuOpen"))})}var a=$(".nav-button"),t=$(".global-nav"),o=$("html"),n=$(".overlay");e();var s=$(".blog-article");s.readingTime({readingTimeAsNumber:!1,readingTimeTarget:".eta",wordCountTarget:s.find(".word-count"),wordsPerMinute:275,lessThanAMinuteString:"less than a minute",round:!0,lang:"en",success:function(){console.log("It worked!")},error:function(e){console.log(e),s.find(".reading-time").remove()}}),$(".hero-header").slick({dots:!0,pauseOnHover:!0,arrows:!1,slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:2500}),$("ul.comment-tabs li").click(function(){var e=$(this).attr("data-tab");$("ul.comment-tabs li").removeClass("current"),$(".comment-tab__tab-content").removeClass("current"),$(this).addClass("current"),$("#"+e).addClass("current")})});