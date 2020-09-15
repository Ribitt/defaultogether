$('.pw').focusout(function () {
    var pwd1 = $("#password_1").val();
    var pwd2 = $("#password_2").val();

    if (pwd1 != '' && pwd2 == '') {
        null;
    } else if (pwd1 != "" || pwd2 != "") {
        if (pwd1 == pwd2) {
            $("#alert-success").css('display', 'block');
            $("#alert-danger").css('display', 'none');
            $("#pwChecked").val("1")
        } else {
            //alert("비밀번호가 일치하지 않습니다. 비밀번호를 재확인해주세요.");
            $("#alert-success").css('display', 'none');
            $("#alert-danger").css('display', 'block');
            $("#pwChecked").val("0")
        }
    }
});