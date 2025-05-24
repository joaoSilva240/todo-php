<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require ("conexao.php")
?>

<body>
    <form action="cadastrar_categoria.php" method="POST">
        <h1>Cadastro de Categoria</h1>
        <label for="nome">Nome da Categoria</label>
        <input type="text" name="nome" id="nome">
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <table width="50%" border="1">
        <thead>
            <th>Id</th>
            <th>Nomes</th>
            <th>Opções</th>
        </thead>
        <tbody>

            <?php
            $slq = "SELECT * FROM categoria";
            $comando = $conexao->prepare($slq);
            $comando->execute();
            $dados=$comando->fetchAll(PDO::FETCH_OBJ);
            // var_dump($dados);
            ?>


            <?php foreach($dados as $item):?>
            <tr>
                <td><?=$item->id?></td>
                <td><?=$item->nome?></td>
                <td><a href="excluir_categoria.php?id=<?= $item->id ?>">🙌</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>

</html>