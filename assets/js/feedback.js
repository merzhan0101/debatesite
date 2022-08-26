$(document).ready(function(){
    $('#done').click(function(){
        $('#messageShow').hide();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var fail = "";
        if(name.length < 2) 
            fail = "Имя меньше 2 символов";
        else if(email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
            fail = "Не правильно ввели почту";
        else if(subject.length < 5)
            fail = "Сообщение не должно быть меньше 5 символа";
        else if(message.length < 15)
            fail = "Введенное вами сообщение меньше 15 символа";
        if(fail != ""){
            $('#messageShow').html (fail + "<div class='clear'><br /></div>");
            $('#messageShow').show();
            return false;
        }
        $.ajax({
            url: '../../api/feedback.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'email': email, 'subject': subject, 'message': message},
            dataType: 'html',
            success: function(data){
                $('#messageShow').html (data + "<div class='clear'><br /></div>");
                $('#messageShow').show();
            }
        });
    });
});