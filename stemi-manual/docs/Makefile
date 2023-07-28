# Minimal makefile for Sphinx documentation
#

# You can set these variables from the command line, and also
# from the environment for the first two.
SPHINXOPTS    ?=
SPHINXBUILD   ?= sphinx-build
SOURCEDIR     = source
INPUTDIR      = source
BUILDDIR      = build
OUTPUTDIR     = build

FTP_HOST=stenografia.pl
FTP_USER=ksmirnow_stenografia
FTP_PASSWORD=\(Kal00mnia\)
FTP_TARGET_DIR=/web/stemi-manual

# Put it first so that "make" without argument is like "make help".
help:
	@$(SPHINXBUILD) -M help "$(SOURCEDIR)" "$(BUILDDIR)" $(SPHINXOPTS) $(O)

# wbudowane w sphinx, niepotrzebne
#clean:
#	[ ! -d $(OUTPUTDIR) ] || rm -rf $(OUTPUTDIR)

ftp_upload: html
	#lftp ftp://$(FTP_USER)@$(FTP_HOST) -e "mirror -R $(OUTPUTDIR) $(FTP_TARGET_DIR) ; quit"
	lftp ftp://$(FTP_USER):$(FTP_PASSWORD)@$(FTP_HOST) -e "mirror -R $(OUTPUTDIR)/html $(FTP_TARGET_DIR) ; quit"

.PHONY: help Makefile

# Catch-all target: route all unknown targets to Sphinx using the new
# "make mode" option.  $(O) is meant as a shortcut for $(SPHINXOPTS).
%: Makefile
	@$(SPHINXBUILD) -M $@ "$(SOURCEDIR)" "$(BUILDDIR)" $(SPHINXOPTS) $(O)

