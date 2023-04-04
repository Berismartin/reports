$(document).ready(function(){
    // when the add stream button has beenclicked

    $('#stream_add').click(function(){
        var stream = $('.stream_list .stream').val();


        if(stream == ""){
            alert('First fill in the stream !');
        }else{
            $('.list-group').append('<li class="list-group-item d-flex justify-content-between align-items-center">'+stream+'<span class="badge   badge-pill">2</span></li>');
            $('.stream_list .stream').val('');
        }

    });


    //when the edit button has been clicked

    $('.stream_list .stream_edit').click(function(){
        var stream = $(this).parentsUntil('li').find('span').text();
        alert(stream);
    });
});