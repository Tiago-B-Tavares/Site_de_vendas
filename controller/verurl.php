<?php
class verurl{
        public function trocaUrl($url){
        if (empty($url)) {
            $url = "view/secoes/home.php";
        }
        else
        {
            $url = "view/secoes/$url.php";
        }
        include_once($url);
    }

}
?>