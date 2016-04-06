

# iSete | Diario di lavoro - 06.04.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy
### Canobbio, 06.04.2016

## Lavori svolti
#####Ettore
Durante questa gironata, ho rifinito il "re-design" del sito (fatto tutto su una pagina unica,
con sezioni differenti) e di fare in modo che si riuscisse a far partire una classe java da php.
Quest'ultima operazione, mi ha richiesto buona parte della giornata, purtroppo, per il fatto stesso
che non riuscivo a comprendere il corretto utilizzo del metodo exec(). Dopodiché, ho implementato
il pulsante delle richieste, in modo che faccia le richieste al raspberry (con java, appunto).
#####Andrea

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
Come precedentemente detto, ho avuto particolari problemi con la funzione di php exec().
Non mi permetteva di eseguire una classe java se non come utente root. Sapendo che, lavorando
in ambiente linux (similar, almeno) fosse presente il comando shell sudo (che permette l'esecuzione
di un determinato comando come, appunto, utente amministratore), ma solo anch'esso mi dava un errore
di mancata password. Cercando su internet, ho trovato la corretta soluzione per far si che il comando funzioni
adeguatamente (vedere in Sito/phps/index.php).
#####Andrea

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