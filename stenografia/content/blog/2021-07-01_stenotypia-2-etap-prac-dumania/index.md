---
Title: Stenotypia - drugi etap prac - dumania
Date: 2021-07-01T23:59:59
Author: Krzysztof Stenografow
kategorie: ["stenotypia", "plover", "dumania"]
---

## Drugi etap

W drugim etapie prac nad sporządzeniem polskiego systemu stenotypii miałem na bazie słownika i wynikających z niego sylab uczynić listę nagłosów i wygłosów. Otóż spieszę zawiadomić, że to uczyniłem. 

Musiałem przeryć się jeszcze raz przez słownik z ręczną robotą wspomaganą *[regexpem](https://pl.wikipedia.org/wiki/Wyra%C5%BCenie_regularne)*, co znowu mi trochę zajęło. W końcu stwierdziłem, że skończę to niekończące się poprawianie. W prawie 3 milionach wyrazów wrzucownych do słownika przez skrablistów naprawdę wszystko można znaleźć i prostowanie tego grozi przejściem na emeryturę przed zakończeniem drugiego etapu prac.

Uznałem, że zakończę, kiedy zostało mi zaledwie 480 obiektów wykrywanych metodą 

````
([aeouiyąęó]+)([a-z]*)([aeouiyąęó]+)([a-z]*)
````

czyli *jeżeli w grupie mamy 2 samogłoski, a pomiędzy niemi znajdywają się lub nie jakoweś insze głoski*. Były to głównie [dyftongi](https://pl.wikipedia.org/wiki/Dyftong) typu *zami**au**czeć*. A nie postanowiłem jeszcze do końca, co mam z nimi zrobić. Z jednej strony w szkole uczyli, aby je dzielić na sylaby, z drugiej, ze stenotypicznego punktu widzenia nie ma to sensu wcale a wcale. Więc to na razie zostawiłem. Nie przeszkadzało to wygenerować listy nagłosów i wygłosów, bo te zrobiłem komendami, które w skrócie przytaczam:

````
awk 'BEGIN {FS="[aeiouóyąę]"}{print $1}' > tmp/nag01
gawk -i inplace 'BEGIN {FS="[aeiouóyąę]"}{print $2}'  > tmp/nag02

cat tmp/nag01 | sort | uniq > $naglosy
cat tmp/nag02 | sort | uniq > $wyglosy
````

Zadziałało. Powstały dwie listy.

Nagłosów wyszło 564.

Wygłosów wyszło 434.

To stanowczo za dużo moim zdaniem. To jest prawie 1000 (słownie: tysiąc) obiektów, które musi przyswoić pamięć mięśniowa sterowania palcami i dłońmi na klawiaturze. Szczególnie, że z pobieżnego oglądu już widać, że podobnie jak wieloma zjawiskami życia rządzi tutaj **[zasada Pareta](https://pl.wikipedia.org/wiki/Zasada_Pareta): 20% (lub mniej nawet) nagłosów/wygłosów obsługuje 80% sylab.**

Przecież czym innym jest nagłos *strz-* (ponad 10 tysięcy wystąpień), którego można użyć do napisania słów takich jak *strzała*, *strzęp*, czy *tortmistrza*, a czym innym *bździ-* (68 wystąpień), którego można użyć ewentualnie do rozważań nad tym, co człowiekowi lubo kotu wypada spod ogona, albo [innych brudów](https://www.nck.pl/projekty-kulturalne/projekty/ojczysty-dodaj-do-ulubionych/ciekawostki-jezykowe/bzdziagwa-,c,50024).

Coś z tym trzeba będzie zrobić w następnych etapach prac.


### Co to jest nagłos i wygłos

Definicyjnie rzecz biorąc [sylaba składa się z trzech części](https://pl.wikipedia.org/wiki/Sylaba):

````
NAGŁOS+OŚRODEK+WYGŁOS
````

Nagłos zwany następem, co nasuwa mi moje rolnicze korzenie, wygłos zwany zestępem. Ośrodek sylaby to inaczej oczywiście - głos (lub wręcz *śródgłos*). Polski język naprawdę czasem jest zbyt elastyczny słowotwórczo. *Komu potrzebne wielokrotne nazwania dla części sylaby?* 

#### Nagłos

Nagłos to spółgłoska, ewentualnie grupa spółgłosek rozpoczynających sylabę. Może go nie być, jak w sylabach typu *a* (A=nia), *ed*, (Ed=ward), *u* (U=kra=i=na), etc. Może składać się z jednej, dwóch, trzech, a nawet czterech spółgłosek, czyli np. *s+o* (so=wa), *st+o* (sto=no=ga), *str+o* (stro=na), *strw+o* (strwo=żo=ny) - w tym ostatnim jest tak zwany *cheat* (czyli *czyt*), czyli takie małe oszustwo: toż jest to fonetyczne skrócenie słowa *zatrwożony*. Więc wrzućmy tu przykład skrajny, czyli nazwę własną: ***Strwiąż*** (*Strw'+ą+ż*) - którego *nota bene* w moim słowniku nie ma. Tu nie ma lipy. Ale za to widać, jakie cuda potrawią się zdarzyć w naszym ojczystym.



#### Wygłos

Wygłos to spółgłoska, ewentualnie grupa spółgłosek, które mogą, ale nie muszą kończyć sylabę. Jeżeli ich nie ma, mówimy o sylabie otwartej jak *ma*, *sa*. Kiedy się pojawia, sylaba się zamyka: *mas*, *san*.

Tutaj także może być od jednej do z pewnością trzech spółgłosek (a znacznie więcej liter):
*i+s* (mis), *i+st* (kist), *i+stš* (mistrz).

## Minęło kilka dni

Nie mając lepszego pomysłu, wróciłem do ręcznego poprawiania pliku słownika, aby wyskakiwało mniej dziwności. Te łatwo wyłapać z listy nagłosów i wygłosów: jeżeli znajduję nagłos *cż*, to raczej, wiecie, chyba algorytm źle podzielił sylabę. I mamy jeden nagłos za dużo. Wyszukuję, znajduję, że jest to np. *choćże* podzielone na *cho=ćże* - niby wszystko się zgadza z podstawowymi regułami dzielenia na sylaby, ale każde dziecko wie, że to źle. Zatem trzeba ręcznie to poprawić, więc piszę regexpa 
````
([aeiouyóąę])=ćż([aeiouyóąę])/([aeiouyóąę])ć=ż([aeiouyóąę])
````
i w ten sposób przestawiam znacznik dzielenia na sylaby od razu w np. 15 takich wystąpieniach w całym słowniku. Niby mało. Ale są też babole obejmujące całe tysiące wystąpień. A są też takie, które dotyczą zaledwie jednego - nie to że wyrazu w wielu formach gramatycznych, ale - wystąpienia. Np. znalazłem taki kwiatek jak *abst*. To chyba jakiś niemiecki stopień. Moim zdaniem skrabliści mocno przesadzili wstawiając ten wyraz do polskiego słownika. Podobnie zresztą jak setki zagranicznych miejsc geograficznych napisanych w ich oryginalnej ortografii. Z jednej strony nie wyczerpują listy miejsc geograficznych, z drugiej strony wprowadzają duży bałagan.

Tyle w pierwszym etapie drugiego etapu.
