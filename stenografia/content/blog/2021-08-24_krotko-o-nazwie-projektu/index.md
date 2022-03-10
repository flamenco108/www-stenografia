---
Title: Krótko o nazwie projektu
Date: 2021-08-23T23:59:59
Author: Krzysztof Stenografow
kategorie: ["dumania", "stenotypia"]
---

## Szybka aktualizacja

Nie wiem, czy kogokolwiek w naszej pięknej Polsce interesuje kwestia stenotypii. Na szczęście mnie interesuje. Na wszelki wypadek jednakowoż pospieszę z aktualizacją prac nad projektem polskiego systemu wklepywania tekstu w klawiaturę z jak największą prędkością: otóż powoli, ale się posuwają. Nie skończą się razem z wakacjami, o nie (a marzyłem, że tak będzie). Ale nie zatrzymały się. Po prostu okazało się po drodze, że wiele czynności, które wykonałem wcześniej, trzeba dziś powtórzyć. I do tego celu muszę się nauczyć programowania w [pythonie](https://pl.wikipedia.org/wiki/Python). Co niniejszym czynię przetwarzając dotychczas zgromadzone materiały dowodowe.

Na szczegółowe opisy prac może znajdę czas później, na razie trochę mi go szkoda, skoro jest tyle roboty z samym projektem. Poniżej zatem tylko krótkie omówienie sprawy najważniejszej, czyli...

## Nazwa projektu

### SLOWIK

Tak. Nie "*słowik*". Nie używamy polskich znaków. Dlaczego? Ano dlatego, że nie wisi on w próżni, tylko podczepia się pod [istniejące oprogramowanko](https://www.openstenoproject.org/), z którego ma korzystać: projekt [OpenSteno](https://github.com/openstenoproject), a w nim program [Plover](https://github.com/openstenoproject/plover). Zachęcam do zapoznania się z materiałami, jeżeli ktoś zna angielski. Ludziom z innych krajów mogłoby być trudno napisać "słowik" - zatem im to ułatwimy. Bo chciałbym w razie potrzeby móc łatwo korzystać z ich pomocy. Chętnie pomagają i tłumaczą zawiłości tego systemu.

{{< figure src="https://plover.readthedocs.io/en/latest/_static/dolores.svg" title="Logo projektu Plover - siewka o imieniu Dolores" >}}

Dlaczego w ogóle nawiązywać nazwą polską do angielskiej nazwy programu? Dlatego, że tak to się już utarło w projektach, które wyrosły obok wersji oryginalnej. Np. dla języka niemieckiego jest to [Regenpfeifer](https://de.wikipedia.org/wiki/Regenpfeifer). W takim razie pójdźmy za tym trendem. 

Uczestnicy projektu otworzyli wiele kanałów informacyjnych, sami tworzą mnóstwo różnych rozwiązań pomocniczych, w tym oprogramowanie do celów edukacyjnych (stenotypia wymaga jednak nieco ćwiczeń, zanim pojawi się swoboda w jej używaniu - nie inaczej przecież jest ze stenografią). Aby to wszystko można było zastosować do projektu polskiego - warto do nich dołączyć. Zatem będziemy się trzymać opracowanego przez ostatnie dziesięciolecie standardu tak mocno, jak to możliwe. W tym co do nazwy.

### Siewka


{{< figure src="https://upload.wikimedia.org/wikipedia/commons/6/65/Black-bellied_Plover_%28Pluvialis_squatarola%29_RWD.jpg" title="Jakaś siewka z siewkowatych" >}}

A ww. program *Plover* to po angielsku "siewka" - taki [ptaszek](https://pl.wikipedia.org/wiki/Siewki). Długo nad tym myślałem w czasie wakacji i doszedłem do wniosku, że mało kto go zna. I jego nazwa raczej skojarzy z [ogrodnictwem](https://pl.wikipedia.org/wiki/Siewka) niż [ornitologią](https://pl.wikipedia.org/wiki/Ornitologia). Trzeba znaleźć nazwę, która będzie bardziej pasować do języka polskiego.

### PL-lover

Najpierw pomyślałem sobie, że może pójść po linii neologizmów, które powstają w (siwiejących już) głowach różnych tuzów otwartego oprogramowania (lub nawet starszych projektów, także dot. sprzętu). Patrz np. *sed* (**S**tream **ED**itor), *grep* (**G**lobally search for a **R**egular **E**xpression and **P**rint matching lines), *git* (zależnie od nastroju "**G**oddamn **I**diotic truckload of sh**T**", albo "**G**lobal **I**nformation **T**racker", albo cokolwiek innego, co podły, egotystyczny **git**-owiec mógłby wymyślić), *vim* (**VI** **IM**proved), *vi* (**VI**sual), *emacs* (**E**ditor **MAC**ro**S**), burp (**B**ack**U**p and **R**estore **P**rogram), modem (**MO**dulator **DEM**odulator), PHP (**P**HP: **H**ypertext **P**reprocessor), GNU (**G**NU is **N**ot **U**NIX), Hurd (**H**ird of **U**nix-**R**eplacing **D**aemons)... Och, mógłbym tak długo. Wbrew pozorom inżynierowie to dość wesoła i twórcza gromadka.

Zatem śladem tejże techniki nazewniczej słowo *Plover* aż się samo narzuca: *PL-lover*, albo może *Pllover*, miłośnik polskiego (np. języka). *PL* jest w końcu dziś powszechnie przyjętym skrótem dla wszystkiego, co polskie. Po długich namysłach doszedłem jednakowoż do wniosku, że dla większości współczesnych ww. gry słowne są już nieczytelne, a zatem żart się nie uda. Do tego brzmienie nazwy nie da się odróżnić od oryginału, a to też może stanowić problem. Trzeba pójść jakąś łatwiejszą do pojęcia drogą, nie gubiąc jednak humorystycznego sznytu.



### Słowo - słowik

Który z ptaszków jest najbardziej polski? Niektórzy zawołają bez namysłu *Orzeł!*. 

{{< figure src="https://upload.wikimedia.org/wikipedia/commons/c/ca/White-tailed_Sea-Eagle_-_Hokkaido_-_Japan_S4E9284_%2815437353795%29.jpg" title="Trochę za poważny, za ostry na znak firmowy projektu stenotypii..." >}}

No cóż. Po pierwsze tak zasadniczo nie orzeł a [bielik](https://pl.wikipedia.org/wiki/Bielik), faktycznie niegdyś zwany "orłem bielikiem", cytuję: "*W Polsce występują cztery gatunki orłów: orzeł przedni, orzełek włochaty, orlik krzykliwy i orlik grubodzioby. Bielik, nazywany niegdyś orłem bielikiem, należy do podrodziny orłanów (bielików). Do odrębnej podrodziny należy gadożer, a dla rybołowa utworzono nawet odrębną rodzinę.*"). Czyli to skomplikowane, że aż głowa boli. Po drugie, tego króla (dobre sobie!) ptaków [każdy głupi (oraz my) wziął sobie za godło, aż się od nich roi w heraldyce](https://pl.wikipedia.org/wiki/Orze%C5%82_(symbol)). Zatem to nic wyróżniającego się. A dobry znak firmowy musi jakoś odstawać od tłumu. A jednocześnie nie za bardzo, żeby nie wzbudzać kontrowersji. Co robić?

{{< figure src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Thrush_Nightingale_by_Daniel_Bastaja.jpg" title="Jak takiego słowika przerobić na logo projektu?" >}}

Z czym nam się kojarzy Polska? Z polami. Z czym nam się kojarzą pola? Z kombajnami. Ale to nie ptaszki. A jakie ptaszki polatują nad polami i ćwierkają? Otóż [skowronki](https://pl.wikipedia.org/wiki/Skowronek_zwyczajny). Bardzo ładne słowo i bez polskich znaków. Ale dość długie (nie aż tak jak niemiecki *Regenpfeifer*, ale zostawmy naszych braci zachodnich na boku). Z symbolicznego punktu widzenia nazwa wprost idealna. Ale mnie się spodobała inna.

**[Słowik](https://pl.wikipedia.org/wiki/S%C5%82owik_szary)** - nie tylko przez zwykłych ludzi nagminnie mylony ze skowronkiem, bo bardzo do niego podobny (z daleka), i ładnie śpiewa. A jego nazwa kojarzy się z przeznaczeniem całego projektu: **słowa (szybko zapisywane), Słowianie (używać będą, jeśli zechcą)**. Bardzo ładnie. I krótko. I łatwe do wymówienia. I znaczenia poukładane warstwami.

Zatem na razie projekt stenotypii polskiej nazywa się - **SLOWIK**




