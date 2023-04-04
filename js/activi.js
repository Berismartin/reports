$(document).ready(function(){
    //when the activity add button has been clicked

    $('#activity_add').click(function(){
        var activity = $('.all_activities .activity').val();
        var term = $('.all_activities .act_term').val();

        if(activity =='' || term == ''){
            alert('something went wrong');
        }else{
            loadingid('activity_add');
            $('.all_activities .act_term').val('');
            $('.all_activities .activity').val('');
        }
    });


   
});