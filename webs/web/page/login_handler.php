<?php

    if (isset($_POST['login'])){
        $page_info['page'] = 'login';
        $page_info['sub_page'] = 'login';

        try{
            if (isset($_GET['function'])){
                new authenticate_login ($page_info);
            }else{

            }
        }catch{
            echo '404';
            echo $e-.getMessage();
        }
    }

?>