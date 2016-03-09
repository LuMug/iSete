

# iSete | Diario di lavoro - 02.03.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy
### Canobbio, 02.03.2016

## Lavori svolti
Nishan
Oggi ho finito di fare la progettazione della pagina web e ho cominciato a stampare tutti i dati della tabella utente in una tabella sulla pagina web.

All'inizio ho avuto qualche problema e con l'aiuto di Ettore e Scarcella sono riuscito a risolvere.

Poi mi sono concentrato a fare due bottoni: uno che aggiunge utenti e l'altro che toglie utenti.
Mi sono dimenticato di mettere anche il campo per la password quindi parlando con ettore, prendo la pw in chiaro e la cifro con md5, anche i campi per la password hanno i controlli.

Infine ho fatto in modo che quando si schiaccia il bottone ti faccia vedere che ha aggiunto e che ritorni alla pagina.
Poi ho fatto i controlli in modo che vengono inseriti dati corretti.

Raffaele
Ho iniziato facendo una progettazione della pagina di configurazione del responsabile.
Il sito è strutturato con una tabella centrale contenente i record della tabella conf e si ridimensiona in base alla quantità di record presenti.
Per aggiungere o rimuovere record ho preso come esempio le due classi fatte da Nishan adattandole alla mia situazione.
Dopo aver finito anche l'implementazione della pagina di configurazione mi sono occupato della progettazione della pagina di statistiche per il responsabile.
Successivamente mi sono informato su quale libreria di php usare per fare i grafici e ho trovato la libreria JpGraph: http://jpgraph.net/
Nel corso del pomeriggio ho iniziato la parte di implementazione della pagina inserendo qualche grafico.

Ettore
In questa giornata, ho creato la pagina del'profilo per l'utente, in modo che possa modificare eventuali informazioni personali.
Ho fatto in modo che solo alcune di queste informazioni siano effettivamente modificabili (quindi non ho permesso la modifica della email, dando per scontato che
essa non debba mai essere sostituita, e non ho dato il permesso diretto di cambiare la password, ma ho fatto in modo che venga effettuato in due passaggi).
Inoltre, abbiamo iniziato a stabilire come identificare un utente che sia responsabile: supponendo che esso sia un individuo singolo, quindi che non ve ne siano altri,
abbiamo deciso che l'utente con l'id a 1 sarà il responsabile. In qualsiasi caso, non risulta un problema riadattare questa ideologia a più individui (per es. aggiungendo una colonna
tipo in utente), ma essendo che in questo momento non siamo ancora completamente certi di quale scelta verrà effettuata, alla fine, abbiamo deciso di semplificarci il lavoro scegliendo, appunto,
una sola persona come responsabile.
Per giunta, in questa giornata ho terminato correttamente l'identificazione della sezione e il login.

Andrea
Durante le prime ore della mattinata ho continuato a cercare di trovare un modo per far funzionare la scheda SD e il cavo Ethernet.
Sono riuscito a far leggere il contenuto di un file presente sulla Scheda e farlo stampare su una pagina web, ma non sono riuscito a capire per quale motivo quando l'arduino è offline non riesco a scrivere o creare un file e a stampare il contenuto di un file sulla porta seriale.
Durante le ultime ore della mattinata e durante il pomeriggio ho cercato un modo per notificare l'eusarimento delle capsule, insieme a Ettore siamo riusciti a trovare un modo per far si che esso accada. In pratica facciamo ricaricare una pagina web, che si troverà nella pagina del Responsabile, dove ogni 10 secondi verrà ricaricata e stamperà all'interno della pagina tutte le capsule, con la sua relativa quantità rimanente, con meno di 5 unità.

##  Problemi riscontrati e soluzioni adottate
Andrea
Non sono riuscito a capire per quale motivo l'arduino non riuscisse a scrivere o a leggere sulla scheda SD quando il client non è connesso. Non ho trovato soluzioni poiché non avevo altro tempo a disposizione a starci dietro.


##  Punto della situazione rispetto alla pianificazione
Andrea
Non sono riuscito a far funzionare l'Arduino come doveva, quindi non abbiamo la memorizzazione OFFLINE.



## Programma di massima per la prossima giornata di lavoro
Andrea
Trovare un modo per la memorizzazione offline
