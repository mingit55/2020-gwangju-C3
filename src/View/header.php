<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전북 축제 On!</title>
    <script src="/resources/js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <script src="/resources/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="/resources/css/style.css">
    <script src="/resources/js/common.js"></script>
</head>
<body>
    <input type="checkbox" id="open-aside" hidden>

    <!-- 로그인 -->
    <form id="login-modal" class="modal fade" method="post" action="/login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-between">
                    <h4>로그인</h4>
                    <button class="icon" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login_id">아이디</label>
                        <input type="text" id="login_id" class="form-control" name="user_id">
                    </div>
                    <div class="form-group">
                        <label for="login_pw">비밀번호</label>
                        <input type="password" id="login_pw" class="form-control" name="password">
                    </div>
                    <div class="d-between fx-n2 text-muted">
                        <div>
                            <input type="checkbox" id="remember_me">
                            <label for="remember_me" class="ml-2 mb-0">Remember</label>
                        </div>
                        <div>
                            <a href="#" class="text-muted">Forget Password</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button class="btn-filled">로그인</button>
                    <div class="btn-bordered" type="button">회원가입</div>
                </div>
            </div>
        </div>
    </form>
    <!-- /로그인 -->

    <!-- 찾아오시는 길 -->
    <div id="road-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body py-4 px-3 text-center fx-3">

                </div>
            </div>
        </div>
    </div>
    <!-- /찾아오시는 길 -->

    <!-- 헤더 영역 -->
    <header class="<?= $viewName !== "main" ? "header--sub" : "" ?>">
        <div class="header__top d-none d-lg-block">
            <div class="container d-between h-100">
                <div class="header-search">
                    <div class="icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <input type="text" placeholder="Search">
                </div>
                <div class="header-util">
                    <select>
                        <option value="ko">한국어</option>
                        <option value="en">English</option>
                        <option value="ch">中文(简体)</option>
                    </select>
                    <a href="#">전라북도청</a>
                    <?php if(user()):?>
                        <a href="/logout">로그아웃</a>
                    <?php else:?>
                        <a href="#" data-toggle="modal" data-target="#login-modal">로그인</a>
                        <a href="#">회원가입</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container d-between h-100">
                <a href="/">
                    <img src="/resources/images/logo.svg" alt="전북 축제 On!" title="전북 축제 On!" height="45">
                </a>
                <!-- 데스크톱 -->
                <div class="navi d-none d-lg-flex">
                    <div class="navi__item">
                        <a href="/">HOME</a>
                    </div>
                    <div class="navi__item">
                        <a href="/main-festival">전북 대표 축제</a>
                    </div>
                    <div class="navi__item">
                        <a href="/festivals">축제 정보</a>
                    </div>
                    <div class="navi__item">
                        <a href="#">축제 일정</a>
                    </div>
                    <div class="navi__item">
                        <a href="/exchange-guide">환율안내</a>
                    </div>
                    <div class="navi__item">
                        <a href="#">종합지원센터</a>
                        <div class="navi__sub-list">
                            <a href="/notice">공지사항</a>
                            <a href="#">센터 소개</a>
                            <a href="#">관광정보 문의</a>
                            <a href="#">데이터 공개</a>
                            <a href="#" data-target="#road-modal" data-toggle="modal">찾아오시는 길</a>
                        </div>
                    </div>
                </div>
                <!-- 모바일 -->
                <label for="open-aside" class="icon d-lg-none">
                    <i class="fa fa-bars"></i>
                </label>
                <aside class="header-aside">
                    <div class="header-search header-search--mobile">
                        <div class="icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="header-util header-util--mobile">
                        <select>
                            <option value="ko">한국어</option>
                            <option value="en">English</option>
                            <option value="ch">中文(简体)</option>
                        </select>
                        <a href="#">전라북도청</a>
                        <?php if(user()):?>
                            <a href="/logout">로그아웃</a>
                        <?php else:?>
                            <a href="#" data-toggle="modal" data-target="#login-modal">로그인</a>
                            <a href="#">회원가입</a>
                        <?php endif;?>
                    </div>
                    <div class="navi navi--mobile">
                        <div class="navi__item">
                            <a href="/">HOME</a>
                        </div>
                        <div class="navi__item">
                            <a href="/main-festival">전북 대표 축제</a>
                        </div>
                        <div class="navi__item">
                            <a href="/festivals">축제 정보</a>
                        </div>
                        <div class="navi__item">
                            <a href="#">축제 일정</a>
                        </div>
                        <div class="navi__item">
                            <a href="/exchange-guide">환율안내</a>
                        </div>
                        <div class="navi__item">
                            <a href="#">종합지원센터</a>
                            <div class="navi__sub-list">
                                <a href="/notice">공지사항</a>
                                <a href="#">센터 소개</a>
                                <a href="#">관광정보 문의</a>
                                <a href="#">데이터 공개</a>
                                <a href="#" data-target="#road-modal" data-toggle="modal">찾아오시는 길</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>