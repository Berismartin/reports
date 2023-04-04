$(document).ready(function(){
    // navigation system  
    var index = 0,
    divs = $(".subject_all").children();

  $("#subject_add").click(function() { 
    if(index == 0){
    index = (index + 1) % divs.length;
    divs.eq(index).show().siblings().hide();
    index = 1;

    // change the min-bar
    $('.nav-subject .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Subject</span> ');

    }
  });



    $(".nav-subject #back").click(function() {
        if(index == 1){
            index = (index - 1) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-subject .navigation').find('span:last').remove();
            index = 0;
        }else if ($('.table_container').hasClass('slide_left')){

            // back to view if in edit mode
            $('.table_container').removeClass('slide_left');
            $('.edit_bar').removeClass('edit_bar_on');
        }
    });


    


    // when the edit button has been clicked
    $('.edit').click(function(){
        $('.table_container').addClass('slide_left');
        $('.edit_bar').addClass('edit_bar_on');
        $('.table_container').css('border', '1px solid #D4C2FC');
    });

    // close edit mode

    $('.edit_bar span').click(function(){
        $('.table_container').removeClass('slide_left');
        $('.edit_bar').removeClass('edit_bar_on');
    });


    //when the add button has been clicked

    $('.new_subject').click(function(event){ 
        event.preventDefault();
        var subject = $('#subject_add .subject').val();
        var code = $('#subject_add .papper_code').val();
        var optional = $('#subject_add #optional');
        var op;
        // assign value if checkbox if checked

            if(optional.is(':checked')){
                op = true;
            }else{
                op = false;
            }
 
        if(subject == '' || code == ''){
             alert('fill in the form first');
        }else{
            //check for checked classes of the subject
             //---------------should be worked upon-----------------------
            loading('new_subject');
            clearform('subject_add');
             
        }
    });


});