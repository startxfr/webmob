#!/bin/bash


# Depuis le répertoire du sdk
#----------------------------

# Pour créer une application (ou plutot un projet) et préparer l'environement 
sencha generate app mybd ../mybd


# Depuis le répertoire de notre projet 
# ------------------------------------

# pour créer une version de prod dans le répertoire ../prod 
sencha app build production ../prod
# pour créer une version native sur les Android et iPhone
sencha app build native ../native
# pour créer une version de debug (faibles performances)
sencha app build testing ../testing

# pour créer un model à la ligne de commande
sencha generate model BD --fields=id:int,titre,auteur
