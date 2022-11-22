---
Title: Stenografia czyli Stemi_J
Date: 2022-11-20T23:59:59
Author: Krzysztof Stenografow
kategorie: ["alfabety-systemy", "prezentacje", "teorie", "stemi"]
---


Drodzy i szanowni.
Przez ostatnie miesiące nie zajmowałem się zbyt usilnie sprawami czy to stenografii, czy to stenotypii. I co? I okazało się, że tym razem zajął się tym kto inny. W związku z tym spieszę z aktualizacją. Ale zanim opiszę nowości w świecie stenografii maszynowej, najpierw zaprezentuję nową stenografię. Nową/starą - ale jakże zgrabną, poręczną, którą polecam wszystkim zainteresowanym, szczególnie, jeżeli są praworęczni.

Moją krytykę tej propozycji opublikuję gdzieś w dalszych wpisach blogowych, po szczegółowej analizie, która zajmie mi sporo czasu, gdyż, jak Janusz niżej pisze, priorytetowo energię czasu wolnego od innych spraw poświęcam teraz stenotypii. Po dokonaniu krytyki zamierzam całość dokumentu systemowego **SteMi_J** opublikować też w odpowiednim dziale tej strony, aby nie było potrzeby szukania go po blogowych wpisach (choć wyszukiwarka działa bardzo dobrze).

Gdyby ktoś był zainteresowany nauką *SteMi_J*, myślę, że sensownie będzie przejrzeć dostępne [**tutaj** lekcje bazowego systemu SteMi]({{< relref "../2013-02-28_kurs-stemi-lekcja-01/" >}}), a w trakcie ćwiczeń dopasowanie różnic ze *SteMi_J*.

Poniżej zatem cytuję opis systemu, który przesłał mi jego autor, *Janusz Skolimowski*, a następnie linkuję pozostałe materiały - co razem składa się na kompletny tzw. dokument systemowy, czyli wyczerpujące opisanie tego systemu.


### Stemi_J

