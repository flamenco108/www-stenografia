---
Title: Wielkie przyspieszenie
Date: 2022-02-15T23:59:59
Author: Krzysztof Stenografow
kategorie: ["plover", "stenotypia"]
---

Tak, wiem dobrze, że aby utrzymać oglądalność bloga lub jakiejkolwiek innej strony, należy bezwzględnie i regularnie publikować, publikować, publikować, najlepiej codziennie, albo co tydzień, ale nie co miesiąc. I do tego wrzucać linki na fejszbuka i inne media społecznościowe, bo bez tego już nikt tej strony nie znajdzie. I tak dalej.

Ale co robić, jeżeli prace po świątecznym relaksie niespodziewanie przyspieszyły (niestety, Priscilla wciąż milczy, a chciała jeszcze dokonać dość poważnych zmian w podstawach metody), a roboty pojawiło się tyle, że człowiek nie wie, w co ręce włożyć. Projekt stenotypii polskiej nabiera coraz głębszych kolorów. I jednocześnie coraz lepiej widzę, jakie morze pracy jeszcze przed nami.

## Kooperacja czyli wspólna praca nad wspólnym dziełem

Nigdy nie miałem motywacji, aby autorstwo stenotypii przypisać sobie i tylko sobie. Zawsze uważałem to za projekt dla społeczeństwa (społeczności), w którym może wziąć udział każdy, kto ma coś pożytecznego do oddania. Zatem bardzo mnie ucieszyło, kiedy Priscilla M. Trillo wzięła i załatwiła problem, z którym sam borykałem się od miesięcy: podjęła decyzję, jak ma wyglądać plan klawiatury. I od tej pory, lepszy on lub gorszy, wszystko jedno: pracujemy na nim. Pewien problem mamy odfajkowany.

