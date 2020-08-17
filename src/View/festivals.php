        <div class="header-sub">
            <div class="container">
                <a href="/">전북 축제 On!</a>
                <span class="mx-2"><i class="fa fa-angle-right"></i></span>
                <a href="/festivals">전북 축제</a>
            </div>
        </div>
    </div>
</header>
<!-- /헤더 영역 -->

<div class="container padding">
    <div class="d-between">
        <div>
            <hr>
            <div class="title">
                <h1>FESTIVALS</h1>
                <p>전북 축제</p>
            </div>
        </div>
        <?php if(user()):?>
            <a href="/festivals/insert-form" class="btn-filled">축제 등록</a>
        <?php endif;?>
    </div>
    <div class="t-head">
        <div class="cell-10">번호</div>
        <div class="cell-40">축제명(사진)</div>
        <div class="cell-20">다운로드</div>
        <div class="cell-20">기간</div>
        <div class="cell-10">장소</div>
    </div>
    <?php foreach($festivals->data as $festival):?>
    <div class="t-row">
        <div class="cell-10"><?=$festival->id?></div>
        <div class="cell-40 px-3 text-ellipsis text-left">
            <?= $festival->name ?>
            <span class="badge badge-primary"><?= $festival->cnt ?></span>
        </div>
        <div class="cell-20">
            <a href="#" class="btn-filled">tar</a>
            <a href="#" class="btn-filled">zip</a>
        </div>
        <div class="cell-20"><?= $festival->period ?></div>
        <div class="cell-10"><?= $festival->area ?></div>
    </div>
    <?php endforeach;?>
    <div class="paging mt-5">
        <a href="/festivals?page=<?=$festivals->prevPage?>" class="paging__blink">
            <i class="fa fa-angle-left"></i>
        </a>
        <?php for($i = $festivals->start; $i <= $festivals->end; $i++):?>
            <a href="/festivals?page=<?=$i?>" class="paging__link <?= $i == $festivals->page ? "active" : "" ?>"><?=$i?></a>
        <?php endfor;?>
        <a href="/festivals?page=<?=$festivals->nextPage?>" class="paging__blink">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>