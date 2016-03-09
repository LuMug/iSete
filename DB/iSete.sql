create database iSete;
use iSete;

create table utente(
	ut_id int primary key auto_increment,
    ut_nome varchar(30),
    ut_cognome varchar(30),
    ut_password char(32),
    ut_email varchar(50) unique,
    ut_credito int
);

create table capsula(
	ca_tipo varchar(30) primary key,
    ca_prezzoAcquisto float,
    ca_prezzoVendita float,
    ca_quantitaRimanente int
);

create table configurazione(
	co_nome varchar(30) primary key,
    co_valore varchar(30),
    co_descrizione varchar(100)
);

create table prende(
	ut_id int,
    ca_tipo varchar(30),
    pre_data timestamp default now(),
    pre_quantita int,
	primary key(ut_id, ca_tipo, pre_data),
    foreign key(ut_id)
		references utente(ut_id)
			on delete cascade
            on update cascade,
    foreign key(ca_tipo)
		references capsula(ca_tipo)
			on delete cascade
            on update cascade
);

create table caricaCredito(
	ut_idResp int,
    ut_idNorm int ,
    cre_data timestamp default now(),
    cre_importo int,
    foreign key(ut_idResp)
		references utente(ut_id)
			on delete cascade
            on update cascade,
    foreign key(ut_idNorm)
		references utente(ut_id)
			on delete cascade
            on update cascade,
	primary key(ut_idNorm, ut_idResp,cre_data)
);