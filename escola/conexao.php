<?php
$conexao = mysqli_connect("localhost", "root", "", "escola");
if(!$conexao) {
    echo "Ahhhhhh deu errado!";
}