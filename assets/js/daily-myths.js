$(document).ready(function() {
    $('html').addClass('run');
    $('#yes').click(function(){
        $('#answer .yes').show();
        $('#answer .no').hide();
        $('#answer .galaxy').show();
    });
    $('#no').click(function(){
        $('#answer .galaxy').show();
        $('#answer .no').show();
        $('#answer .yes').hide();
    });

    $('.block .cta button').click(function(){
        $('.block').addClass('flip');
    });
    $('.block .back h2').click(function(e){
        $('.block').removeClass('flip');

        e.preventDefault();
    });


    $('#language-nav>a').click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('open')
        .find('ul a:first').focus();
    });

    $('#next').click(function(){
        $('html').addClass('unload');
    })

});
$(window).load(function() {
    $('body').scrollTop(1);
});
