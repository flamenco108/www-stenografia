---
Title: Brewiskrypt - NPSS - Nowy Polski System Stenografii - SteMi
Date: 2009-07-10T23:01:01
Author: no_qanek, flamenco108
---




version=pmwiki-2.2.22 ordered=1 urlencoded=1
agent=Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.55 Safari/533.4
author=
charset=UTF-8
csum=
ctime=1304878944
host=85.219.142.84
name=NPSS.ZalozeniaProjektowe
rev=3
targets=
text=!Założenia projektowe

Pierwsza wersja tego dokumentu została spisana już prawie dwa lata temu (czyli w drugiej połowie 2009 roku). Wiele się od tamtej pory nauczyliśmy, nie mamy już złudzeń, że stworzenie idealnego polskiego systemu stenograficznego to taka sama łatwizna, jak dla języka angielskiego. Niektóre niżej wyszczególnione założenia się zdezaktualizowały (niewiele), na inne kładziemy mniejszy nacisk. Długa droga przed nami, nadziei jednak nie tracimy.

'''''W tej chwili pracujemy oddzielnie nad dwiema wersjami Lewiskryptu. Brewiskrypt nie wyszedł z fazy przedkoncepcyjnej.'''''


(:htoc Spis treści :)


## System stenograficzny - Lewiskrypt

Lewiskrypt to nazwa, jaką zarezerwowaliśmy dla alfabetu stenograficznego. Pochodzi od słów ''levis'' - lekko i ''scripto'' - pisać. Czyli ''Lekkopis''. To oddaje nasz cel, chyba bez potrzeby dalszych wyjaśnień. Warto dodać, że cechą podstawową Lewiskryptu ma być możliwość pisania pełnego tekstu, bez żadnych skrótów. Skrótowanie zapisu, dla zwiększenia prędkości, ma być dostępna dla chętnych, którzy zechcą wznieść się na "wyższy poziom wtajemniczenia" w stenografii.

## Podstawowa praca badawcza

* opracować "fonetykę przedszkolną" oddającą w podstawowy sposób fonetykę polską i przypasować im znaki - http://grzegorj.w.interia.pl/gram/pl/fonemy2.html - ''zrobione, ale dla każdej wersji trzeba
to robić raz jeszcze''
* opracować statystykę częstości występowania poszczególnycych znaków dla jak największych próbek tekstowych - ''skrypty napisane, trzeba napisać od nowa''
* opracować statystykę częstości występowania par znaków - ''zrobione na podstawowym poziomie''
* statystykę częstości występowania trójek znaków - ''zrobione na podstawowym poziomie''
* zdefiniować najczęstsze jedynki, dwójki i trójki inicjalne - ''zrobione na podstawowym poziomie''
* zdefiniować najczęstsze jedynki, dwójki i trójki finalne - ''zrobione na podstawowym poziomie''
* opracować tablicę lubi-nielubi dla dwójek i trójek - ''zrobione na podstawowym poziomie''
* opracować słownik jedno-dwusylabowych wyrazów funkcyjnych, zaimków, przyimków, partykuł - ''rozgrzebane''

## Zestaw znaków pozwalających na szybkie pisanie.

* od początku zestawy znaków mają być wersjonowane! - ''zrobione na podstawowym poziomie''
* tablica, które znaki "się lubią", a które się "nie lubią" - ''zrobione na podstawowym poziomie''
* na podstawie tablicy "lubi-nie lubi" zestawionej ze statystyką par-trójek ocenić przydatność danego zestawu znaków - ''zrobione na podstawowym poziomie''
* czynności powyższe powtarzać aż do uzyskania satysfakcjonującej wersji 1.0 znaków - ''zrobione na podstawowym poziomie''
* rozwój systemu znakowego w wersjach, w tym uzupełnianie go o znaki specjalne - ''zrobione na podstawowym poziomie''
* testować alfabet na materiałach ze strony: http://grzegorj.w.interia.pl/gram/pl/gram00.html, szczególnie w gabinecie osobliwości - ''testowane na bieżąco, nie tylko na tym''

## Oprogramowanie

