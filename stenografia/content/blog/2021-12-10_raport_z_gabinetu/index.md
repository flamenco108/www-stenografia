---
Title: Raport z gabinetu
Date: 2021-12-10T23:59:59
Author: Krzysztof Stenografow
kategorie: ["plover", "stenotypia"]
---

Prace nad tzw. teorią, czyli metodyką i słownikami stenotypii chwilowo zwolniły bieg. Przyczyną są kłopoty ze zdrowiem, jakich doświadcza główny mózg projektu, czyli Priscilla. Ale zaskoczyło mnie, że przestrzeń informacyjna poruszyła się na innych, dotychczas trochę zaniedbanych przeze mnie (z przyczyny, że się po prostu na tym nie znam) polach.

Mianowicie skontaktowało się ze zmną dwóch pasjonatów od programowania i elektroniki. 

## Kos (nie Janek)

[Jeden z nich (deʃhipu)](https://hackaday.io/deshipu) jest specem od projektowania klawiatur - hobbystycznie, przypuszczam, że roboczo zajmuje się innymi rzeczami. [Na jego stronie w serwisie Hackaday](https://hackaday.io/deshipu) można znaleźć kilka ciekawych projektów. Tak czy owak, krótka wymiana mejli i pogaduchy na discordzie przyniosły błyskawiczne owoce: Radomir zaprojektował [klawiaturę do samodzielnego montażu](https://github.com/deshipu/kos-steno) (o nazwie *Kos*), na której będzie można uczyć się polskiej stenotypii.

{{< figure src="kos01_pcb.jpg" title="Połączone ze sobą dwie płytki - skrzydełka, widać zespół Arduino oraz diody." >}}

Projekt moim zdaniem nie jest bardzo łatwy do realizacji, gdyż wymaga nie tylko pewnych umiejętności, ale chyba też trochę doświadczenia w pracy z elektroniką. Mianowicie składa się z dwóch identycznych, połączonych ze sobą płytek. Przypuszczam, że dla nowicjusza (czyli np. dla mnie) nie będzie to trywialne zadanie.

{{< figure src="kos02_pcb.jpg" title="Klawiatura w całości, z przełącznikami - klawiszami." >}}

Dlatego poprosiłem o pomoc sąsiada, który pasjami zajmuje się lutowaniem różnych różności. Przy okazji dowiem się, jakie narzędzia trzeba posiadać, aby w ogóle zabierać się do takiej zabawy.

{{< figure src="kos03.jpg" title="W porównaniu z dłonią wydaje się malutka - ale taka ma być." >}}

Całość, czyli wszystkie elementy składające się na klawiaturę, wedle cen sprzed tygodnia nie kosztują więcej niż około 50USD (czyli dolarów amerykańskich). Taniej nie będzie! Przyzwyczailiśmy się, że klawiaturę można kupić już za 15 złotych (albo 3 dolary). Ale dotyczy to towarów produkowanych na tysiące. A tutaj mamy do czynienia z produktem niszowym.

Trzeba się trochę pokręcić po necie, żeby zdobyć komponenty. Niektóre można zamówić w Chinach, ale inne są dostępne na polskim serwisie handlowym. Docelowo [zostanie opublikowana dokumentacja](https://github.com/deshipu/kos-steno), na podstawie której będzie można wszystko zgromadzić i zabrać się do lutowania. Lub poprosić o pomoc dobrego wujaszka.

{{< figure src="kos04.jpg" title="Spodnia strona klawiatury." >}}

Na razie czekam na płytki, które Deshipu do mnie wysłał. Jadą do mnie zwykłą pocztą, co w okresie przedświątecznym może oznaczać naprawdę różne rzeczy. 

W międzyczasie zamówiłem już w Chinach: 

 - [przełączniki niskoprofilowe Kailh Purpz (tu nie ma błędu ortograficznego)](https://www.aliexpress.com/item/1005002656209068.html)
 - [nakładki na klawisze, te czarne](https://www.aliexpress.com/item/32979973961.html). 

Do tego muszę jeszcze domówić na Alledrogo:

 - [Arduino Pro Micro](https://allegro.pl/listing?string=arduino%20pro%20micro)
 - [diody 1N4148](https://allegro.pl/kategoria/prostownicze-pojedyncze-67521?string=dioda%201N4148)

Przy tych diodach koszt wysyłki przekracza znacznie cenę 50szt. No, *trudno* się mówi.

Po głowie kołaczą mi się jeszcze rozmyślania, jak uczynić tę klawiaturę bardziej odporną na stres (czyli np. niełamliwą). Ale odkładam konkrety na spotkanie z kolegą-elektronikiem, może on coś poradzi.

## Wtyczka (nie szpieg) polska

Drugi pasjonat (znajdziecie go, kiedy włoży swoje dukaty do [projektu polskiej wtyczki](https://github.com/flamenco108/plover_polish_slowik/)) zainteresował się kwestią stworzenia [gotowej wtyczki do programu Plover](https://github.com/flamenco108/plover_polish_slowik/). Mianowicie program ten domyślnie dopasowany jest do obsługi stenotypii w języku angielskim, przy pomocy klawiatury amerykańskiej (Warda Irelanda), [prezentowałem to we wcześniejszych wpisach]({{<ref path="2021-07-08_stenotypia-przypomnienie-filozofii">}}). 

Tymczasem każdy język ma swoje specyficzne wymagania. Całkiem nieźle, jeżeli [można użyć takiej samej klawiatury, ale poprzestawiać niektóre klawisze (albo je inaczej ponazywać)]({{<ref path="2011-08-26_miedzynarodowe-klawiatury-stenotypiczne">}}). Pół biedy, jeżeli układ klawiszy się zmienia, ale nie zmienia się ich liczba. Ale co robić, kiedy sam język wymusza większą liczbę klawiszy, inne ich ustawienie? Dzięki pracy *Priscilli E. Trillo*, dorobiliśmy się już klawiatur słowiańskich, rosyjskiej oraz zachodniosłowiańskiej (czyli m.in. polskiej).

{{< figure src="Stenotype_pl_layout.png" title="Klawiatura zachodniosłowiańska czyli polska" >}}

Jak ma sobie z tym radzić Plover? Otóż właśnie poprzez tzw. wtyczki, czyli takie jakby *podprogramiki*, które mówią głównemu programowi, jak ma się zmienić jego zachowanie, aby odpowiadało potrzebom użytkownika. 

Każdy język zatem, który dorobi się własnej metody stenotypii, ma posiadać taką wtyczkę, aby można było łatwo ją włączyć i nie kombinować, tylko zabierać się od razu do stenotypowania. Inne wtyczki zawierają instrukcje działania dla różnych urządzeń, albo pozwalają uczyć się stenotypii przy użyciu programu Plover, albo... Robią mnóstwo innych rzeczy.

{{< figure src="spectra-lexer.png" title="Przykład działania wtyczki Spectra Lexer (completion)" >}}

Wtyczka językowa zawiera minimum instrukcji, czyli układ klawiatury oraz słowniki. Czasami, jeżeli to jest niezbędne, także różne, różniste reguły ortograficzne.

Wiedzieliście, że fachowcy doliczyli się ponad 2500 języków na świecie? Mowa o tych w ciągłym użyciu, martwe zostawiono na stronie. Nieźle? I każdy z nich ma swoją specyfikę, swoje wymagania. I znajdą się one we wtyczkach, o ile ktoś zechce stworzyć dla nich metodę stenotypii.

{{< figure src="new_plugins_manager.png" title="W Plover można znaleźć już całe mnóstwo wtyczek." >}}

Zatem, jak wspomniałem wyżej, zabieramy się do tworzenia wtyczki dla języka polskiego. Ponieważ sama metoda polska jeszcze nie jest zakończona, zajmiemy się też wsparciem dla Priscilli. Jest co robić. Kto ma ochotę i możliwości, oczywiście jest zaproszony do współpracy: **[>>TUTAJ<<](https://github.com/flamenco108/plover_polish_slowik/)**