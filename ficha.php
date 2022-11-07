<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha</title>
    <link rel="stylesheet" href="css/estiloficha.css">
    <link href='https://fonts.googleapis.com/css?family=Manjari' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
</head>
<body>
        <a href="config.php"><img src="img/configuracoes.png" id="config"></a>
        <a href="descricoes.html"><img src="img/izinho.png" id="izinho"></a>

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
    
            
            <div class="categoria">
                <label class="info">JOGADOR:</label>
                <input type="text" class="espacinho pe" name="jogador" value="<?php echo $qual['jogador']; ?>">
            </div>

            <div class="categoria">
                <label class="info">ORIGEM:</label>
                <select class="espacinho ori" name="origem" value="<?php echo $qual['fk_origem']; ?>">
                    <option value="1">Desconhecido</option>
                    <option value="2">Acadêmico</option>
                    <option value="3">Agente de Saúde</option>
                    <option value="4">Amnésico</option>
                    <option value="5">Artista</option>
                    <option value="6">Atleta</option>
                    <option value="7">Chef</option>
                    <option value="8">Criminoso</option>
                    <option value="9">Cultista Arrependido</option>
                    <option value="10">Desgarrado</option>
                    <option value="11">Engenheiro</option>
                    <option value="12">Executivo</option>
                    <option value="13">Investigador</option>
                    <option value="14">Lutador</option>
                    <option value="15">Magnata</option>
                    <option value="16">Mercenário</option>
                    <option value="17">Militar</option>
                    <option value="18">Operário</option>
                    <option value="19">Policial</option>
                    <option value="20">Religioso</option>
                    <option value="21">Servidor Público</option>
                    <option value="22">Teórico da Conspiração</option>
                    <option value="23">Trambiqueiro</option>
                    <option value="24">Universitário</option>
                    <option value="25">Vítima</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">CLASSE:</label>
                <select class="espacinho ori" name="classe" value="<?php echo $qual['fk_classe']; ?>">
                    <option value="1">Desconhecido</option>
                    <option value="2">Combatente</option>
                    <option value="3">Especialista</option>
                    <option value="4">Ocultista</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">TRILHA:</label>
                <select class="espacinho tri" name="trilha" value="<?php echo $qual['fk_trilha']; ?>">
                    <option value="1">Nenhuma</option>
                    <option value="2">Comandante</option>
                    <option value="3">Guerreiro</option>
                    <option value="4">Operações Especiais</option>
                    <option value="5">Tropa de Choque</option>
                    <option value="6">Atirador de Elite</option>
                    <option value="7">Infiltrador</option>
                    <option value="8">Médico de Campo</option>
                    <option value="9">Negociador</option>
                    <option value="10">Técnico</option>
                    <option value="11">Conduíte</option>
                    <option value="12">Flagelador</option>
                    <option value="13">Graduado</option>
                    <option value="14">Intuitivo</option>
                    <option value="15">Lâmina Paranormal</option>
     

                </select>
            </div>

            <div class="categoria">
                <label class="info">ELEMENTO:</label>
                <select class="espacinho ele" name="elemento" value="<?php echo $qual['fk_elemento']; ?>">
                        <option value="1"> Nenhum </option>
                        <option value="2"> Sangue </option>
                        <option value="3"> Morte </option>
                        <option value="4"> Energia </option>
                        <option value="5"> Conhecimento</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">PATENTE:</label>
                    <select class="espacinho pat" name="patente" value="<?php echo $qual['fk_patente']; ?>">
                            <option value="1">Recruta</option>
                            <option value="2">Operador</option>
                            <option value="3">Agente Especial</option>
                            <option value="4">Oficial de Operações</option>
                            <option value="5">Agente de Elite</option>
                    </select>
            </div>

            <div class="categoria">
                <label class="info">XP:</label>
                <input type="number" class="espacinho pm" name="xp" value="<?php echo $qual['xp']; ?>">
            </div>

            <div class="categoria">
                <label class="info">PM:</label>
                <input type="number" class="espacinho pm" name="pm" value="<?php echo $qual['pm']; ?>">
            </div>
        </div>

        <div class="pericias">
        <label class="escrito direita">PERÍCIAS</label>
        <table>
        <tbody>
        <div id="lista">
              <?php
                include("listarpericias.php");
                
                //verifica se a variável tem os valores da tabela.
                if (!empty($lista_pericias)) {
                    //seleciona linha por linha.
                    foreach ($lista_pericias as $linha) { ?>
                        <tr class="peri">
                            <td class="nome_pericia" name="id"> <?php echo $linha['nome_pericia']; ?></td>
                            <td class="dano2" name="nome"> <?php echo $linha['valor1']; ?></td>
                            <td><img src="img/soma.png" id="soma"></td>
                            <td class="dano2" name="jogador"> <?php echo $linha['valor2']; ?></td>
                            <td><img src="img/igual.png" id="soma"></td>
                            <td class="dano2" name="soma"><?php echo $linha['soma']; ?> </td>
                        </tr>
                <?php } 
                }
                ?>
        </div>
        </tbody>
        </table><!-- 
                <div class="peri">
                    <input type="text" class="nome_pericia" name="nome_pericia"> 
                    <input type="number" class="dano2" name="valor1">
                    <img src="img/soma.png" id="soma">
                    <input type="number" class="dano2" name="valor2">
                    <img src="img/igual.png" id="soma">
                    <textarea class="dano2" name="soma" value="soma"> </textarea> 
                </div>
 -->
