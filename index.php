    <?php
        include ('./system/Dcontroller.php');
        include ('./system/Load.php');
        include ('./system/config.php');
        include ('./url/url.php');
        if(isset($_GET['url'])){
           
        $url=isset($_GET['url']) ? $_GET['url'] : NULL;
        session_start();
            if($url!=NUll){
                $url=trim($url);
                $url=rtrim($url,"/");
                $url=explode("/", filter_var($url, FILTER_SANITIZE_URL));
            }else{
                unset($url);
            }
            if(isset($url[0])){
                include('./app/controller/'.$url[0].'.php');
                $controler =new $url[0]();
                if(isset($url[2])){
                    $controler->{$url[1]}($url[2]);
                }
                else
                   $controler->{$url[1]}();     
            }
        }
        else{
            include('./app/controller/admin.php');
                $controler =new admin();
                    $controler->admin();
            }   
    ?>

    
