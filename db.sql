create table users(
    idusers int AUTO_INCREMENT PRIMARY key,
    usuario varchar(200),
    senha varchar(200),
    tipo varchar(30),
);
create table atendimentos(
	idatendimento int AUTO_INCREMENT primary key,
    iduser int,
    assunto varchar(100),
    status boolean,
    constraint atendimentos_fkusers foreign key (idusers) references users(idusers)
);
create table chatmomentaneo(
    mensagem varchar(4000),
    idusers int,
    idatendimento int,
    constraint chatmomentaneo_fkatendimento foreign key(idatendimento) references atendimentos(idatendimento),
  	constraint atendimentos_fkusers foreign key (idusers) references users(idusers)  
);