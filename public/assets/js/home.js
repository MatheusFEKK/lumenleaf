$(document).ready(function (){
    $(window).scroll(function (){
        const scrollHeight = $(window).scrollTop();
        console.log(scrollHeight);
    
        if (scrollHeight >= 200){
            $(".box").attr('class', 'box shadow opacity-50');

            $(".content-about").attr('class', 'content-about d-flex justify-content-center p-5 shadow animated');

            console.log('300 pixels reached');
        }else if (scrollHeight <= 200){
            $(".box").attr('class','box shadow');
            
            // Tentar utilizar opacidade inves de transition com height! (Note)

            console.log("Not 300 pixels");
        }
    })
})