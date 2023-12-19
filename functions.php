<?php
    function password_generator($lenght) {
        $caratteriPossibili = '!"#$%&\()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $password="";
        for($i=0; $i<$lenght; $i++) {
            $password = $password . $caratteriPossibili[rand(0,strlen($caratteriPossibili)-1)];
        }

        return $password;
    }
?>