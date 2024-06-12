<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cod_func = $_POST['cod_func'];
$nome = $_POST['nome'];
$cargo_func = $_POST['cargo_func'];
$departamento_func = $_POST['departamento_func'];
$admissao_func = $_POST['admissao_func'];
$salario_func = $_POST['salario_func'];
$endereco_func = $_POST['endereco_func'];
$email_func = $_POST['email_func'];
$tel_func = $_POST['tel_func'];



$sql ="INSERT INTO funcionarios (cod_func, nome, cargo_func, departamento_func, admissao_func, salario_func, endereco_func, email_func, tel_func) 
                        VALUES ('$cod_func', '$nome', '$cargo_func', '$departamento_func', '$admissao_func','$salario_func','$endereco_func','$email_func','$tel_func')";

}
if (mysqli_query($conn, $sql)) {
    header("location:sucess.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>