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
    <form action="salvar.php" method="post">
        <a href="config.php"><img src="img/configuracoes.png" id="config"></a>
        <a href="criarequipamento.html" id="criar">
                <button type="submit" class="criarqual"> EQUIPAMENTO </button>
        </a>

        <label class="principal">CRIAR PERSONAGEM</label>


        <a href="descricoes.html"><img src="img/izinho.png" id="izinho"></a>
        <button type="submit" class="salvar"> SALVAR </button>
        <div class="cabecalho">
            <div class="categoria">
                <label class="info">PERSONAGEM:</label>
                <input type="text" class="espacinho pe" name="personagem">
            </div>

            <div class="categoria">
                <label class="info">ORIGEM:</label>
                    <select class="espacinho ori" name="origem">
                    <option value="desconhecido">Desconhecido</option>
                    <option value="academico">Acadêmico</option>
                    <option value="agente_de_saude">Agente de Saúde</option>
                    <option value="amnesico">Amnésico</option>
                    <option value="artista">Artista</option>
                    <option value="atleta">Atleta</option>
                    <option value="chef">Chef</option>
                    <option value="criminoso">Criminoso</option>
                    <option value="cultista_arrependido">Cultista Arrependido</option>
                    <option value="desgarrado">Desgarrado</option>
                    <option value="engenheiro">Engenheiro</option>
                    <option value="executivo">Executivo</option>
                    <option value="investigador">Investigador</option>
                    <option value="lutador">Lutador</option>
                    <option value="magnata">Magnata</option>
                    <option value="mercenario">Mercenário</option>
                    <option value="militar">Militar</option>
                    <option value="operario">Operário</option>
                    <option value="policial">Policial</option>
                    <option value="religioso">Religioso</option>
                    <option value="servidor_publico">Servidor Público</option>
                    <option value="teorico_da_conspiracao">Teórico da Conspiração</option>
                    <option value="trambiqueiro">Trambiqueiro</option>
                    <option value="universitario">Universitário</option>
                    <option value="vitima">Vítima</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">CLASSE:</label>
                <select class="espacinho ori" nome="classe">
                    <option value="desconhecido">Desconhecido</option>
                    <option value="combatente">Combatente</option>
                    <option value="especialista">Especialista</option>
                    <option value="ocultista">Ocultista</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">TRILHA:</label>
                <select class="espacinho tri" name="trilha">
                    <option value="nenhuma">Nenhuma</option>
                    <option value="comandante">Comandante</option>
                    <option value="guerreiro">Guerreiro</option>
                    <option value="operações_especiais">Operações Especiais</option>
                    <option value="tropa_de_choque">Tropa de Choque</option>
                    <option value="atirador_de_elite">Atirador de Elite</option>
                    <option value="infiltrador">Infiltrador</option>
                    <option value="medico_de_campo">Médico de Campo</option>
                    <option value="negociador">Negociador</option>
                    <option value="tecnico">Técnico</option>
                    <option value="conduite">Conduíte</option>
                    <option value="flagelador">Flagelador</option>
                    <option value="graduado">Graduado</option>
                    <option value="intuitivo">Intuitivo</option>
                    <option value="lamina_paranormal">Lâmina Paranormal</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">ELEMENTO:</label>
                <select class="espacinho ele" name="elemento">
                        <option value="sangue"> Nenhum </option>
                        <option value="sangue"> Sangue </option>
                        <option value="morte"> Morte </option>
                        <option value="energia"> Energia </option>
                        <option value="conhecimento"> Conhecimento</option>
                </select>
            </div>

            <div class="categoria">
                <label class="info">PATENTE:</label>
                    <select class="espacinho pat" name="patente">
                            <option value="desconhecido">Desconhecido</option>
                            <option value="recruta">Recruta</option>
                            <option value="operador">Operador</option>
                            <option value="agente_especial">Agente Especial</option>
                            <option value="oficial_de_operacoes">Oficial de Operações</option>
                            <option value="agente_de_elite">Agente de Elite</option>
                    </select>
            </div>

            <div class="categoria">
                <label class="info">XP:</label>
                <input type="number" class="espacinho pm" name="xp">
            </div>

            <div class="categoria">
                <label class="info">PM:</label>
                <input type="number" class="espacinho pm" name="pm">
            </div>
        </div>

        <div class="pericias">
            <label class="escrito direita">PERÍCIAS</label>

        
                <div class="peri">
                    <h4>ADESTRAMENTO</h4>
                    <input type="number" class="dano2">
                    <img src="img/soma.png" id="soma">
                    <input type="number" class="dano2">
                    <img src="img/igual.png" id="soma">
                    <input type="number" class="dano2">
                </div>


                <button type="button" class="add_peri">
                    <label id="textdeslo">ADICIONAR PERÍCIA</label>
                    <img src="img/mais3.png" id="mais">
                </button>
                
                <div class="deslocamento">
                    <label id="textdeslo">DESLOCAMENTO</label>
                    <input type="number" min="0" max="100" class="desl">
                </div>

        </div>

        <div class="atributos">
            <img src="img/simbolo.png" id="simb">
            <input type="number" class="atri forca">
            <input type="number" class="atri presenca">
            <input type="number" class="atri agilidade">
            <input type="number" class="atri intelecto">
            <input type="number" class="atri vigor">

            <input type="number" min="0" max="100" class="atri2 nex">
        </div>

        <div class="bloco">
            <div class="saude">
                <div class="escrito sa">SAÚDE</div>
                    <div class="conteudo">
                        <label class="saude_texto"><h1>PV</h1><h2>PONTOS DE VIDA</h2></label>
                        <input type="number" class="dano2">
                        <img src="img/barra.png" id="barra">
                        <input type="number" class="dano2">
                    </div>

                    <div class="conteudo">
                        <label class="saude_texto"><h1>SAN</h1><h2>SANIDADE</h2></label>
                        <input type="number" class="dano2">
                        <img src="img/barra.png" id="barra">
                        <input type="number" class="dano2">
                    </div>

                    <div class="conteudo">
                        <label class="saude_texto"><h1>PE</h1><h2>PONTOS DE ESFORÇO</h2></label>
                        <input type="number" class="dano2">
                        <img src="img/barra.png" id="barra">
                        <input type="number" class="dano2">
                    </div>
            </div>
            <div class="saude">
                <label class="escrito sa">DESFESAS</label>
                    <div class="conteudo2">
                        <div class="saude_texto"><h3>PASSIVA</h3></div>
                        <input type="number" class="dano3">
                    </div>

                    <div class="conteudo2">
                        <label class="saude_texto"><h3>BLOQUEIO</h3></label>
                        <input type="number" class="dano3">
                    </div>

                    <div class="conteudo2">
                        <label class="saude_texto"><h3>ESQUIVA</h3></label>
                        <input type="number" class="dano3">
                    </div>
            </div>
        </div>

        <div class="resistenciasadano">
            <label class="escrito rd">RESISTÊNCIAS A DANO</label>
                <div class="tipos">
                    <div class="valor">
                        FÍSICA
                        <input type="number" class="dano">
                    </div>
                    <div class="valor">
                        BALÍSTICA
                        <input type="number" class="dano">
                    </div>
                    <div class="valor">
                        MENTAL
                        <input type="number" class="dano">
                    </div>
                    <div class="valor">
                        SANGUE
                        <input type="number" class="dano">
                    </div>
                    <div class="valor">
                        MORTE
                        <input type="number" class="dano">
                    </div>
                    <div class="valor">
                        ENERGIA
                        <input type="number" class="dano">
                    </div>
                    <div class="valor">
                        CONHECIMENTO
                        <input type="number" class="dano">
                    </div>
                </div>
        </div>
        <div class="ataques">
                <div class="escrito rd">ATAQUES</div>
                    <div class="tipos">
                        <div class="valor_2">
                            <label>ARMA</label>
                            <select class="dano_arma">
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
                            <label>ATAQUE</label>
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
                            <label>RECARGA</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                        <div class="valor_2">
                            <label>ESPECIAL</label>
                            <input type="number" min="0" max="100" class="dano">
                        </div>
                    </div>
            </div>


        <div class="proficiencias">
            <label class="escrito">PROFICIÊNCIAS</label>
            <textarea cols="30" rows="5" class="espaco direita prof"></textarea>
        </div>

        <div class="ataques_e_defesas">
                <label class="escrito">ATAQUES E DEFESAS DETALHADOS</label>
                <textarea cols="30" rows="5" class="espaco meio at"></textarea>
        </div>

        <div class="inventario">
                <label class="escrito">INVENTÁRIO</label>
                <textarea cols="30" rows="5" class="espaco direita inv"></textarea>
        </div>

        <div class="habilidades">
                <label class="escrito">HABILIDADES</label>
                <textarea cols="30" rows="5" class="espaco esquerda hab"></textarea>
        </div>

        <div class="rituais">
                <label class="escrito">RITUAIS CONHECIDOS</label>
                <textarea cols="30" rows="5" class="espaco meio at"></textarea>
        </div>

        <div class="historico">
                <label class="escrito">HISTÓRICO</label>
                <textarea cols="30" rows="5" class="espaco direita his"></textarea>
        </div>
    </form>
</body>
</html>