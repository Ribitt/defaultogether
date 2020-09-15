
<?php
$conn = mysqli_connect("127.0.0.1", "daero", "Ribit0528!", "db");

$email = 'a@gmail.com';
$sql="
SELECT * FROM member where email ='$email'
";

$result = mysqli_query($conn,$sql);
$row_cnt = mysqli_num_rows($result);


print_r($row_cnt);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    

<h1 class="h1">members</h1> 


<table class ="table">
    <thead>
        <tr>
            <th>번호</th>
            <th>이메일</th>
            <th>비밀번호</th>
            <th>닉네임</th>
    
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>ddd@gmail.com</td>
            <td>1234</td>
            <td>레미</td>
        </tr>
    </tbody>

</table>


<script>

// let row_cnt = "<?=$row_cnt?>";
// if(row_cnt>0){
//     alert("사용중인 이메일이다!");
// }else{
//     alert("사용 가능한 이메일이다!");
// }
</script>
</body>
</html>




<!-- 
$sql="SELECT * FROM  member";
$result = mysqli_query($conn, $sql);
$list ='';
while($row = mysqli_fetch_array($result)){
    $list = $list."<li>{$row['email']}</li>";
    //php에서 .은 기존의 내용에 .이후 내용을 더하는 문법
    //php문법을 다 지나고 나면 html만 남게 된다. 
}
이제 $list는 <li>email</li>...가 쭉 이어진 html문법 글자가 된다. 
 -->


 
<!-- //

// mysqli_query($conn,$sql); -->



<!-- //$row=mysqli_fetch_array($result);
//print_r(mysqli_fetch_array($result));



// $mysqli = new mysqli("127.0.0.1", "root","0528","db");
// if($mysqli){
//     echo "성공";
// }else{
//     echo "실패";
// }

//php는 변수를 $를 붙여서 만든다. 
//mysqli_query에는 링크, 명령어를 전달한다. 
//mysqli_query는 명령어를 mysql에 전달하는 것과 그 결과값을 true/false로 반환하는 성질을 가지고 있다. 
//topic이라는 table에다가 다음값을 전달한다. 
// $sql =  "
// INSERT INTO topic
// (title, description, created)
// VALUE(
//     'MySQL',
//     'MySQL is...',
//     NOW()
// )
// ";

// //따라서 다음과 같이 설정하게 되면 얘는 알아서 내용을 저장할 것이고 실패했을 경우(오류가 났을 경우) echo문을 실행까지 해준다. 쩌는ㄷ?
// $result = mysqli_query($conn, $sql);

// if($result == false){
//     echo mysqli_error($conn);
//     //실제로는 echo로 오류를 뽑아내는 짓은 절대로 하면 안된다 ㅋㅋㅋ.. 지금은 혼자 개발하니까 괜찮지만. 
// }else{
//     echo "성공!";
// }

//링크에서 오류가 생기는 걸 텍스트로 받아볼 수 있다. 
//echo mysqli_error($conn); -->

<!-- 
//새로운 유저를 집어넣는 SQL문
// $sql="
// INSERT INTO member
// (email, pw, nickname)
// VALUES(
//     'a@gmail.com',
//     '123',
//     '천재'
// )
// ";

// $sql = "SELECT * FROM member";
// $result = mysqli_query($conn,$sql); -->