* Czcionka OpenType, TrueType do pisania stenograficznego (łączenie można prawdopodobnie zdefiniować przez ligatury)
* Rozwój czcionki dla objęcia jak największej liczby znaków
* Program dokonujący transkrybcji tekstu bieżącego na fonetykę przedszkolną
* Program dokonujący transkrybcji tekstu fonetycznego na stenograficzny


## System tachygraficzny - Brewiskrypt

Brewiskrypt to nazwa zarezerwowana dla kompletnej metody skrótowego zapisu, bez uwzględnienia alfabetu, w jakim ten zapis będzie prowadzony. Pochodzi od słów brevis - krótko i scripto - pisać. A zatem krótkopis. Celem naszym jest stworzenie brewiskryptu, który będzie mógł znaleźć zastosowanie także w maszynopisaniu. Czasy dzisiejsze nakazują, aby system był na tyle logiczny i spójny, aby dało się dokonywać transkrybcji w obie strony przy pomocy programu komputerowego - to dopiero uczyni brewiskrypt naprawdę użytecznym.


## Stworzenie słowników istniejących i użytecznych abrewiatur i akronimów i skrótowców

* http://pl.wikipedia.org/wiki/Skr%25C3%25B3t
* W tym skrótów "internetowych", w tym emotów - ''rozgrzebane''

## Stworzenie jednolitego systemu tworzenia nowych skrótów

''rozgrzebane''

do rozważenia kwestie:

* suspensja - http://pl.wikipedia.org/wiki/Odci%25C4%2599cie
* kontrakcja -http://pl.wikipedia.org/wiki/Kontrakcja_%2528skr%25C3%25B3t%2529
* znaki specjalne - http://pl.wikipedia.org/wiki/Znaki_specjalne
* skrótowiec - http://pl.wikipedia.org/wiki/Skr%25C3%25B3towiec
* abrewiatura - http://pl.wikipedia.org/wiki/Abrewiatura
* skrót - http://pl.wikipedia.org/wiki/Skr%25C3%25B3t
* dla powyższych trzeba napisać skrypty przetwarzające tekst wg ich reguł i budujące statystyczne listy porównawcze dla rozpoznania, czy dana metoda jest skuteczna dla wszystkich wyrazów, wielu lub tylko niewielu.
* rozważyć kwestię złożeń skrótowców dla oddania złożeń, np. jeżeli mamy skrót słowa język (jzk) i słowa znawca (znwc), to czy czytelne jest złożenie jzkznwc, i czy sensowne jest poddanie go kolejnej procedurze skrótowania, np. jznwc.
* rozpatrzyć techniki skrótowania używane w istniejących polskich systemach stenograficznych, odsiać metody typowe dla danego systemu, oparte o kształt liter systemu

## Prace badawcze

* stworzenie statystyki częstości występowania poszczególnych słów dla określenia pilności opracowania słowników skrótów dla poszczególnych wyrazów
** ogólnej
** literackiej
** internetowej-potocznej
** dziennikarskiej
** urzędowej
** biznesowej

''Odłożyć na później''

## Oprogramowanie

* do przetwarzania tekstu bieżącego w skrótowany i skrótowanego w bieżący
* opracowanie czcionki tachygraficznej, ideowo można się oprzeć o 
** Graffiti Palma starego rodzaju - http://en.wikipedia.org/wiki/Graffiti_%2528Palm_OS%2529
** Graffiti 2 Palma - http://en.wikipedia.org/wiki/Graffiti_2
** Moon Type - http://en.wikipedia.org/wiki/Moon_type, http://www.omniglot.com/writing/moon.htm

## Promocja projektu

* Strona www - ''powstała i rozwija się''
* Zarezerwować domeny
** www.stenografia.pl - ''zrobione''
** www.tachygrafia.pl - ''odłożone na później''
* Przygotować serwis w np. joomli z prezentacją zagadnień - ''zrobione za pomocą google-sites i zmigrowane na pmwiki''

## Budowanie społeczności projektu

### Stenografowie

* Pomoc zawodowych i wyuczonych stenografów na pewno się przyda
* Stowarzyszenie Stenografów, Maszynistek i Sekretarek - wsparcie, dokumenty, artykuły, pomoc dydaktyczna, opracowanie wymogów technicznych, kwalifikacje umiejętności - ''zaprezentowałem projekt paniom z SSiMS, liczę na wsparcie''

### Programiści

