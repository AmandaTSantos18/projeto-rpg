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

        <form action="alterarequip.php" method="post"> 
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
                            <input type="text" class="valor" name="dano" value="<?php echo $qual['dano']; ?>">
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
                            <input type="text" class="valor" name="critico" value="<?php echo $qual['critico']; ?>">
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
                            <input type="number" class="valor" name="espaco" value="<?php echo $qual['espaco']; ?>">
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
                            <option
                            <?php 
                            include("qualequip.php");
                                if(!empty($equipamento)) {
                                    foreach ($equipamento as $qual) {
                            ?> value="<?php echo $qual['fk_tipo']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                            include("qualequip.php");
                                if(!empty($tipo)) {
                                    foreach ($tipo as $qual) {
                            ?><?php echo $qual['nome_tipo']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                            <option value="1">Corte</option>
                            <option value="2">Impacto</option>
                            <option value="3">Perfuração</option>
                            <option value="4">Balístico</option>
                            <option value="5">Fogo</option>
                        </select>                    
                    </div>
                    <div class="um">
                        <label class="info">CATEGORIA</label>
                        <select class="selecao" name="categoria">
                            <option
                            <?php 
                            include("qualequip.php");
                                if(!empty($equipamento)) {
                                    foreach ($equipamento as $qual) {
                            ?> value="<?php echo $qual['fk_categoria']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                            include("qualequip.php");
                                if(!empty($categorias)) {
                                    foreach ($categorias as $qual) {
                            ?><?php echo $qual['nome_categoria']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
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
                        <option
                            <?php 
                            include("qualequip.php");
                                if(!empty($equipamento)) {
                                    foreach ($equipamento as $qual) {
                            ?> value="<?php echo $qual['fk_alcance']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                            include("qualequip.php");
                                if(!empty($alcance)) {
                                    foreach ($alcance as $qual) {
                            ?><?php echo $qual['distancia']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                            <option value="1">Curto</option>
                            <option value="2">Médio</option>
                            <option value="3">Longo</option>
                            <option value="4">Extremo</option>
                        </select>                    
                    </div>
                    <div class="um">
                        <label class="info">MUNIÇÃO</label>
                        <select class="selecao" name="municao">
                            <option
                            <?php 
                            include("qualequip.php");
                                if(!empty($equipamento)) {
                                    foreach ($equipamento as $qual) {
                            ?> value="<?php echo $qual['fk_municao']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                            include("qualequip.php");
                                if(!empty($municao)) {
                                    foreach ($municao as $qual) {
                            ?><?php echo $qual['nome_municao']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                            <option value="1">Flechas</option>
                            <option value="2">Balas Leves</option>
                            <option value="3">Balas Pesadas</option>
                            <option value="4">Cartuchos</option>
                            <option value="5">Foguetes</option>
                            <option value="6">Combustível</option>
                        </select>     
                    </div> 
                </div>              
            </div>
    </form>
</body>
</html>