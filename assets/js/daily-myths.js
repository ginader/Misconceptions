$(document).ready(function() {
    $('#yes').click(function(){
        $('#answer .yes').show();
        $('#answer .no').hide();
        $('#answer .galaxy').show();
        $('#card').toggleClass('flipped');
    });
    $('#no').click(function(){
        $('#answer .no').show();
        $('#answer .yes').hide();
        $('#card').toggleClass('flipped');
    });


    $('#language-nav>a').click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('open')
        .find('ul a:first').focus();
    });

});