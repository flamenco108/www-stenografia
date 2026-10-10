#!/bin/bash
set -e

# Wczytaj zmienne środowiskowe z pliku .env
if [ -f .env ]; then
  export $(cat .env | xargs)
fi

OUTPUTDIR="public"

if [ ! -d "$OUTPUTDIR" ]; then
  echo "Błąd: Katalog $OUTPUTDIR nie istnieje. Zbuduj stronę komendą: make build"
  exit 1
fi

# Zdefiniuj katalogi i wzorce, których lftp MA NIE DOTYKAĆ na serwerze
# Pozostaw slash na początku lub gwiazdki w zależności od potrzeb
EXCLUDES=(
  --exclude "^podreczniki/"
  --exclude "googlec9011*"
#  --exclude "^pliki/"
#  --exclude "\.zip$"
#  --exclude "\.iso$"
)

echo "Wysyłanie plików na serwer $FTP_HOST (z ochroną wybranych katalogów)..."

lftp ftp://$FTP_USER:$FTP_PASSWORD@$FTP_HOST -e "
  mirror -R --delete --verbose \
    ${EXCLUDES[*]} \
    $OUTPUTDIR $FTP_TARGET_DIR;
  quit
"

echo "GOTOWE!"