<!-- 
                <button type="button" class="add_peri">
                    <label id="textdeslo">ADICIONAR PERÍCIA</label>
                    <img src="img/mais3.png" id="mais">
                </button>
                
                <div class="deslocamento">
                    <label id="textdeslo">DESLOCAMENTO</label>
                    <input type="number" min="0" max="100" class="desl">
                </div> -->
        </div>
        <?php
                }
            }
        ?>
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
                                    <option value="nenhuma">-</option>
                                    <option value="faca">Faca</option>
                                    <option value="martelo">Martelo</option>
                                    <option value="punhal">Punhal</option>
                                    <option value="bastao">Bastão</option>
                                    <option value="machete">Machete</option>
                                    <option value="lanca">Lança</option>
                                    <option value="cajado">Cajado</option>
                                    <option value="arco">Arco</option>
                                    <option value="besta">Besta</option>
                                    <option value="pistola">Pistola</option>
                                    <option value="revolver">Revólver</option>
                                    <option value="fuzil_de_caca">Fuzil de caça</option>
                                    <option value="machadinha">Machadinha</option>
                                    <option value="nunchaku">Nunchaku</option>
                                    <option value="corrente">Corrente</option>
                                    <option value="espada">Espada</option>
                                    <option value="florete">Florete</option>
                                    <option value="machado">Machado</option>
                                    <option value="marreta">Marreta</option>
                                    <option value="acha">Acha</option>
                                    <option value="gadanho">Gadanho</option>
                                    <option value="katana">Katana</option>
                                    <option value="montante">Montante</option>
                                    <option value="moto_serra">Moto-serra</option>
                                    <option value="arco_composto">Arco composto</option>
                                    <option value="balestra">Balestra</option>
                                    <option value="submetralhadora">Submetralhadora</option>
                                    <option value="espingarda">Espingarda</option>
                                    <option value="fuzil_de_assalto">Fuzil de assalto</option>
                                    <option value="fuzil_de_precisão">Fuzil de precisão</option>
                                    <option value="bazuca">Bazuca</option>
                                    <option value="lanca_chamas">Lança-chamas</option>
                                    <option value="metralhadora">Metralhadora</option>
                            </select>
                        </div>
                        <div class="valor_2">
                            <label>TIPO</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                        <div class="valor_2">
                            <label class="menor">CATEGORIA</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                        <div class="valor_2">
                            <label>ALCANCE</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                        <div class="valor_2">
                            <label>DANO</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                        <div class="valor_2">
                            <label>CRÍTICO</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                        <div class="valor_2">
                            <label class="menor">MUNIÇÃO ATUAL</label>
                            <?php
                                if(!empty($qual_atual)) {
                                    foreach ($qual_atual as $qual) {
                            ?>
                            <input type="number" min="0" max="100" class="dano4" name="municao_atual" value="<?php echo $qual['municao_atual']; ?>">
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="valor_2">
                            <label class="menor">MUNIÇÃO TOTAL</label>
                            <input type="number" min="0" max="100" class="dano4">
                        </div>
                    </div>
            </div>


        <div class="proficiencias">
            <label class="escrito">PROFICIÊNCIAS</label>
            <textarea cols="30" rows="5" class="espaco direita prof" name="proficiencias"></textarea>
        </div>

        <div class="ataques_e_defesas">
                <label class="escrito">ATAQUES E DEFESAS DETALHADOS</label>
                <textarea cols="30" rows="5" class="espaco meio at" name="ataquesedefesas"></textarea>
        </div>

        <div class="inventario">
                <label class="escrito">INVENTÁRIO</label>
                <textarea cols="30" rows="5" class="espaco direita inv" name="inventario"></textarea>
        </div>

        <div class="habilidades">
                <label class="escrito">HABILIDADES</label>
                <textarea cols="30" rows="5" class="espaco esquerda hab" name="habilidades"></textarea>
        </div>

        <div class="rituais">
                <label class="escrito">RITUAIS CONHECIDOS</label>
                <textarea cols="30" rows="5" class="espaco meio at" name="rituais"></textarea>
        </div>

        <div class="historico">
                <label class="escrito">HISTÓRICO</label>
                <textarea cols="30" rows="5" class="espaco direita his" name="historico"></textarea>
        </div>

    </form>
</body>
</html>