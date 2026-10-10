HUGO := hugo
OUTPUTDIR := public

.PHONY: help build clean serve deploy

help:
	@echo 'Dostępne polecenia:'
	@echo '  make build      - buduje wersję produkcyjną strony'
	@echo '  make serve      - uruchamia serwer deweloperski'
	@echo '  make clean      - usuwa katalog wyjściowy public/'
	@echo '  make deploy     - buduje stronę i wysyła na serwer FTP'

clean:
	rm -rf $(OUTPUTDIR)

build: clean
	$(HUGO)

serve:
	$(HUGO) server --renderToMemory=false --disableFastRender

deploy: build
	./upload.sh

ftp_upload: deploy
