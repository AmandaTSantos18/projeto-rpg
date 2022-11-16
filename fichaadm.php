<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Personagem Padrão</title>
    <link rel="stylesheet" href="css/estilofichaadm.css">
    <link href='https://fonts.googleapis.com/css?family=Manjari' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
</head>
<body>
        <a href="configadm.php"><img src="img/configuracoes.png" id="config"></a>

        <a href="criarequipamento.php" id="criar">
            <button type="submit" class="criarqual"> EQUIPAMENTO </button>
        </a>

        <label class="principal">CRIAR PERSONAGEM</label>

        <form action="salvar.php" method="post" target="_blank">
        <input type="submit" class="salvar" value="SALVAR"> 

        <div class="cabecalho">
            <div class="categoria">
                <label class="info">PERSONAGEM:</label>
                
        <?php 
        include("qualperso.php");
            if(!empty($qual_perso)) {
                foreach ($qual_perso as $qual) {
        ?>
                <input type="text" class="espacinho pe" name="personagem" value="<?php echo $qual['nome']; ?>">
            </div>
        <?php
            }
        }
        ?>

<div class="categoria">
                <label class="info">ORIGEM:</label>
                <select class="espacinho ori" name="origem">
                <option
                            <?php 
                                if(!empty($qual_perso)) {
                                    foreach ($qual_perso as $qual) {
                            ?> value="<?php echo $qual['fk_origem']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                                if(!empty($origem)) {
                                    foreach ($origem as $qual) {
                            ?><?php echo $qual['nome_origem']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                <?php 
                include("filtro.php");
                    if(!empty($origens)) {
                        foreach ($origens as $qual) {
                ?>
                    <option value="<?php echo$qual['id_origem']; ?>"> <?php echo$qual['nome_origem'];?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>

            <div class="categoria">
                <label class="info">CLASSE:</label>
                <select class="espacinho ori" name="classe">
                            <option
                            <?php 
                                if(!empty($qual_perso)) {
                                    foreach ($qual_perso as $qual) {
                            ?> value="<?php echo $qual['fk_classe']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                                if(!empty($classe)) {
                                    foreach ($classe as $qual) {
                            ?><?php echo $qual['nome_classe']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                <?php 
                include("filtro.php");
                    if(!empty($classes)) {
                        foreach ($classes as $qual) {
                ?>
                    <option value="<?php echo $qual['id_classe']; ?>"> <?php echo $qual['nome_classe'];?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>

            <div class="categoria">
                <label class="info">TRILHA:</label>
                <select class="espacinho tri" name="trilha">
                <option
                            <?php 
                                if(!empty($qual_perso)) {
                                    foreach ($qual_perso as $qual) {
                            ?> value="<?php echo $qual['fk_trilha']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                                if(!empty($trilha)) {
                                    foreach ($trilha as $qual) {
                            ?><?php echo $qual['nome_trilha']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                <?php 
                    include("filtro.php");
                        if(!empty($trilhas)) {
                            foreach ($trilhas as $qual) {
                    ?>
                    <option value="<?php echo $qual['id_trilha']; ?>"><?php echo $qual['nome_trilha']; ?></option>
                <?php
                    }}?>
                </select>
            </div>

            <div class="categoria">
                <label class="info">ELEMENTO:</label>
                <select class="espacinho ele" name="elemento" value="<?php echo $qual['fk_elemento']; ?>">
                <option
                            <?php 
                                if(!empty($qual_perso)) {
                                    foreach ($qual_perso as $qual) {
                            ?> value="<?php echo $qual['fk_elemento']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                                if(!empty($ele)) {
                                    foreach ($ele as $qual) {
                            ?><?php echo $qual['nome_elemento']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                <?php 
                include("filtro.php");
                    if(!empty($elemento)) {
                        foreach ($elemento as $qual) {
                ?>
                <option value="<?php echo $qual['id_elemento']; ?>"><?php echo $qual['nome_elemento']; ?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>

            <div class="categoria">
                <label class="info">PATENTE:</label>
                    <select class="espacinho pat" name="patente" value="<?php echo $qual['fk_patente']; ?>">
                    <option
                            <?php 
                                if(!empty($qual_perso)) {
                                    foreach ($qual_perso as $qual) {
                            ?> value="<?php echo $qual['fk_patente']; ?>"
                            <?php
                                }
                            }
                            ?>>
                            
                            <?php 
                                if(!empty($pat)) {
                                    foreach ($pat as $qual) {
                            ?><?php echo $qual['nome_patente']; ?>
                            <?php
                                }
                            }
                            ?>
                            </option>
                    <?php 
                    include("filtro.php");
                        if(!empty($patente)) {
                            foreach ($patente as $qual) {
                    ?>
                    <option value="<?php echo $qual['id_patente']; ?>"><?php echo $qual['nome_patente']; ?></option>
                    <?php
                            }
                        }
                    ?>
                    </select>
            </div>

            <div class="categoria">
                <label class="info">XP:</label>
                <?php 
                    if(!empty($qual_perso)) {
                        foreach ($qual_perso as $qual) {
                ?>
                <input type="number" class="espacinho pm" name="xp" value="<?php echo $qual['xp']; ?>">
                <?php
                    }
                }
                ?>
            </div>

            <div class="categoria">
                <label class="info">PM:</label>
                <?php 
                    if(!empty($qual_perso)) {
                        foreach ($qual_perso as $qual) {
                ?>
                <input type="number" class="espacinho pm" name="pm" value="<?php echo $qual['pm']; ?>">
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <div class="pericias">
        <label class="escrito direita">PERÍCIAS</label>
        <table>
        <tbody>
            <div id="lista">
              <?php
                include("listarpericias.php");
                if (!empty($lista_pericias)) {
                    $i=0;
                    while($i < 26) 
                    {
                    foreach ($lista_pericias as $linha) { ?>
                        <div class="peri">
                            <label class="nome_pericia"><?php echo $linha['nome_pericia']; ?></label>
                            <input type="text" class="dano2" value="<?php echo $linha['valor1']; ?>" name="valor<?php$i?>">
                            <img src="img/soma.png" id="soma">
                            <input type="text" class="dano2" value="<?php echo $linha['valor2']; ?>" name="valor1<?php$i?>">
                            <img src="img/igual.png" id="soma">
                            <label type="text" class="dano2" id="resultado" name="soma<?php$i?>"><?php echo $linha['soma']; ?></label>
                        </div>
                <?php $i++;} 
                    }
                }
                ?>
            </div>
        </tbody>
        </table>
                <div class="deslocamento">
                    <label id="textdeslo">DESLOCAMENTO</label>
                    <?php
                        if(!empty($qual_atual)) {
                            foreach ($qual_atual as $qual) {
                    ?>
                    <input type="number" min="0" max="100" class="desl" name="deslocamento" value="<?php echo $qual['deslocamento']; ?>">
                    <?php
                        }}
                    ?>
                </div>
        </div>

        <?php
            if(!empty($qual_atri)) {
                foreach ($qual_atri as $qual) {
        ?>
        <div class="atributos">
            <img src="img/simbolo.png" id="simb">
            <input type="number" class="atri forca" name="forca" value="<?php echo $qual['forca']; ?>">
            <input type="number" class="atri presenca" name="presenca" value="<?php echo $qual['presenca']; ?>">
            <input type="number" class="atri agilidade" name="agilidade" value="<?php echo $qual['agilidade']; ?>">
            <input type="number" class="atri intelecto" name="intelecto" value="<?php echo $qual['intelecto']; ?>">
            <input type="number" class="atri vigor" name="vigor" value="<?php echo $qual['vigor']; ?>">

            <input type="number" min="0" max="100" class="atri2 nex" name="nex" value="<?php echo $qual['nex']; ?>">
        </div>
        <?php
                }
            }
        ?>

        <div class="bloco">
            <div class="saude">
                <div class="escrito sa">SAÚDE</div>
                    <div class="conteudo">
                        <label class="saude_texto"><h1>PV</h1><h2>PONTOS DE VIDA</h2></label>
                        <?php
                        if(!empty($qual_atual)) {
                            foreach ($qual_atual as $qual) {
                        ?>
                        <input type="number" class="dano2" name="vida_atual" value="<?php echo $qual['vida_atual']; ?>">
                        <?php
                            }}
                        ?>
                        <img src="img/barra.png" id="barra">
                        <?php
                            if(!empty($qual_saude)) {
                                foreach ($qual_saude as $qual) {
                        ?>
                        <input type="number" class="dano2" name="vida" value="<?php echo $qual['vida']; ?>">
                        <?php
                            }}
                        ?>
                    </div>

                    <div class="conteudo">
                        <label class="saude_texto"><h1>SAN</h1><h2>SANIDADE</h2></label>
                        <?php
                        if(!empty($qual_atual)) {
                            foreach ($qual_atual as $qual) {
                        ?>
                        <input type="number" class="dano2" name="sanidade_atual" value="<?php echo $qual['sanidade_atual']; ?>">
                        <?php
                            }}
                        ?>
                        <img src="img/barra.png" id="barra">
                        <?php
                            if(!empty($qual_saude)) {
                                foreach ($qual_saude as $qual) {
                        ?>
                        <input type="number" class="dano2" name="sanidade" value="<?php echo $qual['sanidade']; ?>">
                        <?php
                            }}
                        ?>
                    </div>

                    <div class="conteudo">
                        <label class="saude_texto"><h1>PE</h1><h2>PONTOS DE ESFORÇO</h2></label>
                        <?php
                        if(!empty($qual_atual)) {
                            foreach ($qual_atual as $qual) {
                        ?>
                        <input type="number" class="dano2" name="esforco_atual" value="<?php echo $qual['esforco_atual']; ?>">
                        <?php
                            }}
                        ?>
                        <img src="img/barra.png" id="barra">
                        <?php
                            if(!empty($qual_saude)) {
                                foreach ($qual_saude as $qual) {
                        ?>
                        <input type="number" class="dano2" name="esforco" value="<?php echo $qual['esforco']; ?>">
                        <?php
                            }}
                        ?>
                    </div>
            </div>
            <?php
            if(!empty($qual_def)) {
                foreach ($qual_def as $qual) {
            ?>
            <div class="saude">
                <label class="escrito sa">DESFESAS</label>
                    <div class="conteudo2">
                        <div class="saude_texto"><h3>PASSIVA</h3></div>
                        <input type="number" class="dano3" name="passiva" value="<?php echo $qual['passiva']; ?>">
                    </div>

                    <div class="conteudo2">
                        <label class="saude_texto"><h3>BLOQUEIO</h3></label>
                        <input type="number" class="dano3" name="bloqueio" value="<?php echo $qual['bloqueio']; ?>">
                    </div>

                    <div class="conteudo2">
                        <label class="saude_texto"><h3>ESQUIVA</h3></label>
                        <input type="number" class="dano3" name="esquiva" value="<?php echo $qual['esquiva']; ?>">
                    </div>
            </div>
            <?php
                }}
            ?>
        </div>

        <?php
            if(!empty($qual_resis)) {
                foreach ($qual_resis as $qual) {
        ?>
        <div class="resistenciasadano">
            <label class="escrito rd">RESISTÊNCIAS A DANO</label>
                <div class="tipos">
                    <div class="valor">
                        FÍSICA
                        <input type="number" class="dano" name="resistencia_fisica" value="<?php echo $qual['fisica']; ?>">
                    </div>
                    <div class="valor">
                        BALÍSTICA
                        <input type="number" class="dano" name="resistencia_balistica" value="<?php echo $qual['balistica']; ?>">
                    </div>
                    <div class="valor">
                        MENTAL
                        <input type="number" class="dano" name="resistencia_mental" value="<?php echo $qual['mental']; ?>">
                    </div>
                    <div class="valor">
                        SANGUE
                        <input type="number" class="dano" name="resistencia_sangue" value="<?php echo $qual['sangue']; ?>">
                    </div>
                    <div class="valor">
                        MORTE
                        <input type="number" class="dano" name="resistencia_morte" value="<?php echo $qual['morte']; ?>">
                    </div>
                    <div class="valor">
                        ENERGIA
                        <input type="number" class="dano" name="resistencia_energia" value="<?php echo $qual['energia']; ?>">
                    </div>
                    <div class="valor">
                        CONHECIMENTO
                        <input type="number" class="dano" name="resistencia_conhecimento" value="<?php echo $qual['conhecimento']; ?>">
                    </div>
                </div>
        </div>
        <?php
            }}
        ?>
        <div class="ataques">
                <div class="escrito rd">ATAQUES</div>
                    <div class="tipos">
                        <div class="valor_2">
                            <label>ARMA</label>
                            <select class="dano_arma" onchange="Mudar();">
                            <?php
                                if(!empty($arma)) {
                                    foreach ($arma as $qual) {
                            ?>
                            <option value="<?php echo $qual['id_equipamentos']; ?>"><?php echo $qual['nome_equipamento']; ?></option>
                            <?php
                                }}
                            ?>
                            </select>
                        </div>
                        <div class="valor_2">
                            <label>TIPO</label>
                            <textarea type="number" min="0" max="100" class="dano"></textarea>
                        </div>
                        <div class="valor_2">
                            <label class="menor">CATEGORIA</label>
                            <textarea type="number" min="0" max="100" class="dano"></textarea>
                        </div>
                        <div class="valor_2">
                            <label>ALCANCE</label>
                            <textarea type="number" min="0" max="100" class="dano"></textarea>
                        </div>
                        <div class="valor_2">
                            <label>DANO</label>
                            <textarea type="number" min="0" max="100" class="dano"></textarea>
                        </div>
                        <div class="valor_2">
                            <label>CRÍTICO</label>
                            <textarea type="number" min="0" max="100" class="dano"></textarea>
                        </div>
                        <div class="valor_2">
                            <label class="menor">MUNIÇÃO ATUAL</label>
                            <?php
                                if(!empty($qual_atual)) {
                                    foreach ($qual_atual as $qual) {
                            ?>
                            <textarea type="number" min="0" max="100" class="dano" name="municao_atual"><?php echo $qual['municao_atual']; ?></textarea>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="valor_2">
                            <label class="menor">MUNIÇÃO TOTAL</label>
                            <textarea type="number" min="0" max="100" class="dano"></textarea>
                        </div>
                    </div>
            </div>


        <?php
            if(!empty($qual_prof)) {
                foreach ($qual_prof as $qual) {
        ?>
        <div class="proficiencias">
            <label class="escrito">PROFICIÊNCIAS</label>
            <textarea cols="30" rows="5" class="espaco direita prof" name="proficiencias"><?php echo $qual['escrito']; ?></textarea>
        </div>
        <?php
                }
            }
        ?>
        <?php
            if(!empty($qual_ataqedef)) {
                foreach ($qual_ataqedef as $qual) {
        ?>
        <div class="ataques_e_defesas">
                <label class="escrito">ATAQUES E DEFESAS DETALHADOS</label>
                <textarea cols="30" rows="5" class="espaco meio at" name="ataquesedefesas" ><?php echo $qual['escrito']; ?></textarea>
        </div>
        <?php
                }
            }
        ?>
        <?php
            if(!empty($qual_inv)) {
                foreach ($qual_inv as $qual) {
        ?>
        <div class="inventario">
                <label class="escrito">INVENTÁRIO</label>
                <textarea cols="30" rows="5" class="espaco direita inv" name="inventario"><?php echo $qual['escrito']; ?></textarea>
        </div>
        <?php
                }
            }
        ?>
        <?php
            if(!empty($qual_habil)) {
                foreach ($qual_habil as $qual) {
        ?>
        <div class="habilidades">
                <label class="escrito">HABILIDADES</label>
                <textarea cols="30" rows="5" class="espaco esquerda hab" name="habilidades"><?php echo $qual['escrito']; ?></textarea>
        </div>
        <?php
                }
            }
        ?>
        <?php
            if(!empty($qual_ritconh)) {
                foreach ($qual_ritconh as $qual) {
        ?>
        <div class="rituais">
                <label class="escrito">RITUAIS CONHECIDOS</label>
                <textarea cols="30" rows="5" class="espaco meio at" name="rituais"><?php echo $qual['escrito']; ?></textarea>
        </div>
        <?php
                }
            }
        ?>
        <?php
            if(!empty($qual_hist)) {
                foreach ($qual_hist as $qual) {
        ?>
        <div class="historico">
                <label class="escrito">HISTÓRICO</label>
                <textarea cols="30" rows="5" class="espaco direita his" name="historico"><?php echo $qual['escrito']; ?></textarea>
        </div>
        <?php
                }
            }
        ?>
    </form>
</body>
</html>