location.getQueryString = function(){
    let query = this.search.substr(1);
    return query.split("&").reduce((obj, item) => {
        item = item.split("=");
        obj[item[0]] = item[1];
        return obj;
    }, {});   
}

$(function(){
    $("[data-target='#road-modal']").on("click", e => {
        e.preventDefault();
        e.stopPropagation();

        let timeout = false;
        fetch("/location.php")
            .then(res => res.text())
            .then(content => {
                if(timeout == false){
                    $("#road-modal .modal-body").html($(content));
                    $("#road-modal").modal('show');
                    timeout = true;
                }
            });
        setTimeout(() => {
            if(timeout == false){
                alert('찾아오시는 길을 표시할 수 없습니다.');
                timeout = true;
            }
        }, 1000);
    });


    $(".custom-file-input").on("change", e => {
        let files = e.target.files;
        let $label = $(e.target).siblings(".custom-file-label");

        if(files.length === 0) $label.text("파일을 선택하세요");
        else if(files.length === 1) $label.text(files[0].name);
        else $label.text(files[0].name + "외 " + (files.length - 1) +"개의 파일");
    });
});