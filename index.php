<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finan - App de Controle Financeiro Pessoal</title>
</head>
<body>

    <h2>Histórico de Lançamentos</h2>

    <table width="50%" border="1" cellspacing="0" cellspadding="5">
        <tr>
            <th>Descrição</th>
            <th>Valor (R$)</th>
        </tr>

        <?php 
            $filename = 'dados.txt';
            $dados = file($filename);
            foreach($dados as $item) {
                $linha = explode("|", $item);
                
                if (count($linha) > 1) {
                    $descricao = $linha[0];
                $valor = $linha[1];
        ?>
            <tr>
                <td><?php echo $descricao; ?></td>
                <td><?=$valor?></td>
            </tr>        
        <?php }
        } ?>

    </table>

    <br />
    <br />

    <h2>Novo Lançamento</h2>

    <form action="gravar.php" method="post">

        Descrição da despesa: 
        <input type="text" name="descricao" />
        <br />

        Valor da despesa: 
        <input type="text"  name="valor" />
        <br />
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>

    </form>
    
</body>
</html>