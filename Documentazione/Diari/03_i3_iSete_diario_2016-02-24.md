# iSete | Diario di lavoro - 24.02.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy

## Lavori svolti
Oggi abbiamo ufficialmente iniziato lo sprint 2.

Ettore:
Durante questa mattinata, mi sono dedicato alle sessioni del sito. Avendo avuto dei contrattempi, ho chiesto aiuto a dei docenti.
Nel seguito della mattina, sono riuscito a risolvere buona parte dei problemi, ma anche verso pomeriggio ve ne erano di nuovi (quali
mal fuinzionamento nella creazione del oggetto DB e della relativa apertura alla comunicazione).
Ho anche iniziato a creare la pagina dedicata all'ordinazione degli utenti, oltre a perfezionare il login e la registrazione.
Per ora il sito è composto dalle sezioni: login (Io), registrazione (Io), richieste (Io), tabella di configurazione (Raffaele), pagina di statistiche(Raffaele) e tabella utenti (Nishan).

Nishan
Oggi è iniziato il secondo sprint e mi è stato assegnato il compito di creare una pagina che gestisce gli utenti.
In questa pagine deve esserci presente una tabella che mostra le informazioni dell'utente e che deve essere possibile inserire e eliminare utenti direttamente dal sito.
Ci siamo collegati al server in lan e mi sono messo IP fisso 192.168.1.99.
Ettore mi ha detto di utilizzare Bootstrap e cosi sono andato a cercare dei esempi perche non l'ho mai utilizzato prima. Visto che è una delle prime volte che faccio un collegamento nel database e mettere le informazioni nel sito, ho preso esempi in giro per il collegamento e sono riuscito relativamente in poco tempo. Poi ho cercato di fare una select di esempio e di far stampare qualcosa ma non sono riuscito. Poi ho dovuto cancellare tutto perchè la mia connessione al database non andava bene perchè ogni volta doveva creare un istanza e quindi rallentava. Alla fine Ettore
aveva fatto un file con tutti i metodi che ci servono. L'ho inserito nel mio file php con un include però mi da un errore che non sono riuscito a risolvere.

~~~PHP
Fatal error: Call-time pass-by-reference has been removed; If you would like to pass argument by reference, modify the declaration of sess(). in C:\Users\Nishan\Desktop\connection.php on line 65.
~~~

Visto che non sono riuscito a risolvere, ho installato filezilla sul mio pc e ho caricato il mio file ma mi da ancora il problema:
~~~PHP
Fatal error: Call to a member function start() on a non-object in C:\www\phps\Utenti\index.php on line 3
~~~

Dopo un po anche Raffaele ha avuto lo stesso problema e abbiamo capito che c'era un errore sul file connection.php.
Ettore lo mettesse a posto, ora carica correttamente.

Raffaele:
Inizialmente ho modificato il diagramma E-R del database aggiungendo alla tabella utente il campo ut_credito e ut_password e ripopolando il database.
Successivamente ho iniziato a informarmi su bootstrap e su la connessione tra php e mysql per la realizzazione del sito.
Sono riuscito a comunicare al database del server, con l'ip fisso 192.168.1.100, tramite la classe creata da Ettore.

Serhiy:
Durante la giornata mi sono occupato della connessione tramite lan all'arduino, scoprendo così che il metodo migliore per gestire il motore è usare il circuito come server, così da mandare il segnale dal computer tramite un indirizzo ip e un token speciale, facendo sì che non sia controllabile da tutti ma solo dal nostro shuttle. Mentre per la comunicazione dei dati ho pensato alla soluzione di adattare l'arduino così da renderlo anche client, in modo che possa comunicare senza problemi al nostro server i dati degli acquisti.

Andrea:
Durante la giornata mi sono occupato della memorizzazione degli script su una scheda SD all'interno dell'Arduino. Per fare ciò ho cercato un modo per riuscire a creare file sulla scheda SD e scriverci dentro. Purtroppo in seguito ho scoperto che la lettura della scheda SD e la connessione tramite lan condivide lo SPI bus quindi non possono funzionare in contemporanea. Durante il pomeriggio infatti ho cercato un modo per risolvere questo problema ma purtroppo senza successo.


##  Problemi riscontrati e soluzioni adottate
Ettore: I problemi maggiormente riscontrati erano relativi alla connessione con il database. Modificando il riferimento al database (quindi usando il riferimento
di memoria della variabile del databaase) sono riuscito a risolvere questo problema. Verso la fine della giornata c'è stato un breve periodo nel quale personalmente
non riuscivo a coleggarmi al sito, ma è bastato ricaricare il file connection.php per risolvere il problema.

Andrea: Il problema riscontrato era far comunicare scheda SD e connessione lan in contemporanea. Non sono state trovate soluzioni.


##  Punto della situazione rispetto alla pianificazione


## Programma di massima per la prossima giornata di lavoro
Ettore: Nella prossima lezione, inizieremo a far comunicare il sito con l'arduino. Quest'ultimo lavoro è stato svolto da Andrea e Serhiy.

Serhiy:
Per la prossima volta ho intenzione di finalizzare con Ettore e Andrea il collegamento in LAN tra il server e l'Arduino, aggiungendo anche i token per la sicurezza.

Raffaele: Nel corso della prossima lezione mi occuperò di concludere la pagina di statistiche e quella di configurazione.

Andrea: Trovare un modo per far comunicare la scheda SD e la connessione lan
