<?php
$nome = '';
$periodo = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $periodo = $_POST['periodo'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira aplicação</title>
</head>
<body>

    <h1>Olá, <?=$nome ?></h1>
    

    <form action="/index.php" method="POST">
        
        <!-- Nome -->
        <div>
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" id="nome" required />
        </div>
        
        <!-- Periodo -->
        <div>
            <label for="periodo">Selecione o período</label>
            <select name="periodo" id="periodo" required>
                <option value="m" <?=$periodo == 'm' ? 'selected' : '' ?>>Manhã</option>
                <option value="t" <?=$periodo == 't' ? 'selected' : '' ?>>Tarde</option>
                <option value="n" <?=$periodo == 'n' ? 'selected' : '' ?>>Noite</option>
            </select>
        </div>
        
        <button type="submit">Enviar</button>
    </form>

    <?php if ($nome && $periodo): ?>
        <p>Nome: <?=$nome?></p>
        <h1>Período selecionado: 
            <?php
                switch ($periodo) {
                    case 'm':
                        echo 'Manhã';
                        break;
                    case 't':
                        echo 'Tarde';
                        break;
                    case 'n':
                        echo 'Noite';
                        break;
                    default:
                        echo 'Período inválido';
                }
            ?>
        </h1>
    <?php endif; ?>
    
</body>
</html>
