# iSete | Diario di lavoro - 24.02.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy

## Lavori svolti
Oggi abbiamo ufficialmente iniziato lo sprint 2.

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
Inizialmente ho modificato il diagramma E-R del database aggiungendo alla tabella utente il campo ut_credito e ut_password.
Successivamente ho iniziato a informarmi su bootstrap e su la connessione tra php e mysql per la realizzazione del sito.
Sono riuscito a comunicare con il database tramite il file connection.php creato da Ettore.
##  Problemi riscontrati e soluzioni adottate
Nishan:


##  Punto della situazione rispetto alla pianificazione


## Programma di massima per la prossima giornata di lavoro
