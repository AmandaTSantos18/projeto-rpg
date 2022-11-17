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
                            <option value="1">Curto</option>
                            <option value="2">Médio</option>
                            <option value="3">Longo</option>
                            <option value="4">Extremo</option>
                        </select>                    
                    </div>
                    <div class="um">
                        <label class="info">MUNIÇÃO</label>
                        <select class="selecao" name="municao">
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