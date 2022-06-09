<?php
    include_once "connect.php";
    $formNome = $_GET['nomeCurso'];
    $formStatus = $_GET['statusCurso'];
    $insert = "INSERT INTO cursos (`nome`, `status`) VALUES('$formNome', '$formStatus')";
    $query = mysqli_query($conn, $insert);
    header("location: tabela.php")
?>