* modyfikacja istniejących programów
* opracowanie programu czytającego stenograficzne pismo odręczne i przetwarzającego je w tekst fonetyczny
* rozwinięcie powyższego w translator z odczytem skrótów i przetwarzaniem w tekst bieżący

### Językoznawcy

* opracowują na nowo wszystkie aspekty językoznawcze projektu
* przedszkolna fonetyka
* metody skrótowania

### Zecerzy i graficy

* rozwijają czcionkę stenograficzną
* rozwijają czcionkę tachygraficzną

### Użytkownicy

* wyłapują pojedyncze błędy w specyficznych zastosowaniach
* dzielą się własnymi rozwiązaniami i usprawnieniami

## Edukacja

### Szkolenia

* Podręcznik do stenografii - lewiskrypt - ''rozgrzebane''
* Podręcznik do brewiskryptu

## Uwagi natury ogólnej

Należy pamiętać o tym, że nasz projekt nie jest niczym naprawdę innowacyjnym, czy w ogóle nowym. W krajach anglosaskich sprawą szybkiego zapisu zainteresowanych jest wiele osób, a studenci piszą prace na ten temat, które łatwo można przeczytać w Internecie, np. ''Text Prediction and Classification Using String Matching''. Nie robiąc nic w tym kierunku prawdopodobnie stawiamy się za dinozaurami w najbliższej przyszłości. Obstawiać należy, że w przyszłości rozwinie się rynek tabletów i innych urządzeń, do których dane na powrót będzie się wprowadzać ręcznie - zatem opracowanie systemów szybkiego i nie męczącego pisania staje się coraz ważniejsze.
time=1304879841
author:1304879841=
diff:1304879841:1304879533:=3,4d2

 

 
10,11d7

 

 
15,16d10

 

 
18a13,14
> 
> 
24a21,22
> 
> 
38a37,38
> 
> 
49a50,51
> 
> 
59a62,64
> 
> 
> 
62,64d66

 

 

 
68,71c70,73

 * W tym skrótów "internetowych", w tym emotów - ''rozgrzebane''

 

 

 
---
> * W tym skrótów "internetowych", w tym emotów
> 
> 
> 
74,75c76,77

 ''rozgrzebane''

 
---
> 
> 
77,78c79

 

 * suspensja - http://pl.wikipedia.org/wiki/Odci%25C4%2599cie
---
> suspensja - http://pl.wikipedia.org/wiki/Odci%25C4%2599cie
91a93,94
> 
> 
105a109,111
> 
> 
> 
116c122,124

 * Strona www - ''powstała i rozwija się''
---
> 
> 
> * Strona www - powstała i rozwija się
118,123c126,131

 ** www.stenografia.pl - ''zrobione''

 ** www.tachygrafia.pl - ''odłożone na później''

 * Przygotować serwis w np. joomli z prezentacją zagadnień - ''zrobione za pomocą google-sites i zmigrowane na pmwiki''

 

 

 
---
> ** www.stenografia.pl - zrobione
> ** www.tachygrafia.pl - odłożone na później
> * Przygotować serwis w np. joomli z prezentacją zagadnień - zrobione za pomocą google-sites
> 
> 
> 
125a134,135
> 
> 
129,132c139,142

 * Stowarzyszenie Stenografów, Maszynistek i Sekretarek - wsparcie, dokumenty, artykuły, pomoc dydaktyczna, opracowanie wymogów technicznych, kwalifikacje umiejętności - ''zaprezentowałem projekt paniom z SSiMS, liczę na wsparcie''

 

 

 
---
> * Stowarzyszenie Stenografów, Maszynistek i Sekretarek - wsparcie, dokumenty, artykuły, pomoc dydaktyczna, opracowanie wymogów technicznych, kwalifikacje umiejętności
> 
> 
> 
167c177

 * Podręcznik do stenografii - lewiskrypt - ''rozgrzebane''
---
> * Podręcznik do stenografii - lewiskrypt+brewiskrypt
172c182

 Należy pamiętać o tym, że nasz projekt nie jest niczym naprawdę innowacyjnym, czy w ogóle nowym. W krajach anglosaskich sprawą szybkiego zapisu zainteresowanych jest wiele osób, a studenci piszą prace na ten temat, które łatwo można przeczytać w Internecie, np. ''Text Prediction and Classification Using String Matching''. Nie robiąc nic w tym kierunku prawdopodobnie stawiamy się za dinozaurami w najbliższej przyszłości. Obstawiać należy, że w przyszłości rozwinie się rynek tabletów i innych urządzeń, do których dane na powrót będzie się wprowadzać ręcznie - zatem opracowanie systemów szybkiego i nie męczącego pisania staje się coraz ważniejsze.
