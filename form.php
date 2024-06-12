<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imageform.svg">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
</style>
    <title>Atiidade de PW Daniely e Jonathan</title>
    <link rel="stylesheet" href="stylesform.css">
</head>
<body>
    <main>
    <section id="text">
<h2>Olá, Bem vindo(a) ao <br>Cadastro de funcionário</h2>

<img src="imageform.svg" alt="">
</section>

<form action="" method="POST" id="form">

<label for="cod_func"> Código do Funcionário:
    <input type="text" name="cod_func" placeholder="Digite o codigo" required>
</label>

<label for="nome"> Nome Completo:
    <input type="text" name="nome" placeholder="Digite o nome completo" required>
</label>

<label for="cargo_func"> Cargo do funcionário:
    <input type="text" name="cargo_func" placeholder="Digite o cargo" required> 
</label>

<label for="departamento_func"> Departamento do funcionário:
    <input type="text" name="departamento_func" placeholder="Digite o departamento" required>
</label>

<label for="admissao_func"> Admissão do funcionário:
    <input type="date" name="admissao_func" required> 
</label>

<label for="salario_func"> Salário do funcionário:
    <input type="number" name="saario_func" placeholder="Digite o salário" required>
</label>

<label for="endereco_func"> Endereço do funcionário:
    <input type="text" name="endereco_func" placeholder="Digite o endereço" required>
</label>

<label for="email_func"> E-mail do funcionário:
    <input type="email" name="email_func" placeholder=" Digite o e-mail" required>
</label>

<label for="tel_func"> Telefone do funcionário:
    <input type="text" name="tel_func" placeholder="Digite o telefone" required>
</label>

<label for="submit">
<input type="submit" name="enviar" id="btn-enviar">
</label>
</form>
</main>
</body>
</html>












