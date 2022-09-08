drop database if exists app;
create database app;
use app;


create table atributos(
	id_atributos int (3) auto_increment primary key,
    agilidade int(2),
    vigor int(2),
    presenca int(2),
    inteligencia int(2),
    forca int(2)
);

create table pericias(
	id_pericias int (3) auto_increment primary key,
    adestramento int (2),
    atletismo  int (2),
    atuacao  int (2),
    atualidades  int (2),
    ciencia  int (2),
    conducao  int (2),
    diplomacia  int (2),
    enganacao  int (2),
    fortitude  int (2),
    intimidacao  int (2),
    intuicao  int (2),
    investigacao  int (2),
    jogatina  int (2),
    luta  int (2),
    medicina  int (2),
    ocultismo  int (2),
    percepcao  int (2),
    pilotagem  int (2),
    pontaria  int (2),
    prestidigitacao  int (2),
    profissao  int (2),
    reflexos  int (2),
    religiao  int (2),
    tatica  int (2),
    tecnologia  int (2),
    vontade  int (2)
);

create table defesas(
	id_defesas int (3) auto_increment primary key,
    passiva int (2),
    bloqueio int (2),
    esquiva int (2)
);

create table saude(
	id_saude int (3) auto_increment primary key,
    vida int (2),
    sanidade int (2),
    esforco int (2)
);

create table resistencias_a_dano(
	id_resistencias int (3) auto_increment primary key,
    fisica int (2),
    balistica int (2),
    mental int (2),
    sangue int (2),
    morte int (2),
    energia int (2),
    conhecimento int (2)
);

create table ataques(
	id_ataques int (3) auto_increment primary key,
    arma varchar (15),
    tipo varchar (15),
    ataque varchar (15),
    alcance varchar (15),
    dano varchar (15),
    critico varchar (15),
    recarga varchar (15),
    especial varchar (15)
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

 insert into trilha(nome_trilha)values
	();

create table elemento(
	id_elemento int (3) auto_increment primary key,
    nome_elemento varchar (40)
);

create table patente(
	id_patente int (3) auto_increment primary key,
    nome_patente varchar (40)
);

create table origem(
	id_origem int (3) auto_increment primary key,
    nome_origem varchar (40)
);

create table personagem(
	id_personagem int (3) auto_increment primary key,
    nome varchar (50),
    idade int (3),
    pm int(5),
    xp int(5),
    fk_atributos int (3),
    fk_pericias int (3),
    fk_defesas int (3),
    fk_saude int(3),
    fk_resistencias int(3),
    fk_ataques int(3),
    fk_classe int(3),
    fk_trilha int(3),
    fk_elemento int(3),
    fk_patente int(3),
    fk_origem int(3),
    CONSTRAINT fk_personagem_atributos FOREIGN KEY (fk_atributos) REFERENCES atributos (id_atributos),
    CONSTRAINT fk_personagem_pericias FOREIGN KEY (fk_pericias) REFERENCES pericias (id_pericias),
	CONSTRAINT fk_personagem_defesas FOREIGN KEY (fk_defesas) REFERENCES defesas (id_defesas),
    CONSTRAINT fk_personagem_saude FOREIGN KEY (fk_saude) REFERENCES saude (id_saude),
    CONSTRAINT fk_personagem_resistencias FOREIGN KEY (fk_resistencias) REFERENCES resistencias_a_dano (id_resistencias),
    CONSTRAINT fk_personagem_ataques FOREIGN KEY (fk_ataques) REFERENCES ataques (id_ataques),
	CONSTRAINT fk_personagem_classe FOREIGN KEY (fk_classe) REFERENCES classe (id_classe),
    CONSTRAINT fk_personagem_trilha FOREIGN KEY (fk_trilha) REFERENCES trilha (id_trilha),
    CONSTRAINT fk_personagem_elemento FOREIGN KEY (fk_elemento) REFERENCES elemento (id_elemento),
    CONSTRAINT fk_personagem_patente FOREIGN KEY (fk_patente) REFERENCES patente (id_patente),
    CONSTRAINT fk_personagem_origem FOREIGN KEY (fk_origem) REFERENCES origem (id_origem)
);

create table usuario(
	id_usuario int (3) auto_increment primary key,
    is_adm boolean,
    nome varchar (50),
    email varchar (50),
    senha varchar (30),
    fk_personagem int (3),
    CONSTRAINT fk_usuario_personagem FOREIGN KEY (fk_personagem) REFERENCES personagem (id_personagem) 
);