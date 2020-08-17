        <div class="header-sub">
            <div class="container">
                <a href="/">전북 축제 On!</a>
                <span class="mx-2"><i class="fa fa-angle-right"></i></span>
                <a href="/main-festival">전북 대표 축제</a>
            </div>
        </div>
    </div>
</header>
<!-- /헤더 영역 -->

<!-- 전북 대표 축제 -->
<div class="container padding">
    <div class="d-between border-bottom pb-3">
        <div>
            <hr>
            <div class="title">
                <h1>JEONBUK <strong>ON!</strong></h1>
                <p>전북 대표 축제</p>
            </div>
        </div>
        <div class="tabs">
            <a href="?type=normal" class="tabs__item normal active">
                <span class="icon">
                    <i class="fa fa-table"></i>
                </span>
                일반형
            </a>
            <a href="?type=list" class="tabs__item list">
                <span class="icon">
                    <i class="fa fa-list"></i>
                </span>
                목록형
            </a>
        </div>
    </div>
    <div id="content">
        
    </div>
    <div class="paging">
        
    </div>
</div>
<script src="/resources/js/main-festival.js"></script>
<!-- /전북 대표 축제 -->

<!-- 축제 정보 모달 -->
<div id="view-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-between">
                <div class="font-weight-bold fx-4">축제 상세 정보</div>
                <span class="icon" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="fit-cover hx-300" src="/resources/xml/festivalImages/001_10001/10001_1.jpg" alt="축제 이미지">
                    </div>
                    <div class="col-lg-7">
                        <div class="fx-4 font-weight-bold">${lastItem.name}</div>
                        <div class="mt-4">
                            <div class="mt-1">
                                <span class="fx-n2 text-muted mr-2">기간</span>
                                <span class="fx-n1">${lastItem.period}</span>
                            </div>
                            <div class="mt-1">
                                <span class="fx-n2 text-muted mr-2">장소</span>
                                <span class="fx-n1">${lastItem.period}</span>
                            </div>
                            <div class="mt-1">
                                <span class="fx-n2 text-muted mr-2">기간</span>
                                <span class="fx-n1">${lastItem.period}</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fx-n2 text-muted">${lastItem.content}</p>
                        </div>
                    </div>
                </div>
                <hr class="mt-4">
                <div class="fx-3 font-weight-bold">축제 사진</div>
                <div class="f-slide">
                    <div class="f-slide__inner">
                        <img src="/resources/xml/festivalImages/001_10001/10001_1.jpg" alt="축제 이미지">
                        <img src="/resources/xml/festivalImages/001_10001/10001_2.jpg" alt="축제 이미지">
                        <img src="/resources/xml/festivalImages/001_10001/10001_3.jpg" alt="축제 이미지">
                        <img src="/resources/xml/festivalImages/001_10001/10001_4.jpg" alt="축제 이미지">
                    </div>
                </div>
                <div class="f-control">
                    <button class="btn-filled">이전</button>
                    <button class="f-control__btn active">1</button>
                    <button class="f-control__btn">2</button>
                    <button class="f-control__btn">3</button>
                    <button class="f-control__btn">4</button>
                    <button class="btn-filled">다음</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /축제 정보 모달 -->