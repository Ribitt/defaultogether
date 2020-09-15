<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DefaulTogether</title>

    <link rel="stylesheet" href="/defaultogether/css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">

    <style>

        .img-container{
            posistion : relative;
            text-align:center;
            color:black;
        }

        .centered {
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
        }

        #if {
            width:0px;
            height: 0px;
            border: 0px;
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
            <li class="nav-item">
                <a class="nav-link" href="/defaultogether/db_practice.php">연습</a>
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


        

    <div id="head" class="container-fluid jumbotron text-center img-container">
      <div class="row">
        <img src="./img/home.jpg" alt="home" style="width:100%; opacity:0.8">
        <div class="centered">
        <h1>DefaulTogether</h1>
        <h5>여성세 없는 세상</h5>
        </div>
      
      </div>
    </div>

    <h2>form 페이지</h2>
    <form id="js-form" action="result.php" method="get" target="param">
    <input name="email" class="form-control js-email mr-2" id="test" placeholder="이메일 주소를 입력하세요" type="email">
    <div class="form-group">
         <button type="button" id="btn_register" class="btn btn-info btn-block mt-5"> 회원가입 </button>
        </div> form-group//      
        <!-- <input type="button" id="btn_register" value="제출"/> -->
    </form>
    
    <!-- iframe 설정 -->
    <iframe id="if" name="param"></iframe>


<script>

    window.onload = function() {
    document.getElementById('btn_register').onclick = function(){

            var inputNickname = $('.js-email').val();
            if(inputNickname==""){
                alert("내용없음")
            }else{
                document.getElementById('js-form').submit();
            return false;
            }
     }
    }


    function ifun(msg){
        alert(msg);
    }
    
</script>





 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>