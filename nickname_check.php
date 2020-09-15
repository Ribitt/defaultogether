<?php

$conn = mysqli_connect("127.0.0.1", "daero", "Ribit0528!", "db");

$nickname=$_GET['inputNickname'];
//넘긴 이메일이 잘 넘어간다. 

$sql="
SELECT * FROM member where nickname='$nickname'
";

$result= mysqli_query($conn,$sql);
$row_cnt = mysqli_num_rows($result);


mysqli_close($conn);

?>


<script>

let row_cnt = "<?=$row_cnt?>";
const alert_usable = parent.document.getElementById("alert-usable-nickname");
const alert_unusable = parent.document.getElementById("alert-taken-nickname");
const nickname_checked = parent.document.getElementById("nickname_checked");

if(row_cnt>0){
    nickname_checked.value="0";
    //parent.alert("이미 사용중인 이메일 주소입니다.");

    alert_unusable.classList.add("showing");
    alert_usable.classList.remove("showing");

}else{
    nickname_checked.value="1";
    //중복 체크가 끝난 경우에 값을 1로 해서 중복검사가 마무리 된 이메일 주소인지 확인할 수 있게 한다. 
    //parent.alert("사용 가능한 이메일주소 입니다.");
    alert_usable.classList.add("showing");
    alert_unusable.classList.remove("showing");

}

</script>