\ No newline at end of file
---
> Należy pamiętać o tym, że nasz projekt nie jest niczym naprawdę innowacyjnym, czy w ogóle nowym. W krajach anglosaskich sprawą szybkiego zapisu zainteresowanych jest wiele osób, a studenci piszą prace na ten temat, które łatwo można przeczytać w Internecie, np. Text Prediction and Classification Using String Matching nie robiąc nic w tym kierunku prawdopodobnie stawiamy się za dinozaurami w najbliższej przyszłości. Obstawiać należy, że w przyszłości rozwinie się rynek tabletów i innych urządzeń, do których dane na powrót będzie się wprowadzać ręcznie - zatem opracowanie systemów szybkiego i nie męczącego pisania staje się coraz ważniejsze.
\ No newline at end of file

host:1304879841=85.219.142.84
author:1304879533=
diff:1304879533:1304878944:=5,7c5,7

 '''''W tej chwili pracujemy oddzielnie nad dwiema wersjami Lewiskryptu. Brewiskrypt nie wyszedł z fazy przedkoncepcyjnej.'''''

 

 
---
> W tej chwili pracujemy oddzielnie nad dwiema wersjami Lewiskryptu. Brewiskrypt nie wyszedł z fazy przedkoncepcyjnej.
> 
> 
15,18c15,18

 Lewiskrypt to nazwa, jaką zarezerwowaliśmy dla alfabetu stenograficznego. Pochodzi od słów ''levis'' - lekko i ''scripto'' - pisać. Czyli ''Lekkopis''. To oddaje nasz cel, chyba bez potrzeby dalszych wyjaśnień. Warto dodać, że cechą podstawową Lewiskryptu ma być możliwość pisania pełnego tekstu, bez żadnych skrótów. Skrótowanie zapisu, dla zwiększenia prędkości, ma być dostępna dla chętnych, którzy zechcą wznieść się na "wyższy poziom wtajemniczenia" w stenografii.

 

 

 
---
> Lewiskrypt to nazwa, jaką zarezerwowaliśmy dla alfabetu stenograficznego. Pochodzi od słów levis - lekko i scripto - pisać. Czyli Lekkopis. To oddaje nasz cel, chyba bez potrzeby dalszych wyjaśnień. Warto dodać, że cechą podstawową Lewiskryptu ma być możliwość pisania pełnego tekstu, bez żadnych skrótów. Skrótowanie zapisu, dla zwiększenia prędkości, ma być dostępna dla chętnych, którzy zechcą wznieść się na "wyższy poziom wtajemniczenia" w stenografii.
> 
> 
> 
23,34c23,34

 * opracować "fonetykę przedszkolną" oddającą w podstawowy sposób fonetykę polską i przypasować im znaki - http://grzegorj.w.interia.pl/gram/pl/fonemy2.html - ''zrobione, ale dla każdej wersji trzeba

 to robić raz jeszcze''

 * opracować statystykę częstości występowania poszczególnycych znaków dla jak największych próbek tekstowych - ''skrypty napisane, trzeba napisać od nowa''

 * opracować statystykę częstości występowania par znaków - ''zrobione na podstawowym poziomie''

 * statystykę częstości występowania trójek znaków - ''zrobione na podstawowym poziomie''

 * zdefiniować najczęstsze jedynki, dwójki i trójki inicjalne - ''zrobione na podstawowym poziomie''

 * zdefiniować najczęstsze jedynki, dwójki i trójki finalne - ''zrobione na podstawowym poziomie''

 * opracować tablicę lubi-nielubi dla dwójek i trójek - ''zrobione na podstawowym poziomie''

 * opracować słownik jedno-dwusylabowych wyrazów funkcyjnych, zaimków, przyimków, partykuł - ''rozgrzebane''

 

 

 
