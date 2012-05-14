function clipPage(){    
    if($(window).height() > $('body').height()){
        $('body').addClass('clipped');
    }else{
        $('body').removeClass('clipped');
    }
}
$(document).ready(function() {
    var is_chrome = /chrome/.test( navigator.userAgent.toLowerCase() ); //chrome is still misbehaving sometimes
    var can_historyPush = !!(window.history && history.pushState);
    var url = location.href;
    url = url.substring(0,url.indexOf(window.languagecode)); // just the bare url looking like this: "http://dailymyths.org/""
    //console.log(url);
    var delimiter = (url.charAt(url.length-1) == '/' ) ? '' : '/';
    //console.log(delimiter);

    $('html').addClass('run');
    $('#yes').click(function(e){
        e.preventDefault();
        if(can_historyPush){
            history.pushState(null, null, url+languagecode+'/'+id+'/yes/');
        }
        $('#answer .yes').show();
        $('#answer .no').hide();       

    });
    $('#no').click(function(e){
        if(can_historyPush){
            history.pushState(null, null, url+languagecode+'/'+id+'/no/');
        }
        e.preventDefault();
        $('#answer .no').show();
        $('#answer .yes').hide();
    });

    if(can_historyPush){
        $(window).bind('popstate', function(e){
            console.log(location.href);
            if(location.href == url+languagecode+'/'+id+'/'){
                // user used the back button - let's go back to the question then :)
                $('.block').removeClass('flip');
                //console.log('user used the back button');
            }else if(location.href == url+languagecode+'/'+id+'/yes/'){
                // user used the forward button
                $('.block').addClass('flip');
                $('#answer .yes').show();
                $('#answer .no').hide();
                //console.log('user used the forward button');
            }else if(location.href == url+languagecode+'/'+id+'/no/'){
                // user used the forward button
                $('.block').addClass('flip');
                $('#answer .no').show();
                $('#answer .yes').hide();
                //console.log('user used the forward button');
            }else{
                //console.log('not sure');
            }
        });
    }

    $('#yes, #no').click(function(e){
        e.preventDefault();
        $('.block').addClass('flip');
        setTimeout(function(){
            $('#answer .galaxy').show();
            if(is_chrome){
                $('#answer .galaxy').css('-webkit-perspective','none');
                // removing perspective fixes the issue when Chrome does not show the solar system ani at all
            }
        }, 600);
    });


    $('.block .back h2').click(function(e){
        if(can_historyPush){
            history.pushState(null, null, url+languagecode+'/'+id+'/');
        }
        $('.block').removeClass('flip');
        e.preventDefault();
    });


    $('#language-nav>a').click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('open')
        .find('ul a:first').focus();
    })

    $("#languages").on("mouseover", "a", function(event) {
        $(event.currentTarget).focus();
    });

    $('#next').click(function(){
        $('html').addClass('unload');
    })

    $(window).resize(clipPage);
    clipPage();
});
$(window).load(function() {
    $('body').scrollTop(1);
});
