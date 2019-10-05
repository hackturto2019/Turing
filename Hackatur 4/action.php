<?php

if(isset($_POST['nao'])){
    header("location:atracoes.php");
}else{
    header("location:solicitaDados.php");
}

?>