$(document).ready(function (){
    $(window).scroll(function (){
        const scrollHeight = $(window).scrollTop();
        console.log(scrollHeight);
    
        if (scrollHeight >= 200){
            $(".box").attr('class', 'box shadow opacity-50');

            $(".content-about").css({"visibility": "visible"})
            
            console.log('300 pixels reached');
        }else if (scrollHeight <= 200){
            $(".box").attr('class','box shadow');

            $(".content-about").css({"visibility": "collapse"})
            // Tentar utilizar opacidade inves de transition com height! (Note)

            console.log("Not 300 pixels");
        }
    })
})