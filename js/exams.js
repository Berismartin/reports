$(document).ready(function(){


    //when the generate button has been clicked
    $('#generate_exam_activity').click(function(){
        
        var clas = $('.exam_class').val(); 


        if(clas == ''  ){
            alert('something went wrong');
        }else{

            $(this).html('Generating...');
            loadingid('generate_exam_activity');
            setTimeout(() => {
                $(this).html('Generate');
            }, 1000);

            setTimeout(() =>{
                location.href="dashboard.php?page=exams&clas="+clas;
            },500);
        }
    });

}); 