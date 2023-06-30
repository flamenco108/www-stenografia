# Configuration file for the Sphinx documentation builder.
#
# For the full list of built-in configuration values, see the documentation:
# https://www.sphinx-doc.org/en/master/usage/configuration.html

# -- Project information -----------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#project-information

project = 'Podręcznik SteMi'
copyright = '2023, Krzysztof Stenografow Smirnow'
author = 'Krzysztof Stenografow Smirnow'
release = '0.1'

# -- General configuration ---------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#general-configuration

extensions = [
    'myst_parser',
    'sphinx_rtd_theme',
]

# file extensions and their interpreters
source_suffix = {
    '.rst': 'restructuredtext',
    '.txt': 'markdown',
    '.md': 'markdown',
}

myst_enable_extensions = [
    "amsmath",
    "attrs_inline",
    "colon_fence",
    "deflist",
    "dollarmath",
    "fieldlist",
    "html_admonition",
    "html_image",
    #"linkify",
    "replacements",
    "smartquotes",
    "strikethrough",
    "substitution",
    "tasklist",
]




templates_path = ['_templates']
exclude_patterns = []

language = 'pl'

# -- Options for HTML output -------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#options-for-html-output

html_favicon = 'favicon.ico'


## THEMES

### BOOK theme ###
#html_theme = "sphinx_book_theme"
### END BOOK theme ###

### FURO theme ###
# Install:
# pip install furo
# Activate:
#html_theme = 'furo'
### END FURO theme ###

#html_theme = 'alabaster'

#### bootstrap theme ###
#Install this theme:
#$ pip install sphinx_bootstrap_theme
#Activate:
import sphinx_bootstrap_theme
html_theme = 'bootstrap'
html_theme_path = sphinx_bootstrap_theme.get_html_theme_path()
### end bootstrap theme ###

### Stanford theme ###
#Install this theme:
#$ pip install sphinx-theme
# Activate:
#import sphinx_theme
#html_theme = 'stanford_theme'
#html_theme_path = [sphinx_theme.get_html_theme_path('stanford-theme')]
### End Stanford theme ###

### readthedocs theme ###
#Install:
#pip install sphinx_rtd_theme
# Activate:
#import sphinx_docs_theme
#html_theme = "sphinx_rtd_theme"
### END readthedocs theme ###

### documatt theme ###
# Install:
# pip install sphinx-documatt-theme
# Activate:
#html_theme = "sphinx_documatt_theme"
### END documatt theme ###

html_static_path = ['_static']
