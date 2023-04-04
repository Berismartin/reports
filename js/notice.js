 
var bodyNotice = '<div class="notice">';
bodyNotice+='<span><i class="fa fa-check-circle"></i></span>'; 
bodyNotice+='<span>Success</span>'; 
bodyNotice+='</div>';

jQuery('.notice-success').on('click', function () {
  new jBox('Notice', {
    animation: 'flip',
    color: 'green',
    content: bodyNotice,
    delayOnHover: true,
    showCountdown: true
  });
});