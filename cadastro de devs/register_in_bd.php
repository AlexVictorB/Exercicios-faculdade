<?php
include('connectbd.php');

$nome  = $_POST["name"];
$email = $_POST["email"];
$technologies_list = $_POST["techs"];
$description = $_POST["description"];

$technologies = implode(",", $technologies_list);

/*
echo "<h3>nome:   $nome</h3>";
echo "<h3>email:  $email</h3>";
echo "<h3>senha:  $senha</h3>";
echo "<h3>Descrição:  $description</h3></br></br></br>"; */


$cad_usuario = "INSERT INTO users (nome, email, tecnologias, descricao) VALUES ('$nome', '$email', '$technologies', '$description')";


if (mysqli_query($conn, $cad_usuario)) {
      echo "<h1>Novo cadastro realizado </h1></br>";
} else {
      echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

