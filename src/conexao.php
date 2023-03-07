<?php
    function conectar(){
       $con = mysqli_connect('localhost','root','','bancoLogin');
       return $con;
    }
    ?>