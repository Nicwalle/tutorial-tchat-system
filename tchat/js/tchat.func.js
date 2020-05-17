$(document).ready(function() {

    recupMessage();

    $('.field-input').focus(function () {
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function () {
        $parent = $(this).parent();
        if ($(this).val() == '') {
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-label');
        }
    });

    $('#send').click(function(){
        var message = $('#message').val();

        if(message != ''){
            $.post('ajax/post.php',{message:message},function(){
                recupMessage();
                $('#message').val('');
            });
        }
    });

    function recupMessage(){
        $.post('ajax/recup.php',function(data){
            $('.messages-box').html(data);

        });
    }

    setInterval(recupMessage,1000);

});