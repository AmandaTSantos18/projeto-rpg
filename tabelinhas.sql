drop database if exists app;
create database app;
use app;

create table atual
(
    id_atual int (3) auto_increment primary key,
    vida_atual int (3) NOT NULL DEFAULT 0,
    sanidade_atual int (3) NOT NULL DEFAULT 0,
    pontos_de_esforço_atual int (3) NOT NULL DEFAULT 0,
    municao_atual int (3) NOT NULL DEFAULT 0
);

create table classe(
	id_classe int (3) auto_increment primary key,
	nome_classe varchar (40)
);

insert into classe(nome_classe) values
	("desconhecido"),
    ("combatente"),
    ("especialista"),
    ("ocultista");
    
create table trilha(
	id_trilha int (3) auto_increment primary key,
    nome_trilha varchar (40),
    fk_classe int(3),
	CONSTRAINT fk_trilha_classe FOREIGN KEY (fk_classe) REFERENCES classe (id_classe)
);

 insert into trilha(nome_trilha, fk_classe)values
    ("aniquilador", 2),
    ("comandante de campo", 2),
    ("guerreiro", 2),
    ("operações especiais", 2),
    ("tropa de choque", 2),
    ("atirador de elite", 3),
    ("infiltrador", 3),
    ("médico de campo", 3),
    ("negociador", 3),
    ("técnico", 3),
    ("conduíte", 4),
    ("flagelador", 4),
    ("graduado", 4),
    ("intuitivo", 4),
    ("lâmina paranormal", 4);

create table elemento(
	id_elemento int (3) auto_increment primary key,
    nome_elemento varchar (40)
);

insert into elemento(nome_elemento) values
	("Nenhum"),
    ("Sangue"),
    ("Morte"),
    ("Energia"),
    ("Conhecimento");

create table patente(
	id_patente int (3) auto_increment primary key,
    nome_patente varchar (40)
);

insert into patente(nome_patente) values
    ("recruta"),
    ("operador"),
    ("agente especial"),
    ("oficial de operações"),
    ("agente de elite");

create table origem(
	id_origem int (3) auto_increment primary key,
    nome_origem varchar (40)
);

insert into origem(nome_origem) values
	("desconhecido"),
	("acadêmico"),
	("agente de saúde"),
	("amnésico"),
	("artista"), 
	("atleta"),
	("chef"),
	("criminoso"),
	("cultista arrependido"),
	("desgarrado"),
	("engenheiro"),
	("executivo"),
	("investigador"),
	("lutador"),
	("magnata"),
	("mercenário"),
	("militar"),
	("operário"),
	("policial"),
	("religioso"),
	("servidor público"),
	("teórico da conspiração"),
	("trambiqueiro"),
	("universitário"),
	("vítima");

create table tipo_texto(
	id_tipo_texto int (3) auto_increment primary key,
    nome_tipo varchar (40)
);

insert into tipo_texto(nome_tipo) values
	("inventário"),
    ("proficiências"),
    ("ataques e defesas detalhados"),
    ("rituais conhecidos"),
    ("habilidade"),
    ("histórico");
    
create table textos(
	id_textos int (3) auto_increment primary key,
    tipo_texto varchar (40),
    escrito longtext,
	fk_tipo int (3),
    CONSTRAINT fk_textos_tipo FOREIGN KEY (fk_tipo) REFERENCES tipo_texto (id_tipo_texto)
);

create table categorias(
	id_categorias int (3) auto_increment primary key,
    nome_categoria varchar (3)
);

insert into categorias(nome_categoria) values
    ("0"),
	("1"),
    ("2"),
    ("3"),
    ("4");

create table municao(
	id_municao int (3) auto_increment primary key,
    nome_municao varchar (20),
    espaco varchar (3),
    fk_categoria int (3),
    CONSTRAINT fk_municao_categoria FOREIGN KEY (fk_categoria) REFERENCES categorias (id_categorias)
);

insert into municao(nome_municao, espaco, fk_categoria) values
	("Flechas", "1", 1),
    ("Balas leves", "1", 1),
    ("Balas pesadas", "1", 2),
    ("Cartuchos", "1", 2),
    ("Foguete", "1", 2),
    ("Combustível", "1", 2);

create table tipo_equip(
	id_tipo_equip int (3) auto_increment primary key,
    nome_tipo varchar (15)
);

insert into tipo_equip(nome_tipo) values
	("Corte"),
    ("Impacto"),
    ("Perfuração"),
    ("Balístico"),
    ("Fogo");

