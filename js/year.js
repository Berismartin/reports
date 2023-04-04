$(document).ready(function(){

function removethem(element, clstoremove){
    $('.'+element).removeClass(clstoremove); 
}

 
// when th year add has been clicked
$('#year_add').click(function(){

    if($('.year-update').hasClass('year-update-on')){
        $('.year-update').removeClass('year-update-on');
        $('.year-add').addClass('year-add-on');
        $('.year-add').css('transition', '.3s .3s');
    }else{
        $('.year-add').addClass('year-add-on');
    
        setTimeout(() => {
            removethem('year-add', 'year-add-on');
        }, 10000);
    }
     
    
});

$('#year_update').click(function(){

    if($('.year-add').hasClass('year-add-on')){
        $('.year-add').removeClass('year-add-on');
        $('.year-update').addClass('year-update-on');
        $('.year-update').css('transition', '.3s .3s');
    }else{
        $('.year-update').addClass('year-update-on');
        
        setTimeout(() => {
            removethem('year-update', 'year-update-on');
        }, 10000);
    }
    
});


// when th year add has been clicked
$('#term_add').click(function(){

    if($('.term-update').hasClass('term-update-on')){
        $('.term-update').removeClass('term-update-on');
        $('.term-add').addClass('term-add-on');
        $('.term-add').css('transition', '.3s .3s');
    }else{
        $('.term-add').addClass('term-add-on');
         
        setTimeout(() => {
            removethem('term-add', 'term-add-on');
        }, 10000);
    }
    
});

$('#term_update').click(function(){

    if($('.term-add').hasClass('term-add-on')){
        $('.term-add').removeClass('term-add-on');
        $('.term-update').addClass('term-update-on');
        $('.term-update').css('transition', '.3s .3s');
    }else{
        $('.term-update').addClass('term-update-on');
        
        setTimeout(() => {
            removethem('term-update', 'term-update-on');
        }, 10000);
    }
    
 
});


});