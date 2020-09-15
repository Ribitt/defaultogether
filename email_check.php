<?php

$conn = mysqli_connect("127.0.0.1", "daero", "Ribit0528!", "db");

$email=$_GET['inputEmail'];
//넘긴 이메일이 잘 넘어간다. 

$sql="
SELECT * FROM member where email='$email'
";

$result= mysqli_query($conn,$sql);
$row_cnt = mysqli_num_rows($result);



// $resultText="";
// $result=mysqli_query($conn,$query);
// if($result){
//     $resultText="성공";
// }else{
//     $resultText="실패";
//     $error = mysqli_error($conn);
// }

mysqli_close($conn);

?>

<script>

let row_cnt = "<?=$row_cnt?>";
const alert_usable = parent.document.getElementById("alert-usable-email");
const alert_unusable = parent.document.getElementById("alert-taken-email");

if(row_cnt>0){
    parent.document.getElementById("mail_checked").value="0";
    //parent.alert("이미 사용중인 이메일 주소입니다.");

    alert_unusable.classList.add("showing");
    alert_usable.classList.remove("showing");

}else{
    parent.document.getElementById("mail_checked").value="1";
    //중복 체크가 끝난 경우에 값을 1로 해서 중복검사가 마무리 된 이메일 주소인지 확인할 수 있게 한다. 
    //parent.alert("사용 가능한 이메일주소 입니다.");
    alert_usable.classList.add("showing");
    alert_unusable.classList.remove("showing");

}
// //var result = "<?=$row?>";
// var row="<?=$row[0]?>";


// if(count>1){
//     parent.document.getElementById("chk_id2").value="0";
//     parent.alert("이미 사용중인 아이디입니다.");
// }
// else{
// parent.document.getElementById("chk_id2").value="1";
// parent.alert("사용 가능한 이메일주소 입니다.<?=$email?>");
// }
</script>


