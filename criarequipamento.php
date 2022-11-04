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
                    <input type="text" class="nome" name="nome">
            </div>

                <div class="opcoes">
                    <div class="um">
                        <label class="info num">ID</label>
                            <input type="number" class="valor" name="id">
                    </div>
                    <div class="um">
                        <label class="info num">DANO</label>
                            <input type="text" class="valor" name="dano">
                    </div>
                    <div class="um">
                        <label class="info num">CRÍTICO</label>
                            <input type="text" class="valor" name="critico">
                    </div>
                    <div class="um">
                        <label class="info num">ESPAÇO</label>
                            <input type="number" class="valor" name="espaco">
                    </div>
                </div>
                <div class="opcoes2">
                    <div class="um">
                        <label class="info">TIPO</label>
                        <select class="selecao" name="tipo">
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

        <table class="lista">
        <tbody>
        <div>
                <?php
                include("listarequip.php");
                
                //verifica se a variável tem os valores da tabela.
                if (!empty($lista_equipamentos)) {
                    //seleciona linha por linha.
                    foreach ($lista_equipamentos as $linha) { ?>
                        <tr class="equipamento">
                            <td class="id"> <?php echo $linha['id_equipamentos']; ?></td>
                            <td class="nome_equip"> <?php echo $linha['nome_equipamento']; ?></td>
                            <td class="dano"> <?php echo $linha['dano']; ?></td>
                            <td class="critico"> <?php echo $linha['critico']; ?></td>
                            <td class="tipo"> <?php echo $linha['fk_tipo']; ?></td>
                            <td class="categoria"> <?php echo $linha['fk_categoria']; ?></td>
                            <td class="alcance"> <?php echo $linha['fk_alcance']; ?></td>
                            <td class="municao"> <?php echo $linha['fk_municao']; ?></td>
                            <td class="espaco"> <?php echo $linha['espaco']; ?></td>

                            <td class="btalt">
                                <a href="alterarequip.php?id=<?php echo($linha['id_equipamentos']);?>">
                                    <input type="button" class="alterar" value="ALTERAR">
                                </a>
                            </td>
                            <td class="delete"> 
                                <a href="excluirequip.php?id=<?php echo($linha['id_equipamentos']);?>">
                                    <img src="img/excluir.png" width="40px" height="40px">
                                </a>
                            </td>
                           <!--  https://blog.betrybe.com/javascript/javascript-alert/ -->
                        </tr>
                <?php } 
                }
                ?>
            </div>
        </tbody>
        </table>
    </form>
</body>
</html>