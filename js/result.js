$(document).ready(function(){
  //when the generate button has been clicked
  $('#generate_exam_grade').click(function(){
        
    var clas = $('.grade_class').val(); 


    if(clas == ''  ){
        alert('something went wrong');
    }else{

        $(this).html('Generating...');
        loadingid('generate_exam_grade');
        setTimeout(() => {
            $(this).html('Generate');
        }, 1000);

        setTimeout(() =>{
            location.href="dashboard.php?page=setresults&clas="+clas;
        },500);
    }
});


});