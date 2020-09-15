function emailCheck() {

    var inputEmail = $('.js-email').val();


    if (inputEmail == "") {
        alert("이메일 주소를 입력해주세요");
        exit;
    }

    ifrm1.location.href = "email_check.php?inputEmail=" + inputEmail;
}



