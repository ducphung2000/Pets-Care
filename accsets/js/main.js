$(document).ready(function() {
    $('#eye').click(function(){
        $('#eye').toggleClass('open');
        $('#eye').children('i').toggleClass('fa-eye-slash fa-eye');
        if ($('#eye').hasClass('open')){
            $('#eye').prev().attr('type','text')
        }else {
            $('#eye').prev().attr('type','password')
        }
    });
});