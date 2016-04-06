

# iSete | Diario di lavoro - 06.04.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy
### Canobbio, 06.04.2016

## Lavori svolti
#####Ettore
Durante questa gironata, ho rifinito il "re-design" del sito (fatto tutto su una pagina unica,
con sezioni differenti) e di fare in modo che si riuscisse a far partire una classe java da php.
Quest'ultima operazione,  ha richiesto buona parte della giornata a me e Andrea, purtroppo, per il fatto stesso
che non riuscivamo a comprendere il corretto utilizzo del metodo exec(). Dopodiché, abbiamo implementato
il pulsante delle richieste, in modo che faccia le richieste al raspberry (con java, appunto).
#####Andrea
Durante la prima ora della giornata o modificato il codice del movimento del Servo motore in modo tale che, a dipendenza del parametro passato, il servo motore faceva x numeri di giri. Dopodiché ho cercato un modo per far partire il codice java dalla pagina php. Per fare ciò ho trovato insieme a Ettore il comando exec(). Questo comando, a noi sconosciuto, ci ha procurato un po' di problemi che, dopo qualche ore di ricerca, siamo riusciti a risolvere. Dopodiché abbiamo unito il codice exec() al bottone della comanda. Infine ho incominciato a pensare a come rendere modulare programma in java. Insieme ha Ettore siamo arrivati all'idea di aggiungere un secondo argomento alla classe che equivale al tipo di capsula e creare in seguito 2 array, 1 con all'interno i PIN del Raspberry, l'altro che mi prenda tutti i tipi di capsule esistenti nel DB così che quando scegliamo il primo tipo di capsula, accediamo anche al primo PIN dell'array di pin che fa funzionare il primo servo motore e così via.
#####Raffaele

Insieme a Nishan ho lavorato all'implementazione della struttura hardware del
dispenser.
Abbiamo pensato di usare del legno per realizzare la base attaccata alla
parete e i separatori che dividono le colonne di capsule.
Invece per tenere ferme le capsule abbiamo pensato di usare dei pezzi in
cartone per non complicarci troppo il lavoro.
Nella tarda mattinata, dopo aver tagliato il cartone e il legno in aula
di modellistica con l'aiuto del capolaboratorio dei disegnatori Cesare
Casale, abbiamo incollato alla base i primi due separatori.
In seguito ho lavorato alla documentazione aggiungendo la parte di implementazione dell'applicazione android.

#####Nishan

Come ha scritto Raffaele nella sua parte, abbiamo tagliato tutti i pezzi e per fare le canaline
abbiamo utilizzato cartone e incollato il tutto con la colla calda
il Risultato:

![Risultato](../img/struttura_fisica1.png)

![Risultato](../img/struttura_fisica2.png)

#####Serhiy


##  Problemi riscontrati e soluzioni adottate
#####Ettore
Come precedentemente detto, abbiamo avuto particolari problemi con la funzione di php exec().
Non ci permetteva di eseguire una classe java se non come utente root. Sapendo che, lavorando
in ambiente linux (similar, almeno) fosse presente il comando shell sudo (che permette l'esecuzione
di un determinato comando come, appunto, utente amministratore), ma solo anch'esso ci dava un errore
di mancata password. Cercando su internet, abbiamo trovato la corretta soluzione per far si che il comando funzioni
adeguatamente (vedere in Sito/phps/index.php).
#####Andrea
Come precedentemente detto, abbiamo avuto particolari problemi con la funzione di php exec().
Non ci permetteva di eseguire una classe java se non come utente root. Sapendo che, lavorando
in ambiente linux (similar, almeno) fosse presente il comando shell sudo (che permette l'esecuzione
di un determinato comando come, appunto, utente amministratore), ma solo anch'esso ci dava un errore
di mancata password. Cercando su internet, abbiamo trovato la corretta soluzione per far si che il comando funzioni
adeguatamente (vedere in Sito/phps/index.php).
#####Serhiy

#####Raffaele

##  Punto della situazione rispetto alla pianificazione
#####Raffaele
In linea con il programma

## Programma di massima per la prossima giornata di lavoro
#####Raffaele & Nishan
Implementazione espulsione capsule a ferro di cavallo

#####Ettore
- Modulazione programma richieste
- 
#####Andrea
- Incrementazione dello script in java in modo da rendere modulare la comanda di capsule.