Ale na tym się nie skończyło. Opublikowałem zaczątek [wtyczki](https://pl.wikipedia.org/wiki/Wtyczka) dla [polskiego systemu na oprogramowaniu Plover. Wrzuciłem to na GitHub](https://github.com/flamenco108/plover_polish_slowik) z myślą, że co się uda, to się uda, a człowiek, choć już coraz starszy, to przecież jeszcze paru nowych rzeczy może się nauczyć. No i okazało się, że [pojawił się specjalista o niedosiężnych dla mnie talentach](https://github.com/Maarrk) (choć raczej nie dzięki tej publikacji a poprzez [forum użytkowników Plover](https://discord.com/channels/136953735426473984/136953735426473984)), który podobnie jak Priscilla z układem klawiatury, nagłosami i wygłosami, z łatwością rozwiązał już spory worek problemów, które dla mnie stanowiły przeszkody bardzo trudne do pokonania. I nagle wszystko stało się prostsze, ale o tem potem.

Chcę tutaj wyjaśnić, że dzięki niemu uczę się trudnej sztuki współtworzenia projektów społecznościowych. Jako inicjator jestem w pewnym sensie gospodarzem całej masy dokumentów, skryptów i wszelkiego informatycznego śmiecia, jaki się gromadzi w procesie twórczym. Ale nie o to chodzi, że muszę w tym sprzątać (wszyscy to mogą robić). Chodzi o to, że inni członkowie społeczności mogą dorzucać do projektu nowe materiały i rozwiązania. A ja jako gospodarz muszę je przeglądać i zatwierdzać. Tak to działa w systemie [GIT](https://git-scm.com/), o który oparty jest [GitHub](https://github.com/). I nie omieszkam powiedzieć, że już sam ten proces jest dostatecznie interesujący i niesie ze sobą nowe nauki.

Tak czy owak w ten sposób projekt stenotypii polskiej przestał być już tylko moim prywatnym dłubaniem, a naprawdę ***stał się własnością wszystkich***, którzy chcą go ***tworzyć***, **lub** w przyszłości z niego ***korzystać*** (LUB to [operator](https://pl.wikipedia.org/wiki/Operator_logiczny) logiczny [alternatywy](https://pl.wikipedia.org/wiki/Alternatywa), czyli jest prawdziwy, gdy co najmniej jedno ze zdań, które łączy/dzieli, jest prawdziwe, a zatem można też metodę budować, aby później jej używać).

{{< figure src="treal-literki.png" title="Uczmy się układu klawiatury" >}}

## Teoria czy system

Jeszcze króciutko o tym. W świecie anglojęzycznym dla opisu systemu, czyli metody stenotypii (konkretnej, których dla danego języka może być więcej niż jedna), używa się słowa *theory*, co na nasze przekłada się *teoria*. Ale po angielsku słowo to ma [bardzo wiele dobrze zdefiniowanych znaczeń](https://en.wikipedia.org/wiki/Theory_(disambiguation)), z których pewnie coś tutaj pasuje. Po polsku pojęcie to ma nieco [węższe znaczenie](https://pl.wikipedia.org/wiki/Teoria) (choć też dość szerokie). Dlatego z punktu widzenia zgodności z obserwowalnymi faktami (a [prawda](https://encyklopedia.pwn.pl/haslo/prawda;3961806.html) to przecież właśnie zgodność opinii z obserwacjami) lepszym słowem dla opisu metody stenotypii po polsku wydaje się **[system](https://pl.wikipedia.org/wiki/System)**.

## Postępy w teorii czyli systemie

Jak już wyżej wspomniałem, dzięki nieocenionej pomocy [Maarrka](https://github.com/Maarrk) mogliśmy posunąć projekt o całe kilometry. Coś, co dla mnie było bardzo trudne (choć dzięki temu obiecywało długie miesiące żmudnej nauki nowych umiejętności), dla niego to łatwizna. W ten sposób w projekcie powstała osobna gałąź, w której zaczęliśmy gromadzić surowce dla nowego systemu. 

Prace idą wartko. Zadaję pytanie, *Maarrk* najdalej za kilka dni dostarcza odpowiedź.

Pozwolę sobie zacytować fragment roboczej rozmowy, który zobrazuje, jak wygląda taka współpraca:

### Fragment roboczej rozmowy

--------

##### flamenco108 — 09.02.2022

Tkwię ciągle w tej zagwozdce, ale przyszła mi jeszcze jedna myśl do głowy, coś co dla Ciebie prawdopodobnie jest możliwe: skrypt przesiewający słownik pod kątem złożeń, które NIE WYSTĘPUJĄ, albo występują rzadko, a są łatwe w użyciu. Tzn. niektóre aktualne kombinacje klawiszy są co prawda logicznie poprawne, ale stenograficznie skomplikowane - i jak na złość popularniejsze od tych prostych (dlatego Trillo mi spadła z nieba i przecięła węzeł gordyjski, w który ja byłem zaplątany, bo wahałem się między logiczną poprawnością kombinacji klawiszy, a związkiem między prostotą akordu i częstością jego występowania - z braku umiejętności wiele obliczeń musiałem robić na piechotę i to trwało). I może warto by opracować możliwość ich nie używania, a używania innych zamiast. Exemplum:

```
trz.: TRJ (częsty)
trw: TVR (średni)
trzc.: ZTRJ (rzadki - bo tylko trzcina lub Trzciana)
drz.: XTRJ (częsty)
drw.: XTVR (rzadki - drwa, drwal)
drwi.: XKTVRJ (średni, ale w zasadzie tylko pochodne "drwić")
```

Dźwięczne zostały udźwięcznione przez dodanie `X`. A może po rozpatrzeniu się we wszystkim, odejść od tej logiki i udźwięczniać innymi sposobami?

```
wc.: ZTV (średnio rzadki, wcale i co?)
wch: FKT (rzadki)
wchł: FKTLJ (rzadki)
-: FZ (nie występuje)
-: FZK (nie występuje)
-: FZKT (nie występuje)
```

Oczywiście to pieśń przyszłości, na razie bardziej przeczucie niż dopracowana myśl.

Z całą pewnością operacja z oszukiwaniem dotyczyć będzie tylko niektórych obiektów, które są dość niewygodne w użyciu: kombinacje `XFKTPVLR` - krótki mały palec zostaje gdzieś z lewej, a tu trzeba kombinować po prawej stronie. Jak wiesz, trudno jest rozsunąć serdeczny od środkowego, one pozostają w bliskości. 

A gdyby dało się poznać nie używane kombinacje `ZSKTPVLR` lub `XFZSKTPV`, to może coś by się z tego dało zrobić? 

##### Maarrk — 09.02.2022
Mogę Ci napisać skrypt któremu dajesz klawisze i słownik, a wypisuje nieużyte nigdzie kombinacje tych klawiszy. Musisz mu powiedzieć, o które chodzi, żebym nie pisał kilku osobnych dla lewej strony, prawej strony i środka, a przecież nie może wziąć pod uwagę wszystkich, bo tego jest 200 mld.

Proponuję taki interfejs użytkownika:

```
python3 wolne_kombinacje.py "ZSKTPVLR" --slownik="spektralny-slowik.json"
LUB
python3 wolne_kombinacje.py "ZSKTPVLR" --teoria="rules.cson"
```

--------

{{< figure src="pl_layout.png" title="XFZSKTPVLR JE~*IAU CRLBSGTWOY" >}}

### Troszeczkę o technikaliach

*Maarrk* z marszu opracował polską wersję [wtyczki Spectra Lexer](https://github.com/fourshade/spectra_lexer), która będzie nieocenioną pomocą dydaktyczną, zarówno dla początkujących, jak i zaawansowanych użytkowników. A dziś stała się naszą bazą, w której zamierzamy przechować wszystkie reguły systemu, począwszy od metody budowania sylab oraz innych cząstek słowotwórczych, przez reguły gramatyczne, ewentualne szczególne reguły pisania stenotypicznego, no po prostu całość.

Wtyczka ma to do siebie, że z natury właśnie potrafi coś takiego zrobić: przetworzyć surowe reguły systemu stenotypii na łatwe do strawienia dla niezainteresowanych sztuką programowania (a zapalonych do stenotypii) adeptów obrazy.

Zatem w pliku z regułami systemu zapisujemy:

```
  "b."    ["XP",    "b",                "", "ONSET",  "B- jak baba"],
  "bl.":  ["XPL",   "(b.)(l.)",         "", "ONSET",  "BL- jak blacha, blok"],
  "bli.": ["XPLI",  "(b.)(l.)(~i)",     "", "ONSET",  "BLI- jak blik, blizna"],
  "bł.":  ["XPLJ",  "(b.)(ł|l.)(|~j)",  "", "ONSET",  "BŁ- jak błogo, błache"],
  "br.":  ["XPR",   "(b.)(r.)",         "", "ONSET",  "BR- jak brąz, brat"],
```

A Spectra Lexer pokazuje nam:

{{< figure src="spectra-grzmot-sk.jpg" title="GRZMOT - widok na klawisze" >}}

{{< figure src="spectra-grzmot-ss.jpg" title="GRZMOT - jak budowane są dźwięki" >}}

{{< figure src="spectra-grzmot-st.jpg" title="GRZMOT - konkretne głoski" >}}

Oczywiście domyślacie się, że komputer to bardzo szybki kretyn: jeżeli nie dokonamy stosownych opisów w tym tajemniczym języku pokazanym wyżej, nie będzie umiał nic interesującego pokazać.

## Własny Kos

Trochę się to odwlekło (odwlokło?), ale w końcu się stało. [Deʃhipu](https://hackaday.io/deshipu) przysłał mi [płytki PCB](https://pl.wikipedia.org/wiki/P%C5%82ytka_drukowana) jeszcze w grudniu. Jednak Święta, święta, wyjazdy, rozjazdy, opróżnienie portfela z pieniędzy, pomyślałem sobie: *At, poczekam z tą sprawą do następnej wypłaty*. I tak zrobiłem. I dlatego dopiero teraz. A wcześniej i tak jeszcze pojawiły się niewielkie problemy z powodu nieporozumień.

{{< figure src="kos-bez-procka.jpg" title="Tak wyszło..." >}}

Kolega zaofiarował się, że zlutuje mi klawiaturę, jeżeli dostarczę mu wszystkie części. Jak rzekłem wyżej, w końcu się to stało. Następnego dnia dzwoni do mnie i pyta: 

"*Wszystko OK, tylko zupełnie nie wiedziałem, po co ci to Arduino, co znalazłem w pudełku...*"

Zapomniałem mu wysłać zdjęcie objaśniające tę sprawę...

Otóż Arduino, czyli układ z procesorem, jest niezbędny, żeby klawiatura nie była po prostu kawałkiem elektronicznego śmiecia, tylko aby komunikowała się z komputerem i czyniła swoją pracę. Wiecie, jak to jest, kiedy trzeba drugi raz wykonać tę samą robotę? Otóż słów mi brakło, gdy dziękowałem mu za to, że dwa dni później miałem już czynne urządzenie.

{{< figure src="kos-z-prockiem.jpg" title="Tak to wygląda już znacznie lepiej" >}}

Pozostało już tylko nałożyć nakładki, aby palce miały w co klepać i gotowe.

Zajęło mi jeszcze z pół godzinki, aby opanować sztukę tzw. *flashowania*, czyli nagrywania na układ niezbędnego oprogramowania (bez niego to dalej tylko elektroniczny śmieć). Opracował je również kolega [Deʃhipu](https://github.com/deshipu).

{{< figure src="kos-gotowy.jpg" title="Gotowy i działa" >}}

Wykorzystał dla niego nieco inną metodę komunikacji z komputerem, niż to czyni zwykła klawiatura, opracowaną przez firmę Gemini PR... Hmm... Po kwadransie guglania ustaliłem, że tak naprawdę nazywa się ona [Neutrino Group](https://www.infinitytraditional.com/), ale i to by nie wystarczyło, aby ją znaleźć. Z tajemniczych względów jej strona znajduje się pod zupełnie inną nazwą, nawet nie kojarzącą się ze stenografią ani stenotypią. A *Gemini PR* to nazwa protokołu komunikacyjnego (czyli takiego jakby języka, którym rozmawiają ze sobą nazwajem różne urządzenia) opracowanego przez tę firmę specjalnie do celów użycia w klawiaturach stenotypicznych. 

Czyli klawiatura *Kos v1.0* gada innym językiem niż zwykła klawiatura. Dzięki temu można na niej klepać stenotypicznie (trzeba jeszcze spełnić parę innych warunków, ale o tem potem), podczas gdy zwykła klawiatura nie "kłóci się", czyli obie nie wchodzą sobie w paradę. Znakomity układ, jeżeli ktoś dopiero się uczy stenotypii: może pisać na *Kosie*, a jeżeli zgubi słówko, albo nie zna, przenieść palce na zwykłe klawisze i dopisać, co potrzeba.

## Podsumowanie i zaproszenie

Pracy przy systemie stenotypii jest huk. Dzięki nieocenionej pomocy zdolnych inżynierów minęliśmy kilka pierwszych raf i wypłynęliśmy na szerokie wody. Teraz zaczęły się schody, czyli nic nas nie blokuje, trzeba teraz mozolnie opracować system i przepisać go do stosownych plików.

Kto ciekawy, a może chce pomóc, zapraszam do [repozytorium polskiej wtyczki do Plover na GitHub](https://github.com/flamenco108/plover_polish_slowik). Znajdziecie tam dwie gałęzie rozwojowe: *master* i *theory-dev*.

{{< figure src="github-master.jpg" title="Gałąź główna czyli MASTER" >}}

Pierwsza zawiera produkt finalny. Choć jeszcze nie gotowy, to właśnie w tym miejscu się on znajdzie, gdy zakończymy główne prace systemowe. Na razie są tam pierwsze pliki konfiguracyjne.

{{< figure src="github-theory-dev.jpg" title="Gałąź tworzenia systemu czyli THEORY-DEV" >}}

Gałąź druga zawiera dodatkowy katalog *theory-dev* i tu znajdziecie mnóstwo ciekawych rzeczy. Właśnie tutaj powstaje polski system stenotypii.

**Zapraszamy!**