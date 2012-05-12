$(document).ready(function() {
    var is_chrome = /chrome/.test( navigator.userAgent.toLowerCase() ); //chrome is still misbehaving sometimes

    $('html').addClass('run');
    $('#yes').click(function(e){
        e.preventDefault();
        $('#answer .yes').show();
        $('#answer .no').hide();       

    });
    $('#no').click(function(e){
        e.preventDefault();
        $('#answer .no').show();
        $('#answer .yes').hide();
    });

    $('#yes, #no').click(function(e){
        e.preventDefault();
        $('.block').addClass('flip');
        setTimeout(function(){
            $('#answer .galaxy').show();
            if(is_chrome){
                $('#answer .galaxy').css('-webkit-perspective','none');
                // removing perspective fixes the issue when Chrome does not show the solar system ani at all
            }
        }, 500);
    });


    $('.block .back h2').click(function(e){
        $('.block').removeClass('flip');
        e.preventDefault();
    });


    $('#language-nav>a').click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('open')
        .find('ul a:first').focus();
    })

    $("#languages").on("mouseover", "a", function(event) {
        console.log($(event.currentTarget));
        $(event.currentTarget).focus();
    });

    $('#next').click(function(){
        $('html').addClass('unload');
    })

});
$(window).load(function() {
    $('body').scrollTop(1);
});
