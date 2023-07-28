#!/bin/bash


FTP_HOST='stenografia.pl'
FTP_USER='ksmirnow_stenografia'
FTP_PASSWORD="\(Kal00mnia\)"
FTP_TARGET_DIR='web'

OUTPUTDIR='public'

#ftp_upload: publish
#lftp ftp://$(FTP_USER)@$(FTP_HOST) -e "mirror -R $(OUTPUTDIR) $(FTP_TARGET_DIR) ; quit"
#lftp ftp://$(FTP_USER):$(FTP_PASSWORD)@$(FTP_HOST) -e "mirror -R $(OUTPUTDIR) $(FTP_TARGET_DIR) ; quit" && echo "GOTOWE!"
lftp ftp://$FTP_USER:$FTP_PASSWORD@$FTP_HOST -e "mirror -R $OUTPUTDIR $FTP_TARGET_DIR ; quit" && echo "GOTOWE!"