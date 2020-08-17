        <div class="header-sub">
            <div class="container">
                <a href="/">전북 축제 On!</a>
                <span class="mx-2"><i class="fa fa-angle-right"></i></span>
                <a href="/festivals">전북 축제</a>
                <span class="mx-2"><i class="fa fa-angle-right"></i></span>
                <a href="/festivals/insert-form">축제 등록</a>
            </div>
        </div>
    </div>
</header>
<!-- /헤더 영역 -->


<form action="/insert/festivals" method="post" enctype="multipart/form-data">
    <div class="container padding">
        <div class="title fx-5 pb-3 mb-4 border-bottom">축제 관리</div>
        <div class="form-group">
            <label for="name">축제명</label>
            <input type="text" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="area">축제 지역</label>
            <input type="text" id="area" class="form-control">
        </div>
        <div class="form-group">
            <label for="period">축제 기간</label>
            <input type="text" id="period" class="form-control">
        </div>
        <div class="form-group">
            <label for="location">축제 장소</label>
            <input type="text" id="location" class="form-control">
        </div>
        <div class="form-group">
            <label for="images">축제 사진</label>
            <div class="custom-file">
                <label for="images" class="custom-file-label">파일을 선택하세요</label>
                <input type="file" name="images[]" class="custom-file-input" mutliple>
            </div>
        </div>
    </div>
</form>