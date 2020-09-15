<!-- <script>
    function checkeEmail(){
        let userEmail = document.querySelector(".js-email").value;
        if(userEmail){
            url = "emailCheck.php?userEmail="+userEmail;
            window.open(url,"chkid","width=300,height=100");


        }else{
            alert("이메일을 입력하세요");
        }
    }
</script> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DefaulTogether | Signup</title>

    <link rel="stylesheet" href="/defaultogether/css/bootstrap.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<style>

.hidden {
    display:none;
}

.showing {
    display:block;
}

.hey{
    color:blue;
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
        </ul>
      
    </div>
    <div class="dropdown justify-content-end">
        <button class="btn dropdown-toggle btn-default" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="white" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                       <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                       <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                      </svg>
        </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/defaultogether/login.php">로그인</a>
                <a class="dropdown-item" href="/defaultogether/signup.php">회원가입</a>
            </div>
    </div>

</nav>
<!-- header -->
    <div class="container-fluid jumbotron text-center">
        <!-- <img src="/defaultogether/image/home.jpg" alt=""> -->
        <h1>DefaulTogether</h1>
        <h5>여성세 없는 세상</h5>
      </div>


<!-- Main -->

<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
<div class="card container" sytle="width: 400px;">

	<h4 class="card-title mt-3 mb-5 text-center">회원가입</h4>
	

	<form id="js-form" action="memberSave.php" method="get" target="param">
    

        <!-- 이메일 -->
        <div class="form-group input-group mb-0">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" class="form-control js-email mr-2" placeholder="이메일 주소를 입력하세요" type="email">
            <span type=hidden id="mail_checked" value="0">


            <button class ="btn btn-secondary" type="button" onclick="emailCheck()">중복확인</button>

        

            </div> <!-- form-group// -->
            <span class="font-weight-light text-info hidden" id="alert-usable-email">사용할 수 있는 이메일입니다</span>
            <span class="font-weight-light hidden" id="alert-taken-email" style="color: #d92742;">이미 가입한 이메일입니다</span>
            <span class="font-weight-light hidden" id="alert-invalid-email"  style="display:none; color: #d92742;">올바른 이메일 양식을 입력해 주세요</span>

        <div class="mb-3"></div>
        
        <!-- 이메일 끝 -->

        <!-- 비밀번호  -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control pw" id="password_1" placeholder="비밀번호를 입력하세요" type="password">
        </div> <!-- form-group// -->

        <div class="form-group input-group mb-0">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control pw" id="password_2" name="pwd2" placeholder="비밀번호 확인" type="password">
            <input type=hidden id="pwChecked" name=pwChecked value="0">

        </div> <!-- form-group// -->  
        <span id="alert-success" class="font-weight-light text-info" style="display:none;">비밀번호가 일치합니다.</span>
        <span id="alert-danger"  class="font-weight-light" style="display:none; color: #d92742;">비밀번호가 일치하지 않습니다.</span>

        <div class="mb-3"></div>
        <!-- 비밀번호 끝 -->

        <!-- 닉네임 -->
        <div class="form-group input-group mb-0">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="far fa-user-circle"></i></span>
            </div>
            <input class="form-control js-nickname mr-2" name="nickname"  placeholder="닉네임을 입력해주세요" type="text">
            <input type=hidden id="nickname_checked" name=nickname_checked value="0">


            <button class ="btn btn-secondary" type="button" onclick="nicknameCheck()">중복확인</button>
        </div>
        <span id="alert-usable-nickname" class="hidden font-weight-light text-info">사용할 수 있는 닉네임 입니다</span>
        <span id="alert-taken-nickname"  class="hidden font-weight-light" style="color: #d92742;">이미 사용중인 닉네임 입니다</span>
        <!-- 닉네임 끝-->


        <!-- 이용약관 -->
        <div class="form-group mt-5">
            <div>
                <textarea class="form-control" style="font-size:12px;" name="" rows="6">
                    제1조(목적)
                    이 약관은 DefaulTogether가 운영하는 홈페이지(이하 "쇼핑몰"이라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 (유)내고향시푸드와 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
                    ※ 「PC통신 등을 이용하는 전자거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다」


                    제2조(정의)
                    ① "쇼핑몰" 이란 사업자가 재화 또는 용역을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 또는 용역을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 쇼핑몰을 운영하는 사업자의 의미로도 사용합니다.

                    ② "이용자"란 "쇼핑몰"에 접속하여 이 약관에 따라 "쇼핑몰"이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.

                    ③ "회원"이라 함은 "쇼핑몰"에 개인정보를 제공하여 회원등록을 한 자로서, "쇼핑몰"의 정보를 지속적으로 제공받으며, "쇼핑몰"이 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다.

                    ④ "비회원"이라 함은 회원에 가입하지 않고 "쇼핑몰"이 제공하는 서비스를 이용하는 자를 말합니다.


                    제3조 (약관의 명시와 개정)
                    ① "쇼핑몰"은 이 약관의 내용과 상호, 영업소 소재지, 대표자의 성명, 사업자등록번호, 연락처(전화, 팩스, 전자우편 주소 등) 등을 이용자가 알 수 있도록 사이트의 초기 서비스화면(전면)에 게시합니다.

                    ② "쇼핑몰"은 약관의 규제 등에 관한 법률, 전자거래기본법, 전자서명법, 정보통신망 이용촉진 등에 관한 법률, 방문판매 등에 관한법률, 소비자보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.

                    ③ "쇼핑몰"이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 홈페이지의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다.

                    ④ "쇼핑몰"이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정 전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간 내에 "쇼핑몰"에 송신하여 "쇼핑몰"의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.

                    ⑤ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 정부가 제정한 전자거래소비자보호지침 및 관계법령 또는 상관례에 따릅니다.


                    제4조(서비스의 제공 및 변경)
                    ① "쇼핑몰"은 다음과 같은 업무를 수행합니다.
                    1. 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결
                    2. 구매계약이 체결된 재화 또는 용역의 배송
                    3. 기타 "쇼핑몰"이 정하는 업무

                    ② "쇼핑몰"은 재화의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화·용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화·용역의 내용 및 제공일자를 명시하여 현재의 재화·용역의 내용을 게시한 곳에 그 제공일자 이전 7일부터 공지합니다.

                    ③ "쇼핑몰"이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 "쇼핑몰"은 이로 인하여 이용자가 입은 손해를 배상합니다. 단, "쇼핑몰"에 고의 또는 과실이 없는 경우에는 그러하지 아니합니다.


                    제5조(서비스의 중단)
                    ① "쇼핑몰"은 컴퓨터 등 정보통신설비의 보수점검·교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.

                    ② 제1항에 의한 서비스 중단의 경우에는 "쇼핑몰"은 제8조에 정한 방법으로 이용자에게 통지합니다.

                    ③ "쇼핑몰"은 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다. 단 "쇼핑몰"에 고의 또는 과실이 없는 경우에는 그러하지 아니합니다.


                    제6조(회원가입)
                    ① 이용자는 "쇼핑몰"이 정한 가입 양식에 따라 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를 함으로서 회원가입을 신청합니다.

                    ② "쇼핑몰"은 제1항과 같이 회원으로 가입할 것을 신청한 이용자 중 다음 각 호에 해당하지 않는 한 회원으로 등록합니다.
                    1. 가입신청자가 이 약관 제7조 제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우, 다만 제7조 제3항에 의한 회원자격 상실 후 3년이 경과한 자로서 "쇼핑몰"의 회원재가입 승낙을 얻은 경우에는 예외로 한다.
                    2. 등록 내용에 허위, 기재누락, 오기가 있는 경우
                    3. 기타 회원으로 등록하는 것이 "쇼핑몰"의 기술상 현저히 지장이 있다고 판단되는 경우

                    ③ 회원가입계약의 성립 시기는 "쇼핑몰"의 승낙이 회원에게 도달한 시점으로 합니다.

                    ④ 회원은 제15조 제1항에 의한 등록사항에 변경이 있는 경우, 즉시 전자우편 기타 방법으로 "쇼핑몰"에 대하여 그 변경사항을 알려야 합니다.


                    제7조(회원 탈퇴 및 자격 상실 등)
                    ① 회원은 "쇼핑몰"에 언제든지 탈퇴를 요청할 수 있으며 "쇼핑몰"은 즉시 회원탈퇴를 처리합니다.

                    ② 회원이 다음 각 호의 사유에 해당하는 경우, "쇼핑몰"은 회원자격을 제한 및 정지시킬 수 있습니다.
                    1. 가입 신청 시에 허위 내용을 등록한 경우
                    2. "쇼핑몰"을 이용하여 구입한 재화·용역 등의 대금, 기타 "쇼핑몰" 이용에 관련하여 회원이 부담하는 채무를 기일에 지급하지 않는 경우
                    3. 다른 사람의 "쇼핑몰" 이용을 방해하거나 그 정보를 도용하는 등 전자거래질서를 위협하는 경우
                    4. "쇼핑몰"을 이용하여 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우

                    ③ "쇼핑몰"이 회원 자격을 제한·정지 시킨 후, 동일한 행위가 2회 이상 반복되거나 30일 이내에 그 사유가 시정되지 아니하는 경우 "쇼핑몰"은 회원자격을 상실시킬 수 있습니다.

                    ④ "쇼핑몰"이 회원자격을 상실시키는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고, 회원등록 말소 전에 소명할 기회를 부여합니다.


                    제8조(회원에 대한 통지)
                    ① "쇼핑몰"이 회원에 대한 통지를 하는 경우, 회원이 "쇼핑몰"에 제출한 전자우편 주소로 할 수 있습니다.

                    ② "쇼핑몰"은 불특정다수 회원에 대한 통지의 경우 1주일이상 "쇼핑몰" 게시판에 게시함으로서 개별 통지에 갈음할 수 있습니다.


                    제9조(구매신청)
                    "쇼핑몰" 이용자는 "쇼핑몰"상에서 이하의 방법에 의하여 구매를 신청합니다.
                    1. 성명, 비밀번호, 전화번호, 핸드폰번호, 주소, E-MAIL 입력
                    2. 재화 또는 용역의 선택
                    3. 결제방법의 선택
                    4. 이 약관에 동의한다는 표시(예, 마우스 클릭)


                    제10조 (계약의 성립)
                    ① "쇼핑몰"은 제9조와 같은 구매신청에 대하여 다음 각 호에 해당하지 않는 한 승낙합니다.
                    1. 신청 내용에 허위, 기재누락, 오기가 있는 경우
                    2. 미성년자가 담배, 주류 등 청소년보호법에서 금지하는 재화 및 용역을 구매하는 경우
                    3. 기타 구매신청에 승낙하는 것이 "쇼핑몰" 기술상 현저히 지장이 있다고 판단하는 경우

                    ② "쇼핑몰"의 승낙이 제12조 제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것으로 봅니다.


                    제11조(지급방법)
                    "쇼핑몰"에서 구매한 재화 또는 용역에 대한 대금지급방법은 다음 각 호의 하나로 할 수 있습니다.
                    1. 계좌이체
                    2. 신용카드결제
                    3. 온라인무통장입금
                    4. 전자화폐에 의한 결제
                    5. 수령 시 대금지급 등


                    제12조(수신확인통지·구매신청 변경 및 취소)
                    ① "쇼핑몰"은 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다.

                    ② 수신확인통지를 받은 이용자는 의사표시의 불일치 등이 있는 경우에는 수신확인통지를 받은 후 즉시 구매신청 변경 및 취소를 요청할 수 있습니다.

                    ③ "쇼핑몰"은 배송 전 이용자의 구매신청 변경 및 취소 요청이 있는 때에는 지체 없이 그 요청에 따라 처리합니다.


                    제13조(배송)
                    "쇼핑몰"은 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다. 만약 "쇼핑몰"의 고의·과실로 약정 배송기간을 초과한 경우에는 그로 인한 이용자의 손해를 배상합니다.


                    제14조(환급, 반품 및 교환)
                    ① "쇼핑몰"은 이용자가 구매 신청한 재화 또는 용역이 품절 등의 사유로 재화의 인도 또는 용역의 제공을 할 수 없을 때에는 지체 없이 그 사유를 이용자에게 통지하고, 사전에 재화 또는 용역의 대금을 받은 경우에는 대금을 받은 날부터 3일 이내에, 그렇지 않은 경우에는 그 사유발생일로부터 3일 이내에 계약해제 및 환급절차를 취합니다.

                    ② 다음 각 호의 경우에는 "쇼핑몰"은 배송된 재화일지라도 재화를 반품 받은 다음 영업일 이내에 이용자의 요구에 따라 즉시 환급, 반품 및 교환 조치를 합니다. 다만 그 요구기한은 배송된 날로부터 20일 이내로 합니다.
                    1. 배송된 재화가 주문내용과 상이하거나 "쇼핑몰"이 제공한 정보와 상이할 경우
                    2. 배송된 재화가 파손, 손상되었거나 오염되었을 경우
                    3. 재화가 광고에 표시된 배송기간보다 늦게 배송된 경우
                    4. 방문판매 등에 관한 법률 제18조에 의하여 광고에 표시하여야 할 사항을 표시하지 아니한 상태에서 이용자의 청약이 이루어진 경우


                    제15조(개인정보보호)
                    ① "쇼핑몰"은 이용자의 정보 수집시 구매계약 이행에 필요한 최소한의 정보를 수집합니다.
                    다음 사항을 필수사항으로 하며 그 외 사항은 선택사항으로 합니다.
                    1. 희망ID(회원의 경우)
                    2. 비밀번호(회원의 경우)
                    3. 이름
                    4. 별명
                    5. E-MAIL
                    6. 주소
                    7. 전화번호
                    8. 휴대번호
                    9. 메일링서비스
                    10. SMS 수신여부

                    ② "쇼핑몰"이 이용자의 개인 식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를 받습니다.

                    ③ 제공된 개인정보는 당해 이용자의 동의 없이 목적 외의 이용이나 제3자에게 제공할 수 없으며, 이에 대한 모든 책임은 "쇼핑몰"이 집니다. 다만, 다음의 경우에는 예외로 합니다.
                    1. 배송업무상 배송업체에게 배송에 필요한 최소한의 이용자의 정보(성명, 주소, 전화번호)를 알려주는 경우
                    2. 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로 제공하는 경우

                    ④ "쇼핑몰"이 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는 개인정보관리 책임자의 신원(소속, 성명 및 전화번호 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공 관련사항(제공 받는자, 제공목적 및 제공할 정보의 내용)등 정보통신망이용촉진 등에 관한 법률 제16조 제3항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는 언제든지 이 동의를 철회할 수 있습니다.

                    ⑤ 이용자는 언제든지 "쇼핑몰"이 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며 "쇼핑몰"은 이에 대해 지체 없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 "쇼핑몰"은 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.

                    ⑥ "쇼핑몰"은 개인정보 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 변조 등으로 인한 이용자의 손해에 대하여 모든 책임을 집니다.

                    ⑦ "쇼핑몰" 또는 그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는 당해 개인정보를 지체 없이 파기합니다.


                    제16조("쇼핑몰"의 의무)
                    ① "쇼핑몰"은 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에 따라 지속적이고, 안정적으로 재화·용역을 제공하는 데 최선을 다하여야 합니다.

                    ② "쇼핑몰"은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다.

                    ③ "쇼핑몰"이 상품이나 용역에 대하여 「표시·광고의 공정화에 관한 법률」 제3조 소정의 부당한 표시·광고행위를 함으로써 이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.

                    ④ "쇼핑몰"은 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.


                    제17조( 회원의 ID 및 비밀번호에 대한 의무)
                    ① 제15조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 회원에게 있습니다.

                    ② 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안 됩니다.

                    ③ 회원이 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 "쇼핑몰"에 통보하고 "쇼핑몰"의 안내가 있는 경우에는 그에 따라야 합니다.


                    제18조(이용자의 의무)
                    이용자는 다음 행위를 하여서는 안 됩니다.
                    1. 신청 또는 변경 시 허위내용의 등록
                    2. "쇼핑몰"에 게시된 정보의 변경
                    3. "쇼핑몰"이 정한 정보 이외의 정보(컴퓨터 프로그램 등)의 송신 또는 게시
                    4. "쇼핑몰" 기타 제3자의 저작권 등 지적재산권에 대한 침해
                    5. "쇼핑몰" 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위
                    6. 외설 또는 폭력적인 메시지·화상·음성 기타 공서양속에 반하는 정보를 홈페이지에 공개 또는 게시하는 행위


                    제19조(연결"쇼핑몰"과 피연결"쇼핑몰" 간의 관계)
                    ① 상위 "쇼핑몰"과 하위 "쇼핑몰"이 하이퍼링크(예: 하이퍼링크의 대상에는 문자, 그림 및 동화상 등이 포함됨)방식 등으로 연결된 경우, 전자를 연결 "쇼핑몰"(웹 사이트)이라고 하고 후자를 피연결 "쇼핑몰"(웹사이트)이라고 합니다.

                    ② 연결 "쇼핑몰"은 피연결 "쇼핑몰"이 독자적으로 제공하는 재화·용역에 의하여 이용자와 행하는 거래에 대해서 보증 책임을 지지 않는다는 뜻을 연결 "쇼핑몰"의 사이트에서 명시한 경우에는 그 거래에 대한 보증 책임을 지지 않습니다.


                    제20조(저작권의 귀속 및 이용제한)
                    ① "쇼핑몰"이 작성한 저작물에 대한 저작권 기타 지적재산권은 "쇼핑몰"에 귀속합니다.

                    ② 이용자는 "쇼핑몰"을 이용함으로써 얻은 정보를 "쇼핑몰"의 사전 승낙 없이 복제, 송신, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안 됩니다.


                    제21조(분쟁해결)
                    ① "쇼핑몰"은 이용자가 제기하는 정당한 의견이나 불만을 반영하고 그 피해를 보상처리하기 위하여 피해보상처리기구를 설치·운영합니다.

                    ② "쇼핑몰"은 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는 이용자에게 그 사유와 처리일정을 즉시 통보해 드립니다.

                    ③ "쇼핑몰"과 이용자간에 발생한 분쟁은 전자거래기본법 제28조 및 동 시행령 제15조에 의하여 설치된 전자거래분쟁조정위원회의 조정에 따를 수 있습니다.


                    제22조(재판권 및 준거법)
                    ① "쇼핑몰"과 이용자간에 발생한 전자거래 분쟁에 관한 소송은 민사소송법상의 관할법원에 제기합니다.

                    ② "쇼핑몰"과 이용자간에 제기된 전자거래 소송에는 한국법을 적용합니다.
                </textarea>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="useRuleCheck">
                    <label class="form-check-label text-warning" for="defaultCheck1">
                     이용약관에 동의합니다 (필수)
                     </label>
               </div>
            </div>

            <div>
                <textarea class="form-control" style="font-size:12px;"name="" rows="6">
                    제1조 (개인정보의 처리 목적)
                    ① 개인정보보호위원회는 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.
                    가. 서비스 제공
                    교육 콘텐츠 제공, 본인인증, 증명서발급(교육 수료증) 등 서비스 제공에 관련한 목적으로 개인정보를 처리합니다.
                    협박 사례를 적극 신고하시기 바랍니다.

                    나. 민원처리
                    개인정보 열람, 개인정보 정정·삭제, 개인정보 처리정지 요구, 개인정보 유출사고 신고 등 개인정보와 관련된 민원처리를 목적으로 개인정보를 처리합니다.

                    ② 개인정보보호위원회가 개인정보 보호법 제32조에 따라 등록·공개하는 개인정보파일의 처리목적은 다음과 같습니다.
                    순번	개인정보파일의 명칭	운영근거	처리목적
                    1	교육서비스 제공 사용자 정보	정보주체 동의	개인정보보호 온라인교육에 대한 본인인증, 교육이력관리, 교육수료증 발급
                    2	개인정보 열람등요구 처리 사용자 정보	개인정보보호법 제35조-제39조	개인정보 열람등요구 처리 행정업무의 참고 또는 사실 증명
                    3	유출사고 신고 처리 사용자 정보	개인정보보호법 제34조
                    신용정보의 이용 및 보호에 관한 법률 제39조	유출사고 신고 처리 행정업무의 참고 또는 사실 증명
                    4	개인정보보호 전문강사 명단	정보주체 동의	개인정보보호 교육지원(강사풀 제공)
                    제2조 (개인정보의 처리 및 보유 기간)
                    ① 개인정보보호위원회는 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의받은 개인정보 보유·이용기간 내에서 개인정보를 처리·보유합니다.
                    ② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.
                    순번	개인정보파일의 명칭	운영근거	보유기간
                    (목적 달성시)
                    1	교육서비스 제공 사용자 정보	정보주체 동의	2년
                    2	개인정보 열람등요구 처리 사용자 정보	개인정보보호법 제35조-제39조	3년
                    3	유출사고 신고 처리 사용자 정보	개인정보보호법 제34조
                    신용정보의 이용 및 보호에 관한 법률 제39조	3년
                    4	개인정보보호 전문강사 명단	정보주체 동의	3년
                    제3조 (개인정보의 제3자 제공)
                    ① 개인정보보호위원회는 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.
                    ② 개인정보보호위원회는 민원 신청인이 공공기관에 대하여 신청한 개인정보 열람, 정정·삭제, 처리정지민원을 처리하기 위하여 민원 신청인의 개인정보를 개인정보파일 보유기관에게 이송(제공)하고 있으며, <민원사무 처리에 관한 법률>에서 정하는 기간 동안 해당 기관에서 보유 및 이용합니다.
                    - 이송(제공)하는 개인정보 항목 : 신청인 성명, 생년월일, 전화번호, 주소
                    제4조 (개인정보처리 위탁)
                    ① 개인정보보호위원회는 원활한 개인정보 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다.
                    가. 위탁처리 기관
                    - 수탁업체명 : 한국인터넷진흥원
                    - 주소 : 전라남도 나주시 진흥길 9 한국인터넷진흥원
                    - 전화 : 061-820-1648
                    - 근무시간 : 09:00 - 18:00
                    - 위탁업무 : 개인정보보호 포털 운영
                    나. 위탁처리 수행업체
                    - 수탁업체명 : (주)포뎁스
                    - 주소 : 서울특별시 강남구 도곡로 1길 14 삼일프라자 1602호
                    - 전화 : 02-6952-8651
                    - 근무시간 : 09:00 - 18:00
                    - 위탁업무 : 개인정보보호 포털 H/W 및 S/W 유지보수, Help-desk 운영
                    다. 위탁처리 수행업체
                    - 수탁업체명 : (주)씨드젠
                    - 주소 : 서울특별시 구로구 디지털로33길 28
                    - 전화 : 02-786-9601
                    - 근무시간 : 09:00 - 18:00
                    - 위탁업무 : 개인정보보호 현장교육 운영, 민원처리, 전문강사단 접수 및 선발관리
                    (안내사항)
                    가. 아이핀 인증 - (주)코리아크레딧뷰로
                    나. 휴대폰 인증 - (주)코리아크레딧뷰로
                    제5조 (정보주체와 법정대리인의 권리·의무 및 그 행사방법에 관한 사항)
                    ① 정보주체(만 14세 미만인 경우에는 법정대리인을 말함)는 언제든지 개인정보보호위원회가 보유하고 있는 개인정보에 대하여 개인정보 열람․정정․삭제․처리정지 요구 등의 권리를 행사할 수 있습니다.
                    ② 제1항에 따른 권리 행사는 <개인정보보호 포털 (www.privacy.go.kr)>의 “개인정보 열람․정정․삭제․처리정지 요구”를 통하여 하실 수 있으며, 이에 대해 지체 없이 조치하겠습니다.
                    ☞ 개인정보 열람․정정․삭제․처리정지 요구 바로가기

                    기관명은 개인정보보호위원회로, 파일명은 “교육서비스 제공 사용자 정보”, “개인정보 열람등요구 처리 사용자 정보”, “유출사고 신고 처리 사용자 정보”, “개인정보보호 전문강사 명단”으로 검색)

                    기관명과 파일명을 입력 하는 예시 (기관명 -개인정보보호위원회) (파일명 -교육서비스 제공 사용자 정보)
                    ③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.
                    ④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제4항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.
                    ⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.
                    ⑥ 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다
                    * [개인정보보호법 시행규칙 별지 제11호] 위임장
                    제6조 (처리하는 개인정보의 항목)
                    개인정보보호위원회는 다음의 개인정보 항목을 처리하고 있습니다.

                    순번	개인정보파일의 명칭	개인정보파일에 기록되는 개인정보의 항목
                    1	교육서비스 제공 사용자 정보	성명, 기관명, 직위, 전화번호, 이메일, 중복가입확인정보(DI)
                    2	개인정보 열람등요구 처리 사용자 정보	성명, 생년월일, 전화번호, 주소, 휴대폰번호(선택), fax번호(선택), 이메일(선택), 중복가입확인정보(DI)
                    3	유출사고 신고 처리 사용자 정보	성명, 기관명, 부서, 직위, 전화번호, 이메일
                    4	개인정보보호 전문강사 명단	성명, 소속, 직급, 강의경력, 연락처, 이메일, 강의지역
                    제7조 (개인정보 파기 절차 및 방법)
                    ① 개인정보보호위원회는 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 다만, 다른 법률에 따라 보존하여야하는 경우에는 그러하지 않습니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.
                    가. 파기절차
                    불필요한 개인정보 및 개인정보파일은 개인정보책임자의 책임 하에 내부방침 절차에 따라 다음과 같이 처리하고 있습니다.
                    - 개인정보의 파기
                    보유기간이 경과한 개인정보는 종료일로부터 지체 없이 파기합니다.
                    - 개인정보파일의 파기
                    개인정보파일의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보파일이 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 지체 없이 그 개인정보파일을 파기합니다.
                    나. 파기방법
                    1) 전자적 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다.
                    2) 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.
                    제8조 (개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항)
                    개인정보보호위원회는 이용자에게 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용하지 않습니다.

                    제9조 (개인정보의 안전성 확보 조치)
                    개인정보보호위원회는 「개인정보보호법」 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적, 관리적, 물리적 조치를 하고 있습니다.

                    1. 내부관리계획의 수립 및 시행
                    개인정보보호위원회의 내부관리계획 수립 및 시행은 개인정보보호위원회의 내부관리 지침을 준수하여 시행합니다.

                    2. 개인정보 취급 담당자의 최소화 및 교육
                    개인정보를 취급하는 담당자를 지정하고 최소화하여 개인정보를 관리하는 대책을 시행하고 있습니다.

                    3. 개인정보에 대한 접근 제한
                    개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여, 변경, 말소를 통하여 개인정보에 대한 접근통제를 위하여 필요한 조치를 하고 있으며 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있습니다.

                    4. 접속기록의 보관 및 위변조 방지
                    개인정보처리시스템에 접속한 기록(웹 로그, 요약정보 등)을 최소 1년 이상 보관, 관리하고 있으며, 접속 기록이 위변조 및 도난, 분실되지 않도록 보안기능을 사용하고 있습니다.

                    5. 개인정보의 암호화
                    이용자의 개인정보는 암호화 되어 저장 및 관리되고 있습니다. 또한 중요한 데이터는 저장 및 전송 시 암호화하여 사용하는 등의 별도 보안기능을 사용하고 있습니다.

                    6. 해킹 등에 대비한 기술적 대책
                    개인정보보호위원회는 해킹이나 컴퓨터 바이러스 등에 의한 개인정보 유출 및 훼손을 막기 위하여 보안프로그램을 설치하고 주기적인 갱신·점검을 하며 외부로부터 접근이 통제된 구역에 시스템을 설치하고 기술적/물리적으로 감시 및 차단하고 있습니다. 또한 네트워크 트래픽의 통제(Monitoring)는 물론 불법적으로 정보를 변경하는 등의 시도를 탐지하고 있습니다.

                    7. 비인가자에 대한 출입 통제
                    개인정보를 보관하고 있는 개인정보시스템의 물리적 보관 장소를 별도로 두고 이에 대해 출입통제 절차를 수립, 운영하고 있습니다.

                    제10조 (권익침해 구제방법)
                    정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다. <아래의 기관은 개인정보보호 포털과는 별개의 기관으로서, 개인정보보호 포털의 자체적인 개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다>

                    ▶ 개인정보 침해신고센터 (한국인터넷진흥원 운영)
                    - 소관업무 : 개인정보 침해사실 신고, 상담 신청
                    - 홈페이지 : privacy.kisa.or.kr
                    - 전화 : (국번없이) 118
                    - 주소 : 전라남도 나주시 진흥길 9 한국인터넷진흥원
                    ▶ 개인정보 분쟁조정위원회
                    - 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)
                    - 홈페이지 : www.kopico.go.kr
                    - 전화 : 1833-6972
                    - 주소 : 서울특별시 종로구 세종대로 209 정부서울청사 4층
                    ▶ 대검찰청 사이버범죄수사단 :
                    - (국번없이) 1301, privacy@spo.go.kr (www.spo.go.kr)
                    ▶ 경찰청 사이버안전국
                    - (국번없이) 182 (cyberbureau.police.go.kr)
                    또한, 개인정보의 열람, 정정·삭제, 처리정지 등에 대한 정보주체자의 요구에 대하여 공공기관의 장이 행한 처분 또는 부작위로 인하여 권리 또는 이익을 침해 받은 자는 행정심판법이 정하는 바에 따라 행정심판을 청구할 수 있습니다.

                    ☞ 중앙행정심판위원회(www.simpan.go.kr)의 전화번호 안내 참조

                    제11조(개인정보 열람청구)
                    ① 정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 개인정보보호위원회는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.
                    ▶ 개인정보 열람청구 접수·처리 부서
                    부서명 : 법무감사담당관
                    담당자 : 김성현
                    연락처 : <전화번호 02-2100-2480>, < 팩스번호 02-2100-3005>
                    ② 정보주체께서는 제1항의 열람청구 접수·처리부서 이외에, 개인정보보호위원회의 ‘개인정보보호 포털’ 웹사이트(www.privacy.go.kr)를 통하여서도 개인정보 열람청구를 하실 수 있습니다.
                    ▶ 개인정보보호위원회 개인정보보호 포털 → 민원마당 → 개인정보 열람등 요구
                    제12조 (개인정보보호 "분야별" 책임관 및 담당자 연락처)
                    개인정보보호위원회는 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 개인정보 보호책임자 및 실무담당자를 지정하고 있습니다. (개인정보보호법 제31조 제1항에 따른 개인정보 보호책임자)

                    구분	부서명	성명	연락처
                    개인정보보호 책임자	개인정보정책국장	강유민	02-2100-3040
                    개인정보보호 분야별책임관	개인정보보호정책과장	이병남	02-2100-3051
                    개인정보보호 담당자	개인정보보호정책과	반장권	02-2100-3057
                    제13조 (개인정보 처리방침의 변경)
                    ① 본 방침은 2020년 08월 05일부터 시행됩니다.
                    ② 이전의 개인정보 처리방침은 아래에서 확인하실 수 있습니다.
                </textarea>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="personalRuleCheck">
                    <label class="form-check-label text-warning" for="defaultCheck1">
                     개인정보 처리방침에 동의합니다 (필수)
                     </label>
               </div>
            </div>

        </div>

      
        <div class="form-group">
         <button type="button" id="btn_register" class="btn btn-info btn-block mt-5"> 회원가입 </button>
        </div> 
        <p class="text-center">이미 가입하셨나요? <a class="text-info font-weight-bold"href="/defaultogether/login.php">로그인</a> </p>                                                                 
    </form>
   
     <!-- iframe 설정 -->
     <iframe id="if" name="param"></iframe>

