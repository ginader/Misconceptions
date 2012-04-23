$(document).ready(function() {
    $('#yes').click(function(){
        $('#answer .yes').show();
        $('#answer .no').hide();
        $('#answer .galaxy').show();
    });
    $('#no').click(function(){
        $('#answer .no').show();
        $('#answer .yes').hide();
    });
    // hack for the chrome backface visibility issue
    var is_chrome = /chrome/.test( navigator.userAgent.toLowerCase() );
    if(is_chrome){
        $('#answer').addClass('hidden');
    }
    $('#no, #yes, #answer h2').click(function(){
        if ($('#card.flipped').length > 0){
            // show question
            $('#card.flipped').removeClass('flipped').addClass('flipped_');
            if(is_chrome){
                setTimeout(function(){ $('#answer').addClass('hidden'); }, 500);// hack for the chrome backface visibility issue
            }
        }else{ 
            // show answer
            $('#card.flipped_').removeClass('flipped_').addClass('flipped');
            if(is_chrome){
                setTimeout(function(){ $('#answer').removeClass('hidden'); }, 500);// hack for the chrome backface visibility issue
            }
        }
    });


    $('#language-nav>a').click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('open')
        .find('ul a:first').focus();
    });

});