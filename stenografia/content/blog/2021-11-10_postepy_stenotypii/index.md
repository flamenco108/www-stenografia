---
Title: Postępy stenotypii
Date: 2021-11-10T23:59:59
Author: Krzysztof Stenografow
kategorie: ["plover", "stenotypia"]
---

Spieszę z zawiadomieniem, że projekt nadal nie stoi w miejscu. Nie przyspiesza co prawda, ale równym tempem, krok za krokiem, klik za klikiem, zbliża nas do upragnionego celu.

A zatem za koleją, jak mawiali nasi przodkowie z epoki, kiedy jeszcze nie było kolei:

*Priscilla E. Trillo* w ciągu ostatniego półtora miesiąca wydała tabelki z opisem lewej, środkowej i prawej strony klawiatury. Niestety, od razu zapowiedziała, że są to pierwsze wersje, które bez wątpienia ulegną zmianie. Niezwłocznie rzuciłem się do testowania i następnie obesłałem ją moimi uwagami, wątpliwościami, odkryciami... Tak, trochę zwykłych śmieci pewnie też tam się znalazło, ale co poradzić. Do celów pracy z jej materiałem musiałem go przepisać do formy edytowalnej, gdyż przysyła mi pliki PDF generowane najwyraźniej z Worda (sprawdziłem, z najnowszej wersji, zatem mogłaby mi po prostu podsyłać link do udostępnionego pliku, no ale). Przepisuję te materiały do tabelki w LibreOffice Calc, gdyż w ten sposób powstaje coś w rodzaju uproszczonej bazy danych. Daje się to dość łatwo przeglądać, przeszukiwać, a jednocześnie paru klikami wygenerować np. JSON do celów pracy z tym materiałem w pythonie.

## Trochę o sprzęcie

W międzyczasie szarpnąłem się i przyszły do mnie wreszcie nakładki klawiszowe wydrukowane na drukarce 3D. Zamówiłem najtańszy materiał i kosztowało mnie to (bagatela!) 225PLN netto plus koszty wysyłki oczywiście. Niemało, szczególnie, że parę dni później kolega podesłał adres firmy, która zrobiłaby to 30% taniej. Trudno, frycowe każdy musi zapłacić. Z całą pewnością nie mogę narzekać na jakość wykonania: klawisze są pięknie wydrukowane, nie ma rzadnych zadziorów, śmieci ani włókienek. Dokładność też jest zadowalająca, pasują do klawiatury jak ulane na wymiar.

{{< figure src="klawira-stenotoppers.jpg" title="Klawiatura stenotypiczna w nowej formie" >}}

