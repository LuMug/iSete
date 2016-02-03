create database dispenser;
use dispenser;

create table utente(
	ut_id int primary key auto_increment,
    ut_nome varchar(30),
    ut_cognome varchar(30),
    ut_luogo varchar(30),
    ut_via varchar(30),
    ut_NAP char(4),
    ut_scuola varchar(30),
    ut_email varchar(50),
    ut_dataNascita timestamp,
    ut_credito int
);

create table capsula(
	ca_id int primary key auto_increment,
    ca_prezzoAcquisto float,
    ca_prezzoVendita float,
    ca_quantitaRimanente int
);

create table configurazione(
	co_nome varchar(30) primary key,
    co_valore varchar(30),
    co_data timestamp,
    co_descrizione varchar(100),
    ut_id int,
    foreign key(ut_id) references utente(ut_id)
);

create table prenota(
	ut_id int,
    ca_id int,
    pre_data timestamp,
    pre_quantita int,
    foreign key(ut_id) references utente(ut_id),
    foreign key(ca_id) references capsula(ca_id)
);

create table caricaCredito(
	ut_idResp int,
    ut_idNorm int ,
    cre_data timestamp,
    cre_quantita int,
    foreign key(ut_idResp) references utente(ut_id),
    foreign key(ut_idNorm) references utente(ut_id)
);