</div> <!-- card.// -->


	<!-- <p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p> -->
<!--  구글 로그인 하고 싶으면 이걸 넣으면 되겠어. -->

  

 <script>

    function nicknameCheck() {

        var inputNickname = $('.js-nickname').val();


        if (inputNickname == "") {
            alert("닉네임을 입력해주세요");
            exit;
        }

        ifrm1.location.href = "nickname_check.php?inputNickname=" + inputNickname;
    }

    
    window.onload = function() {
    document.getElementById('btn_register').onclick = function(){

        let emailCheck = document.getElementById("mail_checked");
        let pwCheck = document.getElementById("pwChecked");
        let nickCheck =document.getElementById("nickname_checked");
        var check1 = document.getElementById("useRuleCheck");
        var check2 = document.getElementById("personalRuleCheck");

        if(emailCheck.value=="1"){
                if(pwCheck.value=="1"){
                    if(nickCheck.value=="1"){
                        if(check1.checked){
                            if(check2.checked){
                                document.getElementById('js-form').submit();
                                return false;

                        }else{
                            alert("개인정보 처리 방침에 동의해주세요")
                            }
                        }else{
                        alert("이용약관에 동의해주세요")
                        } 

                    }else{
                        alert("닉네임을 확인하세요.")
                    }

                }else{
                    alert("비밀번호를 확인하세요.")
                }

            }else{
                alert("이메일을 확인하세요")
            }

     }
    }


    function ifun(msg){
        alert(msg);
    }

    

    // window.onload = function() {
    //         document.getElementById('btn_register').onclick = function(){
                
    //             let emailCheck = document.getElementById("mail_checked");
    //             let pwCheck = document.getElementById("pwChecked");
    //             let nickCheck =document.getElementById("nickname_checked");
    //             var check1 = document.getElementById("useRuleCheck");
    //             var check2 = document.getElementById("personalRuleCheck");
                    
    //         if(emailCheck.value=="1"){
    //             if(pwCheck.value=="1"){
    //                 if(nickCheck.value=="1"){
    //                     if(check1.checked){
    //                         if(check2.checked){
    //                             document.getElementById('js-form').submit();
    //                             return false;

    //                     }else{
    //                         alert("개인정보 처리 방침에 동의해주세요")
    //                         }
    //                     }else{
    //                     alert("이용약관에 동의해주세요")
    //                     } 

    //                 }else{
    //                     alert("닉네임을 확인하세요.")
    //                 }

    //             }else{
    //                 alert("비밀번호를 확인하세요.")
    //             }

    //         }else{
    //             alert("이메일을 확인하세요")
    //         }



        
               
    //      }
    //     }

    //     function popup(msg){
    //     alert(msg);
    // }
      

    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/pwcheck.js"></script>
<script src="js/email-nick-check.js"></script>
</body>
</html>