<?php
    function insert_db($a, $b, $c, $delta, $x1, $x2) {
       $mysqli = new mysqli("localhost", "root", "", "bhaskara");
       $sqlstr = "insert into valores (a, b, c, delta, x1, x2) values ($a, $b, $c, $delta, $x1, $x2)";
       mysqli_query($mysqli, $sqlstr);
    }
?>