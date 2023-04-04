// teachers functions


// set teacher to subject function
function activatespinner(spanelement){
    $('.'+spanelement).css('display','inline-block');
    setTimeout(() => {
        $('.'+spanelement).css('display','none');
    }, 1000);
}

// add neew teacher

function loading(buttonelement){
    $('.'+buttonelement).append('<img src="img/gif/loading.gif" style="width:20px; height:20px;" >');
    $('.'+buttonelement+' i').hide();
    setTimeout(() => {
        $('.'+buttonelement).find('img').remove();
        $('.'+buttonelement+' i').show(); 
    }, 1000);
}

function loadingid(buttonelement){
    $('#'+buttonelement).append('<img src="img/gif/loading.gif" style="width:20px; height:20px;" >');
   
    setTimeout(() => {
        $('#'+buttonelement).find('img').remove(); 
    }, 1000);
}

function clearform(formname){
    setTimeout(function(){
        $('#'+formname+' input').val('');
        $('#'+formname+' select').val('');
    }, 2000);
}