Na blog Krzysztofa i jego system SteMi natrafiłem przypadkiem niedawno, dopiero w ok. 9 lat po opublikowaniu kursu tego systemu, i uznałem go za najlepszy system stenografii notatkowej dla języka polskiego. Dostrzegłem w nim tylko jedną anomalię proszącą się o skorygowanie: każda samogłoska jest oznaczana odpowiednim  łącznikiem w postaci kreski prostej lub łukowatej, z wyjątkiem <u>, które jest oznaczane oddzielną literą podobną do /g/, ale z haczykiem w przeciwną stronę. Ponieważ w międzyczasie Krzysztof zajął się tematem stenotypii i nie miał już czasu na dogłębne dyskutowanie ewentualnych zmian, zgłosiłem moją propozycję modyfikacji, którą nazywam "SteMi_J" i którą należy uznać za [odgałęzienie (fork)](https://pl.wikipedia.org/wiki/Fork) bazujące na oryginalnej wersji Krzysztofa.

----
{{< figure src="SteMi_J-MP.jpg" title="Modlitwa Pańska w systemie SteMi_J (tradycyjna próbka stenografii od XVIw.)" >}}

----

Aby usunąć wspomnianą anomalię, oznaczam `u` przez łącznik łukowaty wznoszący się (który dotąd był dopuszczalnym wariantem zapisu `o`). Zwolniony w ten sposób dotychczasowy glif `/u/` wykorzystałem do rozszerzenia dopuszczalnych wariantów glifu `/w/`, który występuje bardzo często i w niektórych kontekstach graficznych był dotąd niewygodny w kreśleniu.

Jak łatwo zauważyć, w nawiasach `<ostrych>` umieszczam zapis długi (źródłowy), a w nawiasach `/ukośnych/` zapis stenograficzny w transkrypcji alfabetycznej.

Poza powyższą modyfikacją (niekompatybilną wstecznie) zaproponowałem dwie innowacje kompatybilne: *zapis stenologiczny* i *glify zredukowane*.


----
{{< figure src="SteMi_J.jpg" title="Fragment głównego dokumentu systemowego" >}}

----


***Zapis stenologiczny***, ujmowany w nawiasy `/ukośne/`, stanowi reprezentację danego tekstu z zastosowaniem użytych skrótów i innych trików systemu stenograficznego, ale zapisaną normalnymi znakami tekstowymi (w zasadzie alfabetem polskim plus litery greckie na oznaczenie glifów zredukowanych i plus sporadycznie inne znaki ze zbioru znaków tekstowych).

Reprezentacja taka przede wszystkim pozwala objaśnić teorię, która stoi za danym zapisem, a ponadto ułatwia komunikację tekstową (np. mailową) na temat systemu stenograficznego  `/re(pr)z-ω aka prz-fʃ pzwala ob'aś-’ terię ka stoi za danym zap'sem a pndo ułtw'a (kom)(cja)ę tx-υą np' m'il-υą nt sysu stn(rf')-υego/`.

***Zapis stenologiczny*** można uznać za stadium pośrednie między zapisem długim a stenograficznym, tzn. koncepcyjnie ujmując, piszący najpierw przekłada mentalnie tekst długi na zapis stenologiczny, a następnie realizuje ten zapis kreśląc odpowiednie glify. Przy odczycie glify są rozpoznawane jako zapis stenologiczny, który jest następnie przekładany na zapis długi w oparciu o znaną czytającemu teorię stenograficzną. Oczywiście nie zmienia to faktu, że nierzadko frazeogram jest kreślony automatycznie z pamięci motorycznej, a odczytywany jako ideogram (czyli obrazek o rozpoznawalnym znaczeniu).

Każda propozycja systemu stenograficznego opiera się na kompromisach, zwłaszcza między łatwością opanowania, szybkością pisania i czytelnością przy odczycie. System SteMi jest łatwy do opanowania i stosowania dzięki systematycznej strukturze zbioru glifów, małej liczbie reguł szczególnych oraz brakowi specjalnych wymogów na liniaturę i narzędzie pisarskie. Jednak wskutek tego pojawiają się dwa problemy. Pierwszy to stosunkowo długi zapis niektórych bardzo często występujących wyrazów (takich jak zaimki `to` czy `ten`). Drugi problem to przebijanie sufitu lub podłogi przez piętrzące się jeden po drugim długie glify w górę bądź w dół (np. wyrazy `rycyny`, `piechota` mają każdy 6 miar wysokości i nie są to jakieś szczególnie wyrafinowane przykłady). A przecież nawet przy pisaniu na papierze bez liniatury każdy zapis dłuższy niż kilka wyrazów układa się w jakieś rządki, które wymagają utrzymywania jakiegoś odstępu międzywierszowego. Przerywanie frazeogramu w celu powrotu do linii wierszowej jest bardzo źle widziane przez stenologów (teoretyków stenografii), gdyż odbywa się dużym kosztem w sensie szybkości pisania.

Dlatego wprowadziłem koncepcję ***glifów zredukowanych***, które wychodzą naprzeciw tym problemom. Ponieważ z drugiej strony dodanie nowych glifów i reguł ich stosowania oczywiście komplikuje system, koncepcja ta powinna raczej być traktowana jako opcjonalny wyższy poziom.

----
{{< figure src="SteMi_J-RO.jpg" title="Wiersz A. Mickiewicza pt. Reduta Ordona" >}}

----

***Glify zredukowane***, jak sama nazwa wskazuje, są zmniejszone lub okrojone w stosunku do glifów regularnych, przez co są kreślone szybciej. Są wśród nich glify, których zadaniem jest zmniejszenie wysokości frazeogramu, oraz glify jedynie skracające zapis w celu uzyskania większej szybkości.

Trzecim rodzajem są **glify funkcyjne**, które pozwalają krótkim ruchem wygenerować końcówki gramatyczne (niekiedy skomplikowane w pełnym zapisie) do rdzenia wyrazowego już zapisanego w sposób dostatecznie zrozumiały. Np. jeśli przyjmiemy, że w danym kontekście rdzeń `mal-` dostatecznie określa sens "malowania", dodanie do tego rdzenia małego glifu funkcji bezokolicznika generuje wyraz `malować`, natomiast dodanie małego glifu funkcji rzeczownika generuje wyraz `malarstwo`, w obu przypadkach dając dość istotne skrócenie frazeogramu w porównaniu z pełnym zapisem.

W niektórych przypadkach glify zredukowane wręcz poprawiają czytelność, gdyż dzięki charakterystycznemu wyglądowi ułatwiają rozpoznanie frazeogramu (lub jego istotnej części) jako ideogramu.

Oprócz tego, biorąc pod uwagę, że jest to system stenografii notatkowej, wprowadziłem znaki interpunkcyjne do organizacji notatek (początek i koniec notatki, koniec akapitu, tytuł notatki, lista wypunktowana itd.) oraz znacznie rozszerzyłem listę skrótów, uwzględniając m.in. dni tygodnia, miesiące, liczby itd.

----
{{< figure src="SteMi_J-skroty.jpg" title="Fragment dokumentu opisującego skróty systemu SteMi_J" >}}

----


Moja wersja jest zdefiniowana w dwóch dokumentach .pdf, które są sformatowane nie do druku, lecz do wyświetlania na ekranie z przewijaniem pionowym: ["**SteMi_J**"](SteMi_J.pdf) zawiera bardzo zwięzłą specyfikację, czyli wykaz wszystkich glifów wraz z przykładami ich użycia (nie jest to podręcznik dla początkujących adeptów stenografii!).

Plik ["**SteMi_J skróty**"](SteMi_J-skroty.pdf) zawiera natomiast ułożoną alfabetycznie listę proponowanych skrótów. Jeśli chodzi o skróty, to wprowadziłem zasadę, że w skrócie zachowana zostaje co najmniej pierwsza litera (w sensie fonetycznym, tj. z możliwością zastąpienia właściwej litery literą fonetycznie podobną oraz z możliwością użycia glifu zredukowanego). Zmodyfikowałem zatem np. takie skróty jak `/śli/` i `/nak/` dla `<jeśli>` i `<jednak>` (zamiast tego jest `/jś/` i `/jek/`). Od tej zasady istnieje dokładnie 10 wyjątków (wskazanych znaczkiem elizji `⁞` ) i ich lista nie powinna być rozszerzana.

Legenda do opisów (pominięto niektóre symbole o oczywistym znaczeniu):
- `/xxx/`	zapis stenologiczny
- `‹xxx›`	początek i koniec wyrazu lub zwrotu (nie mylić z <zapisem długim>)
- `'`	zmiękczenie spółgłoski
- `▶`	przykład
- `◮`	porównaj (przykład kontrastujący)
- `※`	reguła specjalna (odstępstwo od reguł ogólnych)
- `⨀`	stosowane tylko wyjątkowo, w razie konieczności
- `đ`	glif przeciążony /d|t/ (może znaczyć <d> lub <t>)
- `ɠ`	glif przeciążony /g|k/
- `χφτζυεʒ’`	oznaczenia glifów zredukowanych (objaśnionych w specyfikacji)
- `⁞`	elizja (wypadnięcie pierwszej litery w skrócie)

#### Dokumenty systemowe

- ["**SteMi_J**"](SteMi_J.pdf) - główny dokument systemowy
- ["**SteMi_J skróty**"](SteMi_J-skroty.pdf) - lista skrótów
- ["**SteMi_J Prova**"](SteMi_J-Prova_2-3.pdf) - próbka tekstu (tradycyjna w świecie stenografii [Modlitwa Pańska](https://pl.wikipedia.org/wiki/Ojcze_nasz) oraz fragment wiersza "[Reduta Ordona](https://pl.wikipedia.org/wiki/Reduta_Ordona" )







