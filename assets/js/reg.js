/* <script src="./assets/js/reg.js"></script> */


$(document).ready(function(){
    $("#done").click(function(){
        $('#messageShow').hide();//скрывает текст
        var name = $("#name").val();//принимает инпуты
        var sname = $("#sname").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var region = $("#region").val();
        var city = $("#city").val();
        var date = $("#date").val();
        var fail = "";
        if(name.length < 3) fail = "Имя не меньше 3 символов";
        else if(sname.length < 1) fail = "Введите фамилию еще раз";
        else if(email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
            fail = "Вы ввели некорректный email";
        else if(/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[А-Я])(?=.*[а-я])[0-9а-яА-ЯA-Za-z]{3,}/.test(password) == false)
            fail = "Пароль должен содержать буквы A-Z, a-z и цифры"
        else if(region.trim() == '') fail = 'Вы не выбрали ваш регион';
        if(fail != ""){
            $('#messageShow').html (fail + "<div class='clear'><br></div>");
            $('messageShow').show();
            return false;
        }

        $.ajax({
            url: '../../api/reg.php',
            type: 'POST', //Ассоциативный массив данных, переданных скрипту через HTTP методом POST при использовании application/x-www-form-urlencoded или multipart/form-data в заголовке Content-Type запроса HTTP.
            cache: false,
            data: {'name': name, 'sname': sname, 'email': email, 'password': password, 'region': region, 'city': city, 'date': date},
            dataType: 'html',
            beforeSend: function(){
                $('#messageShow').html ("Идет загрузка...<div class='clear'><br></div>");
                $('#messageShow').show();
            },
            success: function(data){
                $('#messageShow').html (data + "<div class='clear'><br></div>");
            },
            error: function(m){
                console.log(m);
                $('#messageShow').html (m + "div class='clear'><br></div>");
            },
        });
    });
});
