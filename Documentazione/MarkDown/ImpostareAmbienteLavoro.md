Ambiente di sviluppo
--------------------



1.  Creare un account su [*https://github.com/*](https://github.com/)

2.  Installare Git
    [*http://git-scm.com/download/win*](http://git-scm.com/download/win)

3.  Configurare il file di impostazioni git ```<users>\<user>\.gitconfig```
    nella maniera seguente:

```java

[user]
    name = nome cognome
    email = nome.cognome@samtrevano.ch

[core]
    autocrlf = true
    excludesfile = C:\Users\samt\Documents\gitignore_global.txt

[filter "lfs"]
    clean = git-lfs clean %f
    smudge = git-lfs smudge %f
    required = true

[http]
    proxy = http://nome.cognome:proxypass@proxy:8080

[https]
    proxy = https://nome.cognome:proxypass@proxy:8080
```

4.  Installare source Tree da questo sito
    [*https://www.sourcetreeapp.com/*](https://www.sourcetreeapp.com/)

5.  Impostare il Git di sistema per SourceTree.

![](img/image1.png){width="6.145833333333333in"height="4.458333333333333in"}

1.  Completata l’istallazione mettendo le credenziali dell’account github
    creato in precedenza

2.  Dopo l’accettazione dei termini di utilizzo l’installazione sarà
    completata

3.  Aprire source Tree

4.  Andare sotto impostazioni e mettere l’url del progetto:
    [*https://github.com/LucaMuggiasca/iSete.git*](https://github.com/LucaMuggiasca/iSete.git)

5.  In seguito inserire il percorso della cartella locale

**Non cambiare il percorso della cartella **

Se la cartella è già creata allora andrà a fare riferimento a quella
cartella, altrimenti la creerà lui

1.  Sempre in impostazioni inserire le credenziali (nome e email) per
    mostrare chi modifica cosa.

A questo punto nella vostra cartella locale dovreste poter vedere i file
che sono stati messi sul server.

Potrete modificarli ma non potrete uplodare poiché non avete il permesso
dal responsabile del progetto Raffaele Scarcella.

Quando modificherete un file, source tree vi farà notare il file che
avete modificato ma non lo uploderà. Per fare ciò bisogna selezionare i
file che si vuole uplodare, selezionare il check che vi è sotto ( invia
immediatamente la commissione a origin/master) e premere invia.

**Prima di modificare un file ricordarsi di premere commit per avere le
eventuali modifiche che sono state fatte dagli altri ma che voi non
avete in locale**

Per maggiori informazioni vi spiegheremo io e Raffaele come fare in
classe.

Git da linea di comando

Da una qualsiasi shell spostarsi nella cartella nella quale volete
lavorare.

Creare una copia del repository: git clone
[*https://github.com/raffaelescarcella/iSete.git*](https://github.com/raffaelescarcella/iSete.git)

Aggiornare: git fetch

Merge: git merge

Aggiornare e merge DAL repository: git pull

Al termine delle modifiche locali:

- git add \*

- git commit -m "Messaggio"

- git push -u origin master

Installare Atom: https://atom.io/

Insallare PanDoc: [*http://pandoc.org/*](http://pandoc.org/)

Per creare il pdf da un md: pandoc [*source.md*](http://source.md/) -s
-o dest.pdf --highlight-style=tango