---
> * opracować "fonetykę przedszkolną" oddającą w podstawowy sposób fonetykę polską i przypasować im znaki - http://grzegorj.w.interia.pl/gram/pl/fonemy2.html - zrobione, ale dla każdej wersji trzeba
> to robić raz jeszcze
> * opracować statystykę częstości występowania poszczególnycych znaków dla jak największych próbek tekstowych - skrypty napisane, trzeba napisać od nowa
> * opracować statystykę częstości występowania par znaków - zrobione na podstawowym poziomie
> * statystykę częstości występowania trójek znaków - zrobione na podstawowym poziomie
> * zdefiniować najczęstsze jedynki, dwójki i trójki inicjalne - zrobione na podstawowym poziomie
> * zdefiniować najczęstsze jedynki, dwójki i trójki finalne - zrobione na podstawowym poziomie
> * opracować tablicę lubi-nielubi dla dwójek i trójek - zrobione na podstawowym poziomie
> * opracować słownik jedno-dwusylabowych wyrazów funkcyjnych, zaimków, przyimków, partykuł
> 
> 
> 
39,44c39,44

 * od początku zestawy znaków mają być wersjonowane! - ''zrobione na podstawowym poziomie''

 * tablica, które znaki "się lubią", a które się "nie lubią" - ''zrobione na podstawowym poziomie''

 * na podstawie tablicy "lubi-nie lubi" zestawionej ze statystyką par-trójek ocenić przydatność danego zestawu znaków - ''zrobione na podstawowym poziomie''

 * czynności powyższe powtarzać aż do uzyskania satysfakcjonującej wersji 1.0 znaków - ''zrobione na podstawowym poziomie''

 * rozwój systemu znakowego w wersjach, w tym uzupełnianie go o znaki specjalne - ''zrobione na podstawowym poziomie''

 * testować alfabet na materiałach ze strony: http://grzegorj.w.interia.pl/gram/pl/gram00.html, szczególnie w gabinecie osobliwości - ''testowane na bieżąco, nie tylko na tym''
---
> * od początku zestawy znaków mają być wersjonowane! - zrobione na podstawowym poziomie
> * tablica, które znaki "się lubią", a które się "nie lubią" - zrobione na podstawowym poziomie
> * na podstawie tablicy "lubi-nie lubi" zestawionej ze statystyką par-trójek ocenić przydatność danego zestawu znaków - zrobione na podstawowym poziomie
> * czynności powyższe powtarzać aż do uzyskania satysfakcjonującej wersji 1.0 znaków - zrobione na podstawowym poziomie
> * rozwój systemu znakowego w wersjach, w tym uzupełnianie go o znaki specjalne - zrobione na podstawowym poziomie

> * testować alfabet na materiałach ze strony: http://grzegorj.w.interia.pl/gram/pl/gram00.html, szczególnie w gabinecie osobliwości

host:1304879533=85.219.142.84
author:1304878944=
diff:1304878944:1304878944:=1,182d0

#Założenia projektowe

 

 Pierwsza wersja tego dokumentu została spisana już prawie dwa lata temu (czyli w drugiej połowie 2009 roku). Wiele się od tamtej pory nauczyliśmy, nie mamy już złudzeń, że stworzenie idealnego polskiego systemu stenograficznego to taka sama łatwizna, jak dla języka angielskiego. Niektóre niżej wyszczególnione założenia się zdezaktualizowały (niewiele), na inne kładziemy mniejszy nacisk. Długa droga przed nami, nadziei jednak nie tracimy.

 

 W tej chwili pracujemy oddzielnie nad dwiema wersjami Lewiskryptu. Brewiskrypt nie wyszedł z fazy przedkoncepcyjnej.

 

 

 (:htoc Spis treści :)

 

 

## System stenograficzny - Lewiskrypt

 

 

 

 Lewiskrypt to nazwa, jaką zarezerwowaliśmy dla alfabetu stenograficznego. Pochodzi od słów levis - lekko i scripto - pisać. Czyli Lekkopis. To oddaje nasz cel, chyba bez potrzeby dalszych wyjaśnień. Warto dodać, że cechą podstawową Lewiskryptu ma być możliwość pisania pełnego tekstu, bez żadnych skrótów. Skrótowanie zapisu, dla zwiększenia prędkości, ma być dostępna dla chętnych, którzy zechcą wznieść się na "wyższy poziom wtajemniczenia" w stenografii.

 

 

 

