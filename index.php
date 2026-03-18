<?php

$servidor = 'localhost';
$database = '';
$user = '';
$password = '';

try {
$dsn "mysql:host=$servidor; dbname=$database";  // código p/o PHP se conectar ao DATABASE (DATA SOURCE NAME), onde o endereço do servidor e o nome do banco estão em uma única linha
$conexao = new PDO ($dsn, $user, $password);

echo "Conexão bem-sucedida!";
}
catch (PDOException $e){
    echo "Erro na conexão: " $e->getMessage();
}

$sql = "SELECT * FROM tb_maquinas(coloca aqui o nome da tb)";
$stmt = $conexao->prepare($sql); // preparando a consulta, stmt = statement, copia o comando do SQL para puxar do database os dados retornados 
$stmt->execute(); // statement = executa o código acima

$lista_nometb = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resende-Tech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Resende-Tech</h1>
        <a href="#">Home</a>
        <a href="#">Sobre</a>
        <a href="#">Serviços</a>
        <a href="#">Contato</a>
    <table>
        <thead>
            <tr>
                <th>Colocar o nome aqui</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lista_nometb as $maquina) { // foreach = para cada lista, as = salvar temporariamente como $maquina
                echo "<tr>
                <td> {$maquina['nome']} </td>
                <td> {$maquina ['status'] </td>
                </tr>";
            // tr = table row (linha da tabela)
            // td = table data (dados da tabela)
            }
            ?>
        </tbody>
    </table>
    </header>
</body>
</html>
