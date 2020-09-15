<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DefaulTogether | Login</title>

    <link rel="stylesheet" href="/defaultogether/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        .before {
               display:table;
               line-height:0;
               content=""; 
        }

    
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
 


        </style>
   
   
</head>
<body>

<!-- Navigation -->

<nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-center">
    <a href="/defaultogether/index.php" class="navbar-brand d-flex w-50 mr-auto">DefaulTogether</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/defaultogether/map.php">미용실지도</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/defaultogether/mall.php">젠더프리 쇼핑몰</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/defaultogether/community.php">커뮤니티</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/defaultogether/login.php">로그인</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/defaultogether/signup.php">회원가입</a>
            </li>
       
        </ul>
    </div>
</nav>
<!-- header -->
    <div class="container-fluid jumbotron text-center">
        <!-- <img src="/defaultogether/image/home.jpg" alt=""> -->
        <h1>DefaulTogether</h1>
        <h5>여성세 없는 세상</h5>
      </div>
   



      <!-- 메인 -->
<!--    
      <?php
echo "MySql 연결 테스트<br>";


if($db){
    echo "connect : 성공<br>";
}
else{
    echo "disconnect : 실패<br>";
}

$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?> -->




   
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">로그인</h4>
	

	<form>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="이메일 주소를 입력하세요" type="email">
    </div> <!-- form-group// -->



    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="비밀번호를 입력하세요" type="password">
    </div> <!-- form-group// -->

                                   
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-block"> 로그인 </button>
    </div> <!-- form-group// -->      
    <p class="text-center">아직 회원이 아니신가요?  <a href="/defaultogether/signup.php">회원가입</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script>
   
      </script>
</body>
</html>