## Podstawowa praca badawcza

 

 

 

 * opracować "fonetykę przedszkolną" oddającą w podstawowy sposób fonetykę polską i przypasować im znaki - http://grzegorj.w.interia.pl/gram/pl/fonemy2.html - zrobione, ale dla każdej wersji trzeba

 to robić raz jeszcze

 * opracować statystykę częstości występowania poszczególnycych znaków dla jak największych próbek tekstowych - skrypty napisane, trzeba napisać od nowa

 * opracować statystykę częstości występowania par znaków - zrobione na podstawowym poziomie

 * statystykę częstości występowania trójek znaków - zrobione na podstawowym poziomie

 * zdefiniować najczęstsze jedynki, dwójki i trójki inicjalne - zrobione na podstawowym poziomie

 * zdefiniować najczęstsze jedynki, dwójki i trójki finalne - zrobione na podstawowym poziomie

 * opracować tablicę lubi-nielubi dla dwójek i trójek - zrobione na podstawowym poziomie

 * opracować słownik jedno-dwusylabowych wyrazów funkcyjnych, zaimków, przyimków, partykuł

 

 

 

## Zestaw znaków pozwalających na szybkie pisanie.

 

 

 

 * od początku zestawy znaków mają być wersjonowane! - zrobione na podstawowym poziomie

 * tablica, które znaki "się lubią", a które się "nie lubią" - zrobione na podstawowym poziomie

 * na podstawie tablicy "lubi-nie lubi" zestawionej ze statystyką par-trójek ocenić przydatność danego zestawu znaków - zrobione na podstawowym poziomie

 * czynności powyższe powtarzać aż do uzyskania satysfakcjonującej wersji 1.0 znaków - zrobione na podstawowym poziomie

 * rozwój systemu znakowego w wersjach, w tym uzupełnianie go o znaki specjalne - zrobione na podstawowym poziomie

 * testować alfabet na materiałach ze strony: http://grzegorj.w.interia.pl/gram/pl/gram00.html, szczególnie w gabinecie osobliwości

 

 

 

## Oprogramowanie

 

 

 

 * Czcionka OpenType, TrueType do pisania stenograficznego (łączenie można prawdopodobnie zdefiniować przez ligatury)

 * Rozwój czcionki dla objęcia jak największej liczby znaków

 * Program dokonujący transkrybcji tekstu bieżącego na fonetykę przedszkolną

 * Program dokonujący transkrybcji tekstu fonetycznego na stenograficzny

 

 

 

 

## System tachygraficzny - Brewiskrypt

 

 

 

 

 Brewiskrypt to nazwa zarezerwowana dla kompletnej metody skrótowego zapisu, bez uwzględnienia alfabetu, w jakim ten zapis będzie prowadzony. Pochodzi od słów brevis - krótko i scripto - pisać. A zatem krótkopis. Celem naszym jest stworzenie brewiskryptu, który będzie mógł znaleźć zastosowanie także w maszynopisaniu. Czasy dzisiejsze nakazują, aby system był na tyle logiczny i spójny, aby dało się dokonywać transkrybcji w obie strony przy pomocy programu komputerowego - to dopiero uczyni brewiskrypt naprawdę użytecznym.

 

## Stworzenie słowników istniejących i użytecznych abrewiatur i akronimów i skrótowców

 

 * http://pl.wikipedia.org/wiki/Skr%25C3%25B3t

 * W tym skrótów "internetowych", w tym emotów

 

 

 