create table alcance(
	id_alcance int (3) auto_increment primary key,
    distancia varchar (20)
);

insert into alcance(distancia) values
	("Curto"),
    ("Médio"),
    ("Longo"),
    ("Extremo");

create table equipamentos(
	id_equipamentos int (3) null auto_increment primary key,
    nome_equipamento varchar (40),
    dano varchar (10) NOT NULL DEFAULT 0,
    critico varchar (10) NOT NULL DEFAULT 0,
    espaco int (3) NOT NULL DEFAULT 0,
    fk_tipo int (3) null,
	fk_categoria int (3) null,
	fk_alcance int (3) null,
	fk_municao int (3) null,
    CONSTRAINT fk_equipamentos_tipo FOREIGN KEY (fk_tipo) REFERENCES tipo_equip (id_tipo_equip),
	CONSTRAINT fk_equipamentos_categoria FOREIGN KEY (fk_categoria) REFERENCES categorias (id_categorias),
    CONSTRAINT fk_equipamentos_alcance FOREIGN KEY (fk_alcance) REFERENCES alcance (id_alcance),
	CONSTRAINT fk_equipamentos_municao FOREIGN KEY (fk_municao) REFERENCES municao (id_municao)
);

insert into equipamentos(nome_equipamento, fk_categoria, dano, critico, fk_alcance, fk_tipo, espaco, fk_municao) values
	("Faca", 1, "1d4", "19", 1, 1, "1", null),
	("Martelo", 1, "1d6", "x2", null, 2, "1", null),
	("Punhal", 1, "1d4", "x3", null, 3, "1", null),
	("Bastão", 1, "1d6/1d8", "x2", null, 2, "1", null),
	("Machete", 1, "1d6", "19", null, 1, "1", null),
	("Lança", 1, "1d6", "x2", 1, 3, "1", null),
    ("Cajado", 1, "1d6", "x2", null, 2, "2", null),
    ("Arco", 1, "1d6", "x3", 2, 3, "2", 1),
    ("Besta", 1, "1d8", "19", 2, 3, "2", 1),
    ("Pistola", 2, "1d12", "18", 1, 4, "1", 2),
    ("Revólver", 2, "2d6", "19/x3", 1, 4, "1", 2),
    ("Fuzil de caça", 2, "2d8", "19/x3", 1, 4, "1", 3),
    ("Machadinha", 1, "1d6", "x3", 1, 1, "1", null),
    ("Nunchaku", 1, "1d8", "x3", null, 2, "1", null),
    ("Corrente", 1, "1d8", "x2", null, 2, "1", null),
    ("Espada", 2, "1d8/1d10", "19", null, 1, "1", null),
    ("Florete", 2, "1d6", "18", null, 1, "1", null),
    ("Machado", 2, "1d8", "x3", null, 1, "1", null),
	("Marreta", 2, "2d4", "x2", null, 2, "1", null),
    ("Acha", 2, "1d12", "x3", null, 1, "2", null),
    ("Gadanho", 2, "2d4", "x4", null, 1, "2", null),
    ("Katana", 2, "1d10", "19", null, 1, "2", null),
    ("Montante", 2, "3d6", "19", null, 1, "2", null),
    ("Moto-serra", 2, "3d6", "x2", null, 1, "2", null),
    ("Arco composto", 2, "1d10", "x3", 2, 3, "2", 1),
    ("Balestra", 2, "1d12", "19", 2, 3, "2", 1),
    ("Submetralhadora", 2, "2d6", "19/x3", 1, 4, "1", 2),
    ("Espingarda", 2, "4d6", "x3", 1, 4, "2", 4),
    ("Fuzil de assalto", 3, "2d10", "19/x3", 2, 4, "2", 3),
    ("Fuzil de precisão", 4, "2d10", "19/x3", 3, 4, "2", 3),
    ("Bazuca", 4, "10d8", "x2", 2, 2, "2", 5),
    ("Lança-chama", 4, "6d6", "x2", 1, 5, "2", 6),
    ("Metralhadora", 3, "2d12", "19/x3", 2, 4, "2", 3);

create table usuario(
	id_usuario int (3) auto_increment primary key,
    is_adm bit (1) NOT NULL DEFAULT 0,
    nome varchar (50) NOT NULL,
    email varchar (50) NOT NULL,
    senha varchar (30) NOT NULL
);

