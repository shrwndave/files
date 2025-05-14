<?php

    if (isset($_POST['register'])){
        $page_info['page'] = 'register';
        $page_info['sub_page'] = 'register';

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