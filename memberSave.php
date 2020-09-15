<?php
$conn = mysqli_connect("127.0.0.1", "daero", "Ribit0528!", "db");

$email= $_GET['email'];
$pw = $_GET['pwd2'];
$nickname = $_GET['nickname'];

$sql = "
INSERT INTO member 
(email, pw, nickname)
VALUES(
    '$email',
    '$pw',
    '$nickname'
)

";

$result = mysqli_query($conn,$sql);
$alert = "문제가 발생했습니다. 관리자에게 문의하세요.";
if($result){
    $alert = "회원가입 완료.";
}else{
    
}


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Untitled Document</title>
  </head>
  <body>
    <h2>result 페이지</h2>

    <script>
      const msg = "<?=$alert?>";
      parent.ifun(msg);
      parent.document.location.href="login.php";
    </script>
  </body>
</html>



<!-- 
//  $id=$_POST['id'];
//  $password=md5($_POST['pwd1']);
//  $password2=$_POST['pwd2'];

//  $sql =  "
//  INSERT INTO topic
//  (title, description, created)
//  VALUE(
//      $id,
//      $password,
//      NOW()
//  )
//  ";
 
//  $result = mysqli_query($conn, $sql);

//  if($result == false){
//     echo mysqli_error($conn);
//     //실제로는 echo로 오류를 뽑아내는 짓은 절대로 하면 안된다 ㅋㅋㅋ.. 지금은 혼자 개발하니까 괜찮지만. 
// }else{
//     echo "성공!";
// } -->