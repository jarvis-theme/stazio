define(['jquery','navgoco','bootstrap','jq_flexslider'], function($,navgoco,b,flexslider)
{
    return new function(){
        var self = this;
        self.run = function(){
            $('.sidey .nav').navgoco();

            $('footer h4.title').click(function() {
                $(this).toggleClass('active');
                $(this).next().slideToggle(250);
            });
            // Testimoni
            $('#testi-info #testimoni').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: false,
                prevText: "",
                nextText: ""
            });
        };
    }
});