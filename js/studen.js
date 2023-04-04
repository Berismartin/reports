$(document).ready(function(){
    var index = 0,
    divs = $(".student_all").children();

  $("#student_add").click(function() { 
    if(index == 0){
    index = (index + 1) % divs.length;
    divs.eq(index).show().siblings().hide();
    index = 1;

    // change the min-bar
    $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Student</span> ');

    } else if(index == 2){
        index = (index - 1) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-student .navigation').find('span:last').remove();
            $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Student</span> ');
            index = 1;
    }else if(index == 3){
        index = (index - 2) % divs.length;
        divs.eq(index).show().siblings().hide();
        $('.nav-student .navigation').find('span:last').remove();
        $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Student</span> ');
        index = 1;
    }
  });


    $('.edit').click(function(){
       index = (index + 2) % divs.length;
        divs.eq(index).show().siblings().hide();
        index = 2;
    // change the min-bar
    $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Edit Student</span> ');

    });

    $('#student_multiple_add').click(function(){
        if(index == 0){
            index = (index + 3) % divs.length;
            divs.eq(index).show().siblings().hide();
            index = 3;
        
            // change the min-bar
            $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Multiple Students</span> ');
        
            } else if(index == 1){
                index = (index +2) % divs.length;
                    divs.eq(index).show().siblings().hide();
                    $('.nav-student .navigation').find('span:last').remove();
                    $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Multiple Students</span> ');
                    index = 3;
            }else if(index == 2){
                index = (index + 1) % divs.length;
                divs.eq(index).show().siblings().hide();
                $('.nav-student .navigation').find('span:last').remove();
                $('.nav-student .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Multiple Student</span> ');
                index = 3;
            }
    });


    $(".nav-student #back").click(function() {
        if(index == 1){
            index = (index - 1) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-student .navigation').find('span:last').remove();
            index = 0;
        }else if(index == 2){
            index = (index - 2) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-student .navigation').find('span:last').remove();
            index = 0;
        }else if(index == 3){
            index = (index - 3) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-student .navigation').find('span:last').remove();
            index = 0;
        }
    });
 

    // when the reset button has been clicked

    $('.reset').click(function(){
        $('input').val() = "";
        $('.select_stream').attr('disabled','disabled');

         
    });

    // when the reset button has been clicked multiple

    $('.form_footer_multiple .reset').click(function(){
        $('.form_footer_multiple select option:first-child').attr('selected', 'selected');
         
    });
 
    // when the class has been selected student add

    $('.select_class').blur(function(){
        if($(this).val() !== ''){
            $('.set_optionals').fadeIn(700);
            $('.select_stream').removeAttr('disabled');

        }else{
            $('.set_optionals').fadeOut(500);
            $('.select_stream').attr('disabled','disabled');
        }
    });



  // when the class has been selected student add multiple

  $('.student_mult .select_class').blur(function(){
    if($(this).val() !== ''){ 
        $('.student_mult .select_stream').removeAttr('disabled');

    } 
});


    var checkbox = $('#set_current');

    checkbox.click(function(){
        if(!$(this).is(':checked')){ 
                $('.set_entry_data').fadeIn(); 
            
        } else{
            $('.set_entry_data').fadeOut();
        }
    });




    // multiple student add form
    
    $('#generate').click(function(){
    var years = $('.student_mult .select_year').val();
    var term = $('.student_mult .select_term').val();
    var clas = $('.student_mult .select_class').val();
    var stream = $('.student_mult .select_stream').val();
    var house = $('.student_mult .select_house').val();
    var number = $('.student_mult .number_of_rows').val();
 
        if(years=='' || term =='' || clas =='' || stream =='' || house =='' || number ==''){
            
            alert('fill in the above form first');
        }else{
                loadingid('generate');
            
            setTimeout(function(){
            $('.student_mult').slideUp(); 
            $('.generated_multiple').css('display', 'block');
            
            for(var i = 0; i < number; i++){
                $('.generated_multiple .setform').append('<div class="col col-5"><input class="form-control shadow-none" type="text" placeholder="Enter Index No"></div><div class="col col-5"><input class="form-control shadow-none" type="text" placeholder="Enter student Names"> </div>')
            }
            }, 1000);
             
           
            
        }
    });

    $('.generated_multiple .reset').click(function(){
        alert('sdsd');
        $('.generated_multiple input').val('');
    });
     
});