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
    <?php
        include("conexao.php");
        session_start();
        $_SESSION['id_equipamentos'] = $_GET["id"];
    ?>

           
            <a href="configadm.php"><img src="img/configuracoes.png" id="config"></a>

            <a href="fichaadm.php" id="criar">
                    <button type="submit" class="criarqual"> PERSONAGEM </button>
            </a>

        <form action="salvarequip.php" method="post"> 
            <label class="principal">CRIAR EQUIPAMENTO</label>

            <button type="submit" class="salvar"> SALVAR </button>

        <div class="tudo">
            <div class="opcaonome">
                <label class="info">NOME DO EQUIPAMENTO</label>
                <?php 
                include("qualequip.php");
                    if(!empty($equipamento)) {
                        foreach ($equipamento as $qual) {
                ?>
                    <input type="text" class="nome" name="nome" value="<?php echo $qual['nome_equipamento']; ?>">
                <?php
                    }
                }
                ?>
            </div>

                <div class="opcoes">
                    <div class="um">
                        <label class="info num">DANO</label>
                        <?php 
                        include("qualequip.php");
                            if(!empty($equipamento)) {
                                foreach ($equipamento as $qual) {
                        ?>
                            <input type="text" class="valor" name="dano" value="<?php echo $qual['dano']; ?>
                            <?php
                    }
                }
                ?>
                    </div>
                    <div class="um">
                        <label class="info num">CRÍTICO</label>
                        <?php 
                        include("qualequip.php");
                            if(!empty($equipamento)) {
                                foreach ($equipamento as $qual) {
                        ?>
                            <input type="text" class="valor" name="critico">
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="um">
                        <label class="info num">ESPAÇO</label>
                        <?php 
                        include("qualequip.php");
                            if(!empty($equipamento)) {
                                foreach ($equipamento as $qual) {
                        ?>
                            <input type="number" class="valor" name="espaco">
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="opcoes2">
                    <div class="um">
                        <label class="info">TIPO</label>
                        <select class="selecao" name="tipo">
                            <option value="">CORTE</option>
                            <option value="1">CORTE</option>
                            <option value="2">IMPACTO</option>
                            <option value="3">PERFURAÇÃO</option>
                            <option value="4">BALÍSTICO</option>
                            <option value="5">FOGO</option>
                        </select>                    
                    </div>
                    <div class="um">
                        <label class="info">CATEGORIA</label>
                        <select class="selecao" name="categoria">
                            <option value="1">0</option>
                            <option value="2">I</option>
                            <option value="3">II</option>
                            <option value="4">III</option>
                            <option value="5">IV</option>
                        </select>                    
                    </div>
                    <div class="um">
                        <label class="info">ALCANCE</label>
                        <select class="selecao" name="alcance">
                            <option value="1">CURTO</option>
                            <option value="2">MÉDIO</option>
                            <option value="3">LONGO</option>
                            <option value="4">EXTREMO</option>
                        </select>                    
                    </div>
                    <div class="um">
                        <label class="info">MUNIÇÃO</label>
                        <select class="selecao" name="municao">
                            <option value="1">FLECHAS</option>
                            <option value="2">BALAS LEVES</option>
                            <option value="3">BALAS PESADAS</option>
                            <option value="4">CARTUCHOS</option>
                            <option value="5">FOGUETES</option>
                            <option value="6">COMBUSTÍVEL</option>
                        </select>     
                    </div> 
                </div>              
            </div>
    </form>
</body>
</html>