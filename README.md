# Časové relé - ESP8266
**Používaním projektu sa osoba zaväzuje k dodržiavaniu zmluvných podmienok MIT licencie, pod ktorou je projekt šírený! Uvedomuje si riziká, obmedzenia a svoje povinnosti. Všeobecne o MIT licencii: https://sk.wikipedia.org/wiki/MIT_licencia**
# Podporte projekt pre pridanie nových funkcionalít
* https://www.paypal.me/chlebovec
# Stručný popis:
* Projekt využíva ako riadiaci mikrokontróler vývojovú dosku NodeMCU.
* NodeMCU sa pripája k webaplikácii, kde publikuje teplotu v počte 6x z čidiel DS18B20 na OneWire zbernici a číta dáta z internetu.
* Doska spravuje 6 výstupov, z toho 2 termostaty s automatickým režimom (hysteréza, autonómne riadenie) a manuálny režim (ZAP/VYP na požiadanie používateľa) - pôvodne pre chladenie. Ak je teplota + hysterézy nad, chladí sa. Pri inverzii nechladí.
* Ďalšie 4 výstupy sú časové relé, ktorá vedia byť v automatickom režime v stave ZAP od 6:00 do 18:00 a od 18:00 do 6:00 sú vypnuté. Tieto automatické dni je možná navoliť, každý deň zvlášť.
* Webaplikácia ponúka prehľadný dizajn, kde je možné sledovať stavy teplôt, stavy výstupov, indikátor pripojenia dosky k webu, meniť názvy jednotlivých vstupov a výstupov, meniť prihlasovacie informácie do webaplikácie.
* Stránka využíva datababázu na archiváciu teplôt raz za 5 minút. Tieto dáta je možné prezerať v prehľadnej tabuľke a automaticky sa mažú dáta staršie ako 14 dní. Meno a heslo sú šifrované a uložené hashom algoritmu SHA1. (systém obashuje login systém)
* Web je kompatibilný s PHP5, PHP7..
* Webaplikácia je navrhnutá pre dosku NodeMCU s napojením na HTTPS variantu stránky. Dáta sú bezpečné, prichádzajú na web v reálnom čase.
* Systém pracuje aj v offline režime pre prípad výpadku wifi siete, kedy sa správa totožne ako automatický režim pre termostat, relé sú z bezpečnostných dôvodov vypnuté.
* Ihneď po nadviazaní konektivity s webom sa doska okamžite synchronizuje s webom a riadi sa podľa neho.
# Screenshoty
![Prehľad teplôt](https://i.nahraj.to/f/1WbX.PNG)
![Prehľad výstupov](https://i.nahraj.to/f/1WbW.PNG)
![Nastavenie termostatov](https://i.nahraj.to/f/1WbV.PNG)
![Zmena názvov pre vstupy/výstupy](https://i.nahraj.to/f/1WbU.PNG)
![Automatické riadenie výstupov v dňoch](https://i.nahraj.to/f/1WbS.PNG)