Teraz już mam zestaw minimalny, czyli [klawiaturę NKRO](https://en.wikipedia.org/wiki/Rollover_(keyboard)) i klawisze, które nie są przekoszone na skos, tylko równoległe/prostopadłe. Jeżeli będzie mi się chciało, to jeszcze to doinwestuję, ale zobaczymy.

W międzyczasie również szarpnąłem się po raz drugi i zamówiłem klawiaturę nieco bardziej stenotypiczną: [polecane przez licznych członków społeczności Georgi](https://www.gboards.ca/product/georgi). Niestety, wytwórczyni podobno zmaga się z *some stuff* i prawdopodobnie przyjdzie do mnie gdzieś koło wiosny. Tempo dostawy zgodne z naturalną odległością, gdyż przyjedzie do mnie z Kanady.

{{< figure src="georgi01.jpg" title="Georgi od GBoards.ca czyli g Heavy Industries, czyli Jane Bernhardt" >}}

Cudeńko to jest podzielone na dwoje i ma akuracik tyle klawiszy, aby spełnić moje potrzeby.

Tutaj pozwolę sobie na trochę narzekania: dlaczego tak jest, że w Polsce nie ma nikogo, kto by się parał wytwarzaniem takich rzeczy? Jak to możliwe, że w Kanadzie się to opłaca, a u nas nie??? Przecież mogłoby to kosztować tyle samo, a nawet ze 20 dołków więcej i dalej by miało niszową, ale jednak grupę odbiorców wewnątrz europejskiej strefy gospodardczej.

No, tak naprawdę to nie wiem, nie znam się.

{{< figure src="georgi02.jpg" title="Podzielona klawiaturka i steno-klawiaturka dla znawców" >}}

A wracając do tego cudenieczka, to ma ona system stenotypiczny wpisany w swój malutki system operacyjny. Autorka założyła jednakowoż, że będzie to klawiatura amerykańska, jak widać na poniższym obrazku. Jednym klikiem można się przełączyć w tryb stenografowania

{{< figure src="georgi03.png" title="" >}}

Zatem po paru modyfikacjach (gdyż jest to, jak się zapewne domyślacie, [otwarty system dla klawiatur](https://github.com/qmk/qmk_firmware)), można oddać się stenotypii jeszcze bardziej, niż przedtem. Co by to miało oznaczać - na razie nie wiem. Ale niebawem zobaczymy.

## Trochę o pracach systemowych

Jak już wcześniej nadmieniłem, jesteśmy na etapie, w którym pojawiły się już kompletne listy nagłosów, śródgłosów (zwanych głosami) i wygłosów sylabowych podane w formie zaszyfrowanej w stenotypicznym kodzie, który wygląda tak:

### Nagłosy

Zarówno nagłosy, głosy i wygłosy mają odwrotną kolejność niźli finalne sylaby, a to z powodu, że w wersji przetłumaczonej są unikalne, więc łatwiej się nimi posługiwać jako kluczami słownika.

```
"bł": "XPLJ",
"br": "XPR",
"brd": "XTPR",
"brdz": "XZTPR",
"brn": "XPVLR",
"brw": "XPVR",
"brz": "XPRJ",
"c": "ZT",
"cj": "ZTJ",
"ckl": "ZKTL",
"ckn": "ZKTLR",
"cl": "ZTL",
"cł": "ZTLJ",
"cm": "ZTV",
"czm": "TPV",
"czn": "PVLR",
"czt": "TPV",
"ćp": "ZTP",
"ćpn": "ZTPLR",
"ćw": "ZTV",
"kł": "KLJ",
"km": "KTV",
"kn": "KLR",
"kp": "KP",
"kr": "KR",
"krn": "KVLR",
"krt": "KTR",
"krw": "KVR",
"krz": "KRJ",
"krzc": "ZKTRJ",
"mg": "XKTV",
"mgl": "XKTVL",
"mgł": "XKTVLJ",
"mgn": "XKTVLR",
"mkl": "KTVL",
"mkn": "KTVLR",
"pst": "STP",
"pstr": "STPR",
"pstrz": "STPRJ",
"psz": "PRJ",
"pszcz": "PVRJ",
"schn": "SKTLR",
"schr": "SKTR",
"schrz": "SKTRJ",
"schw": "SKTV",

```


### Śródgłosy

Nie pokazałem tu wszystkich głosów (śródgłosów), bo i po co to komu na razie? A te bym akurat mógł, bo jest ich zaledwie 35.

```
"j": "J",
"e": "E",
"i": "I",
"a": "A",
"u": "U",
"ó": "U",
"o": "AU",
"ę": "E~",
"ą": "~A",
"y": "EU",
"ia": "JA",

```

Osobiście mam poważne wątpliwości co do sposobu wyciskania *Ę* oraz *Ą* wraz z kombinacjami (ją, ję itp.). Na razie bym wolał, aby wszystkie klawisze zaangażowane w budowę samogłosek, znajdowały się pod kciukami. Ale co ja tam wiem?

### Wygłosy

```
"b": "B",
"bb": "B",
"bc": "BS",
"bch": "CB",
"bć": "BTO",
"bci": "BTW",
"bd": "BT",
"bl": "LB",
"bł": "BW",
"bn": "CLB",
"br": "RB",
"brz": "BSG",
"bs": "BS",
"bsk": "LBS",
"bstw": "BSTW",
"chł": "CLB",
"chm": "CBS",
"chn": "CLB",
"chr": "CRB",
"chrz": "CBSG",
"chrzt": "CBSGT",
"g": "G",
"gd": "GT",
"gdz": "CG",
"jch": "CRB",
"jcz": "CRGW",
"jd": "CRT",
"jdź": "CRTW",
"jf": "CRW",
"jg": "CRG",
"jk": "CRG",

```

Z powyższych cząstek składamy sylaby oraz inne wyrazy. Uważny czytelnik zauważy, że o ile oryginał polski jest unikalny, to szyfr stenograficzny często się powtarza. I oby powtarzał się jak najczęściej, bo to oznacza, że cząstek do zapamiętania na wstępnym etapie szkolenia (później staje się to mniej więcej obojętne) będzie mniej.

### Sylaby

```
  "KAS": "kaz",
  "KALS": "kask",
  "KAST": "kast",
  "KARST": "kastr",
  "KALSG": "kaszl",
  "KASGT": "kaszt",
  "KALSW": "kawsk",
  "KATO": "kać",
  "KACSW": "kazm",
  "KASO": "kaś",
  "KABSW": "kaź",
  "KACLSO": "kaźń",
  "LRJAUR": "nior",
  "LRJAUSG": "niosz",
  "LRJAUW": "niow",
  "LRJAUS": "nioz",
  "LRJAULB": "nioł",
  "LRJAUCLO": "nioń",
  "LRJAUSTO": "niość",
  "STRAUSTW": "strostw",
  "STRAUSG": "strosz",
  "STRAUS": "stroz",
  "STRAUCLO": "stroń",
  "STRAUSTO": "strość",
  "STRU": "stró",
  "STRUC": "struc",
  "STRUCO": "strudź",
  "XZKUL": "zgól",
  "XZKULSTW": "zgulstw",
  "XZKUCL": "zgun",
  "XZKUR": "zgur",
  "XZKURB": "zgurb",
  "XZKULB": "zguł",
  "ZKVA": "zgwa",
  "ZKVASG": "zgwarz",
  "ZKVALB": "zgwał",
  "XTPULBT": "żółt",
  "XTPULBW": "żółw",
  "XTPULBSO": "żółć",
  "XTPIA": "żą",
  "XTPIAC": "żądz",
  "XTPIAGW": "żącz",
  "XTPIAT": "żąt",
  "XTPIALT": "żądl",
  "XTPIAB": "żąp",
  "XTPIAW": "żąw",
```


Nie prezentuję tu kompletu materiałów choćby z takiej przyczyny, że to, co tu widzicie, Kochani Czytelnicy, stanowi zaledwie wersję 0.01 unstable. Niektóre cząstki zmieniają się nawet w momencie, gdy piszę te słowa. 

Ten proces jeszcze chwilę potrwa.

{{< figure src="treal-literki.png" title="" >}}

W związku z powyższym wróciłem do nauki *pythona*, gdyż przy jego pomocy zamierzam zbudować zestaw podręcznych narzędzi, które pozwolą szybko wdrażać nowe wersje słowników po wprowadzeniu kolejnych zmian. W tej chwili mam już gotowy skrypt, który skleja mi z nagłosów, głosów i wygłosów wszystkie przekazane mu w oryginale sylaby i tworzy pierwszy, podstawowy, słownik dla początkujących, czyli zawierający właśnie sylaby. 

Pisanie przy ich pomocy pozwoli na osiągnięcie prędkości około 180 sylab na minutę, czyli około 45-60 słów na minutę (wedle polskiej mediany, czyli 4 sylab na słowo). To już jest nieźle, zważywszy, że zawodowy klepacz w klawiaturę pisze wolniej i przez krótszy czas.

Ale to wciąż nie jest prędkość, o jaką nam chodzi. Kolejnym etapem jest wznieść się na poziom bieżącej mowy, a do tego potrzeba lepszych narzędzi. I tutaj pozostajemy na łasce i niełasce Priscilli, gdyż wciąż wiele tu zależy od niej. A zanim wyda kolejne dane, ja będę sobie dłubał te skrypty narzędziowe.

Zobaczymy, co z tego wówczas wyniknie.