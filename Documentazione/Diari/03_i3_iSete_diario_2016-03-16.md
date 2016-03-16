

# iSete | Diario di lavoro - dd.mm.yyyy
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

##  Problemi riscontrati e soluzioni adottate
#####Ettore
- Ho impiegato buona parte del mio tempo sul webserver, perché non riuscivo a comprendere il perché
  i moduli MySQL non venivano riconosciuti da PHP. Dopo vari tentativi di reinstallazione, sono riuscito a scoprire
  che mi mancava un package aggiuntivo per far si che venisse riconosciuto (php-pear).

- Abbiamo scoperto che il gestore di desktop in remoto su Windows 10 condivide la stessa sessione
  con il primo ad essersi collegato. La soluzione a questo problema è stata semplicemente evitare che
  chiunque abbia Windows 10, si colleghi quando c'è già qualcuno collegato.

##  Punto della situazione rispetto alla pianificazione


## Programma di massima per la prossima giornata di lavoro
