<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Equipamento</title>
    <link rel="stylesheet" href="css/estilocriarequip.css">
    <link href='https://fonts.googleapis.com/css?family=Manjari' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
</head>
<body>
        <form action="salvarequip.php" method="post">    
            <a href="config.php"><img src="img/configuracoes.png" id="config"></a>
            <a href="criarequipamento.html" id="criar">
                    <button type="submit" class="criarqual"> PERSONAGEM </button>
            </a>

            <label class="principal">CRIAR EQUIPAMENTO</label>

            <button type="submit" class="salvar"> SALVAR </button>

            
                <input type="text" class="nome">

            <div class="opcoes">
                <div class="um">
                    <label class="info">ID</label>
                        <input type="number" class="valor">
                </div>

                <div class="um">
                    <label class="info">DANO</label>
                        <input type="text" class="valor">
                </div>
                <div class="um">
                    <label class="info">CRÍTICO</label>
                        <input type="text" class="valor">
                </div>
                <div class="um">
                    <label class="info">ESPAÇO</label>
                        <input type="number" class="valor">
                </div>
                <div class="um">
                    <label class="info">TIPO</label>
                    <select class="selecao">
                        <option value="1">CORTE</option>
                        <option value="2">IMPACTO</option>
                        <option value="3">PERFURAÇÃO</option>
                        <option value="4">BALÍSTICO</option>
                        <option value="5">FOGO</option>
                    </select>                    
                </div>
                <div class="um">
                    <label class="info">CATEGORIA</label>
                    <select class="selecao">
                        <option value="1">0</option>
                        <option value="2">I</option>
                        <option value="3">II</option>
                        <option value="4">III</option>
                        <option value="5">IV</option>
                    </select>                    
                </div>
                <div class="um">
                    <label class="info">ALCANCE</label>
                    <select class="selecao">
                        <option value="1">CURTO</option>
                        <option value="2">MÉDIO</option>
                        <option value="3">LONGO</option>
                        <option value="4">EXTREMO</option>
                    </select>                    
                </div>
                <div class="um">
                    <label class="info">MUNIÇÃO</label>
                    <select class="selecao">
                        <option value="1">FLECHAS</option>
                        <option value="2">BALAS LEVES</option>
                        <option value="3">BALAS PESADAS</option>
                        <option value="4">CARTUCHOS</option>
                        <option value="5">FOGUETES</option>
                        <option value="6">COMBUSTÍVEL</option>
                    </select>                    
                </div>
            </div>
        </form>
</body>
</html>