create table personagem(
	id_personagem int (3) auto_increment primary key,
    nome varchar (50),
    jogador varchar (50),
    is_padrao boolean NOT NULL DEFAULT 0,
    pm int(5) NOT NULL DEFAULT 0,
    xp int(5) NOT NULL DEFAULT 0,
    fk_classe int(3),
    fk_trilha int(3),
    fk_elemento int(3),
    fk_patente int(3),
    fk_origem int(3),
    fk_equipamentos int (3),
    fk_usuario int (3),
	CONSTRAINT fk_personagem_classe FOREIGN KEY (fk_classe) REFERENCES classe (id_classe),
    CONSTRAINT fk_personagem_trilha FOREIGN KEY (fk_trilha) REFERENCES trilha (id_trilha),
    CONSTRAINT fk_personagem_elemento FOREIGN KEY (fk_elemento) REFERENCES elemento (id_elemento),
    CONSTRAINT fk_personagem_patente FOREIGN KEY (fk_patente) REFERENCES patente (id_patente),
    CONSTRAINT fk_personagem_origem FOREIGN KEY (fk_origem) REFERENCES origem (id_origem),
    CONSTRAINT fk_personagem_equipamentos FOREIGN KEY (fk_equipamentos) REFERENCES equipamentos (id_equipamentos),
    CONSTRAINT fk_personagem_usuario FOREIGN KEY (fk_usuario) REFERENCES usuario (id_usuario) 
);

create table atributos(
	id_atributos int (3) auto_increment primary key,
	agilidade int (3) NOT NULL DEFAULT 0,
    intelecto int (3) NOT NULL DEFAULT 0,
    vigor int (3) NOT NULL DEFAULT 0,
    presença int (3) NOT NULL DEFAULT 0,
    forca int (3) NOT NULL DEFAULT 0,
    fk_personagem int(3),
    CONSTRAINT fk_atributos_personagem FOREIGN KEY (fk_personagem) REFERENCES personagem (id_personagem)
);

create table pericias(
	id_pericias int (3) auto_increment primary key,
    nome_pericia varchar (40) DEFAULT NULL,
    valor int (2) NOT NULL DEFAULT 0,
	fk_personagem int(3),
    CONSTRAINT fk_pericias_personagem FOREIGN KEY (fk_personagem) REFERENCES personagem (id_personagem)
);

insert into pericias(nome_pericia) values
	("adestramento"),
	("atletismo"),
	("atuação"),
	("atualidades"),
	("ciência"),
	("condução"),
	("diplomacia"),
	("enganação"),
	("fortitude"),
	("furtividade"),
	("intimidação"),
	("intuicao"),
	("investigação"),
	("jogatina"),
	("luta"),
	("medicina"),
	("ocultismo"),
	("percepção"),
	("pilotagem"),
	("pontaria"),
	("prestidigitação"),
	("profissão"),
	("reflexos"),
	("religião"),
	("tática"),
	("tecnologia"),
	("vontade");

create table defesas(
	id_defesas int (3) auto_increment primary key,
	passiva int (3) NOT NULL DEFAULT 0,
    bloqueio int (3) NOT NULL DEFAULT 0,
    esquiva int (3) NOT NULL DEFAULT 0,
	fk_personagem int(3),
    CONSTRAINT fk_defesas_personagem FOREIGN KEY (fk_personagem) REFERENCES personagem (id_personagem)
);

create table saude(
	id_saude int (3) auto_increment primary key,
	vida int (3) NOT NULL DEFAULT 0,
    sanidade int (3) NOT NULL DEFAULT 0,
    esforco int (3) NOT NULL DEFAULT 0,
	fk_personagem int(3),
    CONSTRAINT fk_saude_personagem FOREIGN KEY (fk_personagem) REFERENCES personagem (id_personagem)
);

create table resistencias_a_dano(
	id_resistencias int (3) auto_increment primary key,
	física int (3) NOT NULL DEFAULT 0,
	balística int (3) NOT NULL DEFAULT 0,
	mental int (3) NOT NULL DEFAULT 0,
	sangue int (3) NOT NULL DEFAULT 0,
	morte int (3) NOT NULL DEFAULT 0,
	energia int (3) NOT NULL DEFAULT 0,
	conhecimento int (3) NOT NULL DEFAULT 0,
	fk_personagem int(3),
    CONSTRAINT fk_resistencias_personagem FOREIGN KEY (fk_personagem) REFERENCES personagem (id_personagem)
);