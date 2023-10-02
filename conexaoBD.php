<?php
try {
        //conexao PDO       //IP, nomeBD, usuario, senha
        //CONEXAO LOCAL: $db = localhost
        $db = 'mysql:host=143.106.241.3;dbname=cl201273;charset=utf8'; //ip para casa: localhost
        $user = 'cl201273';
        $passwd = 'MarcosLeonardo18';
        $pdo = new PDO($db, $user, $passwd); //classe PDO que lida com banco de dados

        //ativar o depurador de erros apra gerar exception em casos de errpo
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setAttribute ativa depuracao de erros, banco devolve o erro
            // -> método que estamos concatenando
    } catch (PDOException $e) {
        $output = 'Impossível conectar BD : ' . $e . '<br>';
        echo $output;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuários</title>
</head>

<body>
    <table id="tabela-usuarios">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Os dados da tabela serão inseridos aqui -->
        </tbody>
    </table>

    <script>
        // Faz uma requisição AJAX para obter os dados do PHP
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'getUsuarios.php', true);
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var usuarios = JSON.parse(xhr.responseText);
                var tabela = document.getElementById('tabela-usuarios').getElementsByTagName('tbody')[0];

                // Preenche a tabela com os dados
                usuarios.forEach(function (usuario) {
                    var row = tabela.insertRow();
                    var idCell = row.insertCell(0);
                    var nomeCell = row.insertCell(1);
                    var emailCell = row.insertCell(2);

                    idCell.textContent = usuario.id;
                    nomeCell.textContent = usuario.nome;
                    emailCell.textContent = usuario.email;
                });
            }
        };
        xhr.send();
    </script>
</body>

</html>
