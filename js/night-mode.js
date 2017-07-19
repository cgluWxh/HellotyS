$(function(){
    btn = $('.set-view-mode');
    if(sessionStorage.mode=="night"){
        $('body').addClass('night-mode');
        btn.find('i').attr('class','fa fa-sun-o');
    }
    $('.set-view-mode').click(function(){
        var next_mode = $('body').hasClass('night-mode') ? 'day' : 'night';		
        if(next_mode!='day'){
            $('body').addClass('night-mode');
            btn.find('i').attr('class','fa fa-sun-o');
            sessionStorage.mode="night";   
        }else{
            $('body').removeClass('night-mode');
            btn.find('i').attr('class','fa fa-moon-o');
            sessionStorage.mode="day";
        }
    });			
});