<?php
    session_start();
    include('config.php');

    if($_GET){
        $score = filter_input(INPUT_GET,'score',FILTER_SANITIZE_SPECIAL_CHARS);

        $res = mysqli_query($con,"INSERT INTO tbl_history(id,scores) VALUES(".$_SESSION["id"].",". $score .")");
        
        if($res)
            print_r(json_encode(["msg" => "SUCCESS"]));
        else
            print_r(json_encode(["msg" => "FAILED"]));
    }