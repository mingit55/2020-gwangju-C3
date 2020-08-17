<?php
namespace Controller;

use App\DB;

class MainController {
    /**
     * View
     */
    function mainPage(){
        view("main");
    }
    function noticePage(){
        view("notice");
    }
    function mainFestivalPage(){
        view("main-festival");
    }
    function exchangePage(){
        view("exchange-guide");
    }
    function locationPage(){
        require VIEW. "/location.php";
    }
    function festivalsPage(){
        view("festivals", [
            "festivals" => pager(DB::fetchAll("SELECT F.*, IFNULL(I.cnt, 0) cnt
                                            FROM festivals F 
                                            LEFT JOIN (SELECT COUNT(*) cnt, fid FROM images GROUP BY fid) I ON I.fid = F.id
                                            ORDER BY id desc"))
                                            
        ]);
    }
    function insertForm(){
        view("insert-form");
    }

    /**
     * Action
     */

    function login(){
        checkEmpty();
        extract($_POST);

        if($user_id !== "admin" || $password !== "admin")
            back("아이디 또는 비밀번호가 일치하지 않습니다.");

        $_SESSION['user'] = true;
        go("/", "로그인 되었습니다.");
    }
    function logout(){
        unset($_SESSION['user']);
        go("/", "로그아웃 되었습니다.");
    }
    function downloadImages(){

    }
}