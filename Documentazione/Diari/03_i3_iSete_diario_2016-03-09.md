

# iSete | Diario di lavoro - 09.03.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy
### Canobbio, 09.03.2016

## Lavori svolti
#####Nishan

Durante questa lezione abbiamo parlato su cosa fare per il terzo sprint, ho
preso l'incarico di fare la pagina dello storico e la gestione del credito.

Prma di cominciare con il nuovo lavoro ho dovuto mettere a posto la grafica
della pagina dei utenti, in modo che i campi di inserimento vengono
visualizzati solamente se fossero neccessari.

All'inizio volevo usare tipo un popup e ho provato a inserire all'interno il
form ma non sono riuscito a far funzionare.
Dopo ho usato Modal, l'ho usato grazie a Boostrap e ho dovuto fare alcune prove
per farlo funzionare per il mio caso. Poi ho modificato lo stile dei campi.

Parlando con Ettore, mi sono accorto che mi sono dimenticato di aggiungere il
campo email cosicchè quando elimino chiedo solamente la mail.
Per controllare lo stato della mail uso un controllo che mi ha dato Ettore.

Poi ho cominciato ha fare la pagina che mostra lo storico. Faccio visualizzare
che capsule, data dell'acquisto e la quantità.
Ho fatto il disegno in paint per mettere all'interno della documentazione e
l'ho inserito all'interno.
Nel tempo che mi avanzava ho pensato a come potevo fare per gestire il credito
e ho messo giù uno schizzo.

Infine ho fatto il diario


#####Ettore

In questa giornata, mi sono concentrato particolarmente sul migliorare il
sito web:
 - Ho risistemato la pagina del profilo in modo che vengano visualizzate solo
   le informazioni modificabili

 - Ho inserito alcune icone di aiuto (per abbellire il sito, più che tutto)

 - Ho fatto in modo che il responsabile possa accedere alle pagine aggiuntive,
   aggiungendo   un menu a tendina, identificato con un icona simile alle
   impostazioni (una rotellina).
   Questo menu è presente anche per gli utenti standard, ma consente di vedere
   univocamente il proprio storico.

 - Come scelto precedentemente, ho fatto in modo che il primo utente registrato
   fosse ritenuto automaticamente come
   responsabile (eventualmente, si può fare un campo nella tabella di
   configurazione per poter fare multipli responsabili).

 - Ho sistemato una piccola mancanza al database (quale l'effetto a cascata
   nell'eliminazione di un utente)


#####Andrea

Durante le prime ore della mattina, abbiamo discusso sullo sprint 3 e su ciò
che volevamo fare con il raspberry.
Dopodiché ho iniziato a fare il consuntivo dei primi due sprint e ho aggiunto
il terzo sprint al gannt.
In seguito, ho aggiornato la parte di progettazione nella documentazione e
ho fatto l'abstract.


#####Raffaele

Nel corso della mattinata mi sono occupato di ultimare la pagina delle
statistiche poichè facevo visualizzare solo i primi 3 risultati.
Provando ad implementare la nuova soluzione ho riscontrato un problema:
php mi rilevava un carattere nascosto che dava l'errore, dopo aver capito il
problema ho riscritto il codice in un nuovo file e tutto è tornato a funzionare.
Ho inoltre migliorato la parte grafica della pagina della gestione delle
configurazioni facendo in modo che quando viene cliccato un bottone
appaiono tramite una specie di popup i campi da inserire.
Successivamente, parlando con il resto del gruppo, ho deciso di aggiungere,
oltre alle funzioni aggiungi e rimuovi, la funzione modifica.
Ho deciso, nel corso del pomeriggio, di cambiare il metodo di disegnare
graifici. Fino ad ora ho utilizzato la libreria jpgraph che lavora con php,
mentre mi è stato consigliato da allievi di quarta di usare invece Google
Chart API. Questa API permette di utilizzare i grafici dinamicamente e non
tramite un immagine come jpgraph. Inoltre questa API genera in automatico una
sorta di legenda che aiuta a leggere meglio il grafico e quando si passa
con il cursore del mouse sopra il grafico vengono indicati il valore e la
percentuale di quella singola sezione.
[Grafico](https://github.com/LuMug/iSete/tree/master/Documentazione/img/grafico.png)


#####Serhiy

Come detto da Nishan, oggi abbiamo assegnato alcuni nuovi compiti a ciascuno di noi. Io mi sono preso l'incarico di fare la progettazione per il Raspberry, su come verra utilizzato e su cosa bisogna ancora implementare.
Ho terminato la progettazione ( la quale è basica perché non ho ancora avuto modo di poter utilizzare il microcomputer ) nella quale ho già rappresentato la soluzione al problema del collegamento tra la pagina web e la classe di Java che permette l'utilizzo dei motori che fanno uscire la capsula.

##  Problemi riscontrati e soluzioni adottate

#####Ettore
Durante l'ultima operazione elencata (riguardante il db), ho riscontrato dei
uno script di automazione. Per oviare a questo problema, abbiamo scelto di
inserire alcuni dati di prova a mano.

##  Punto della situazione rispetto alla pianificazione

#####Serhiy

Progettazione Raspberry Basica terminata.

## Programma di massima per la prossima giornata di lavoro

#####Andrea

Riuscire a fare la memorizzazione offline e la connessione ethernet con
il raspberry


#####Raffaele
Implementare i grafici con la nuova API e pagina gestione capsule.


#####Serhiy

Mettere in comunicazione la pagina web e la classe di Java per gestire i motori direttamente dal web.
