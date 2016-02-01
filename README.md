#iSete


creare il repository locale: git clone https://github.com/LucaMuggiasca/CapCaf.git
al termine delle modifiche locali:
	- git add *
	- git commit -m "Messaggio"
	- git push -u origin master


Configurare il file Users\user\.gitconfig


[user]
	name = nome cognome
	email = nome.cognome@samtrevano.ch
[core]
	autocrlf = true
	excludesfile = C:\\Users\\samt\\Documents\\gitignore_global.txt
[filter "lfs"]
	clean = git-lfs clean %f
	smudge = git-lfs smudge %f
	required = true
[http]
	proxy = http://nome.cognome:proxypass@proxy:8080

[https]
    proxy = https://nome.cognome:proxypass@proxy:8080


