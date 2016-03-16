

# iSete | Diario di lavoro - 16.03.2016
##### N. Anthonippillai, E. Ongaro, R. Scarcella, A. Lupica, S. Ushchapivskyy
### Canobbio, 16.03.2016

## Lavori svolti
#####Nishan

Durante questa lezione ho fatto un bottone per gestire il credito massimo poi ho fatto in modo che ogni volta che inserisci un utente nuovo il credito non sia mai sopra il limite.

Mentre faccio if mi sono dimenticato una parentesi e mi continuava
a smettere di funzionare la pagina poi con l'aiuto di ettore abbiamo trovato l'errore.

Poi per ogni pagina fatta da me creo il pulsante per tornare alla pagina principale. Poi ho fatto la mia parte di implemetazione nella documentazione.

Ora le pagine della gestione utenti e lo storico funzionano.

#####Ettore

In questa giornata, sono stato impegnato a sistemare il webserver (raspberry).
Alle 14:00 il webserver era funzionante e ho iniziato a caricare i file.
Per fare ciò, ho scaricato 'pscp' (consigliato da Muggiasca) e ho spiegato al resto del team il corretto
funzionamento del programma. Inoltre, ho anche scoperto come fare in modo di utilizzare tramite
un programma preinstallato nel OS del mio portatile (mstsc), un desktop in remoto, cosicché riesca ad utilizzare
più facilmente il raspberry. Anche in questo caso, ho spiegato il funzionamento al mio team.

#####Andrea

Ho impiegato buona parte della mattinata a trovare e a provare a far funzionare i codici che avevo trovato, ho scoperto che bisognava installare una libreria e non riuscivo a farlo, in seguito, grazie all'aiuto di usha, ho capito che quella libreria funzionava solo su raspberry quindi non sono potuto andare avanti con il lavoro poiché Ettore non riusciva a far funzionare il Raspberry.
Dopodiché insieme a usha ho fatto una progettazione del dispenser calcolando la grandezza e come farlo.
Durante il pomeriggio, mentre Ettore inseriva il sito web sul server, ho modificato il form
"co_nome" della pagina configurazione da input text a menù a tendina. Dalle 14:00 abbiamo provato a connetterci 
a raspberry e, poiché io, Ettore e Scarcella avevamo un problema con la connessione in remoto (a quanto pare veniva condiviso
in contemporanea su tutti e tre i pc lo stesso desktop) ho provato insieme a Usha far partire gli script fatti in mattinata. Per far partire gli script in java abbiamo dovuto installare una libreria e, dopo averlo fatto, abbiamo provato a far accendere un led tramite il Raspberry. Dopodiché abbiamo provato a far funzionare il servo motore, ma purtroppo, non siamo riusciti a finire.


##  Problemi riscontrati e soluzioni adottate
#####Ettore
- Ho impiegato buona parte del mio tempo sul webserver, perché non riuscivo a comprendere il perché
  i moduli MySQL non venivano riconosciuti da PHP. Dopo vari tentativi di reinstallazione, sono riuscito a scoprire
  che mi mancava un package aggiuntivo per far si che venisse riconosciuto (php-pear).

- Abbiamo scoperto che il gestore di desktop in remoto su Windows 10 condivide la stessa sessione
  con il primo ad essersi collegato. La soluzione a questo problema è stata semplicemente evitare che
  chiunque abbia Windows 10, si colleghi quando c'è già qualcuno collegato.

#####Andrea
- Ho impiegato fin troppo tempo a capire come far funzionare i codici e purtroppo, a causa del problema successo durante la mattinata, non sono riuscito a finire di far funzionare il servo motore.

##  Punto della situazione rispetto alla pianificazione
#####Andrea
-Leggermente indietro, avremmo dovuto avere il servo motore funzionante!

## Programma di massima per la prossima giornata di lavoro
#####Andrea
-Concludere il funzionamento del servo motore
-Trovare un modo per far si che un'eventuale richiesta di prenotazione, faccia muovere il servo motore.