## Stworzenie jednolitego systemu tworzenia nowych skrótów

 

 

 

 do rozważenia kwestie:

 suspensja - http://pl.wikipedia.org/wiki/Odci%25C4%2599cie

 * kontrakcja -http://pl.wikipedia.org/wiki/Kontrakcja_%2528skr%25C3%25B3t%2529

 * znaki specjalne - http://pl.wikipedia.org/wiki/Znaki_specjalne

 * skrótowiec - http://pl.wikipedia.org/wiki/Skr%25C3%25B3towiec

 * abrewiatura - http://pl.wikipedia.org/wiki/Abrewiatura

 * skrót - http://pl.wikipedia.org/wiki/Skr%25C3%25B3t

 * dla powyższych trzeba napisać skrypty przetwarzające tekst wg ich reguł i budujące statystyczne listy porównawcze dla rozpoznania, czy dana metoda jest skuteczna dla wszystkich wyrazów, wielu lub tylko niewielu.

 * rozważyć kwestię złożeń skrótowców dla oddania złożeń, np. jeżeli mamy skrót słowa język (jzk) i słowa znawca (znwc), to czy czytelne jest złożenie jzkznwc, i czy sensowne jest poddanie go kolejnej procedurze skrótowania, np. jznwc.

 * rozpatrzyć techniki skrótowania używane w istniejących polskich systemach stenograficznych, odsiać metody typowe dla danego systemu, oparte o kształt liter systemu

 

 

 

## Prace badawcze

 

 

 

 * stworzenie statystyki częstości występowania poszczególnych słów dla określenia pilności opracowania słowników skrótów dla poszczególnych wyrazów

 ** ogólnej

 ** literackiej

 ** internetowej-potocznej

 ** dziennikarskiej

 ** urzędowej

 ** biznesowej

 

 ''Odłożyć na później''

 

 

 

## Oprogramowanie

 

 

 

 

 * do przetwarzania tekstu bieżącego w skrótowany i skrótowanego w bieżący

 * opracowanie czcionki tachygraficznej, ideowo można się oprzeć o 

 ** Graffiti Palma starego rodzaju - http://en.wikipedia.org/wiki/Graffiti_%2528Palm_OS%2529

 ** Graffiti 2 Palma - http://en.wikipedia.org/wiki/Graffiti_2

 ** Moon Type - http://en.wikipedia.org/wiki/Moon_type, http://www.omniglot.com/writing/moon.htm

 

 

 

## Promocja projektu

 

 

 

 * Strona www - powstała i rozwija się

 * Zarezerwować domeny

 ** www.stenografia.pl - zrobione

 ** www.tachygrafia.pl - odłożone na później

 * Przygotować serwis w np. joomli z prezentacją zagadnień - zrobione za pomocą google-sites

 

 

 

## Budowanie społeczności projektu

 

 

 

### Stenografowie

 

 * Pomoc zawodowych i wyuczonych stenografów na pewno się przyda

 * Stowarzyszenie Stenografów, Maszynistek i Sekretarek - wsparcie, dokumenty, artykuły, pomoc dydaktyczna, opracowanie wymogów technicznych, kwalifikacje umiejętności

 

 

 

### Programiści

 

 * modyfikacja istniejących programów

 * opracowanie programu czytającego stenograficzne pismo odręczne i przetwarzającego je w tekst fonetyczny

 * rozwinięcie powyższego w translator z odczytem skrótów i przetwarzaniem w tekst bieżący

 

 

 

### Językoznawcy

 

 * opracowują na nowo wszystkie aspekty językoznawcze projektu

 * przedszkolna fonetyka

 * metody skrótowania

 

 

 

### Zecerzy i graficy

 

 * rozwijają czcionkę stenograficzną

 * rozwijają czcionkę tachygraficzną

 

 

 

### Użytkownicy

 

 * wyłapują pojedyncze błędy w specyficznych zastosowaniach

 * dzielą się własnymi rozwiązaniami i usprawnieniami

 

 

 

## Edukacja

 

### Szkolenia

 

 * Podręcznik do stenografii - lewiskrypt+brewiskrypt

 * Podręcznik do brewiskryptu

 

## Uwagi natury ogólnej

 

 Należy pamiętać o tym, że nasz projekt nie jest niczym naprawdę innowacyjnym, czy w ogóle nowym. W krajach anglosaskich sprawą szybkiego zapisu zainteresowanych jest wiele osób, a studenci piszą prace na ten temat, które łatwo można przeczytać w Internecie, np. Text Prediction and Classification Using String Matching nie robiąc nic w tym kierunku prawdopodobnie stawiamy się za dinozaurami w najbliższej przyszłości. Obstawiać należy, że w przyszłości rozwinie się rynek tabletów i innych urządzeń, do których dane na powrót będzie się wprowadzać ręcznie - zatem opracowanie systemów szybkiego i nie męczącego pisania staje się coraz ważniejsze.
\ No newline at end of file

host:1304878944=85.219.142.84
