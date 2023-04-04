$(document).ready(function(){
    var index = 0,
    divs = $(".teachers_all").children();

  $("#teacher_add").click(function() { 
    if(index == 0){
    index = (index + 1) % divs.length;
    divs.eq(index).show().siblings().hide();
    index = 1;

    // change the min-bar
    $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Teacher</span> ');

    } else if(index == 2){
        index = (index - 1) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-teachers .navigation').find('span:last').remove();
            $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Teachers</span> ');
            index = 1;
    }  else if(index == 3){
        index = (index - 2) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-teachers .navigation').find('span:last').remove();
            $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Add Teachers</span> ');
            index = 1;
    }
  });


    $('.edit').click(function(){
       index = (index + 2) % divs.length;
        divs.eq(index).show().siblings().hide();
        index = 2;
    // change the min-bar
    $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Edit Teachers</span> ');

    });


    $("#teacher_subject_set").click(function() { 
        if(index == 0){
        index = (index + 3) % divs.length;
        divs.eq(index).show().siblings().hide();
        index = 3;
    
        // change the min-bar
        $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Set Subject to Teacher</span> ');
    
        } else if(index == 1){
            index = (index + 2) % divs.length;
                divs.eq(index).show().siblings().hide();
                $('.nav-teachers .navigation').find('span:last').remove();
                $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Set Subject to Teachers</span> ');
                index = 3;
        }  else if(index == 2){
            index = (index + 1) % divs.length;
                divs.eq(index).show().siblings().hide();
                $('.nav-teachers .navigation').find('span:last').remove();
                $('.nav-teachers .navigation').append('<span> <i class="fa fa-angle-right "></i>Set Subject to Teachers</span> ');
                index = 3;
        }
      });


    $(".nav-teachers #back").click(function() {
        if(index == 1){
            index = (index - 1) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-teachers .navigation').find('span:last').remove();
            index = 0;
        }else if(index == 2){
            index = (index - 2) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-teachers .navigation').find('span:last').remove();
            index = 0;
        } else if(index == 3){
            index = (index - 3) % divs.length;
            divs.eq(index).show().siblings().hide();
            $('.nav-teachers .navigation').find('span:last').remove();
            index = 0;
        }
    });

    // when the form has been submitted

    $('#teacher_add_form').submit(function(event){
    
        data = $('.password').val();
        var len = data.length;
        
        if(len < 1) {
            alert("Password cannot be blank");
            // Prevent form submission
            event.preventDefault();
        }else if($('.password').val() !== $('.confirm_password').val()) {
            alert("Password and Confirm Password don't match");
            // Prevent form submission
            event.preventDefault();
 
        }else{
             // Prevent form submission
             event.preventDefault();

             loading('new_teacher');
             //clear form
             clearform('teacher_add_form');

        }
         
    });


    // when the reset button has been clicked

    $('.reset').click(function(){
        $('input').val() = "";
    });



    // set subject to teacher

    $('.set-subject-class').blur(function(){
        if($(this).val() !== ''){
           $('.set-subject-stream').removeAttr('disabled');
        }else{
            $('.set-subject-stream').attr('disabled','disabled');
        }
    });

    $('.set-subject-stream').blur(function(){
        if($(this).val() !== ''){
           $('.set-subject-subject').removeAttr('disabled', 'disabled');
        }else{
            $('.set-subject-subject').attr('disabled','disabled');
        }
    });

    //when the tr has been set
    

    $('.subject-tr-save').click(function(){

    var teacher = $('#setteachers option:selected');
    var clas = $('.set-subject-class option:selected');
    var stream = $('.set-subject-stream option:selected');
    var subject = $('.set-subject-subject option:selected');

    if(teacher.val() == '' || clas.val() == '' || stream.val() =='' || subject.val() == ''){
        alert('something went Wrong!');
    }else{
        row = '<tr>';
        row+= '<td>#</td>';
        row+= '<td>'+teacher.text()+'</td>';
        row+= '<td>'+subject.text()+'</td>';
        row+= '<td>'+clas.text()+'</td>';
        row+= '<td>'+stream.text()+'</td>';
        row+= '<td><i class="fa fa-pencil edit-subject-teacher"></i></td>';
        row+= '</tr>';
        activatespinner('subject-tr-save span');
        $('.subject-teacher-table tbody').append(row);

        
    }

    });



    
});