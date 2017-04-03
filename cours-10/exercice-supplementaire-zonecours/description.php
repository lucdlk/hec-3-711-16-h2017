<?php

/**
 * Vous êtes en charge de gérer la portion de zonecours qui permet d'ajouter
 * des étudiants à un cours. Les cours peuvent accepter 60 étudiants, mais
 * pour le besoin de l'exercice, nous dirons qu'ils acceptent 10 étudiants
 * au maximum (le cours est complet après cela).
 *
 * En utilisant les scripts fournis :
 * 1. Script initialisation de la table inscriptions
 * 2. Script de SELECT de toutes les inscriptions
 * 3. Script d'ajout d'une inscription
 *
 * Vous devez développer une application permettant d'enregistrer un étudiant
 * à un cours. Pour des fins de simplification, la table représentera un cours
 * spécifique (pas de foreign key en lien avec une table de cours). Vous devrez
 * enregistrer le matricule et le nom de l'étudiant. Lorsqu'il y aura 10 lignes
 * dans la table des inscriptions, le cours sera complet.
 *
 * Vous devez afficher la liste des étudiants en-dessous du formulaire.
 *
 * De plus, vous devez, en haut du formulaire, afficher la quantité de places
 * restantes. Si aucune place n'est disponible, le formulaire ne doit pas être
 * affiché.
 *
 * Si la quantité est nulle (0), l'alerte deviendra rouge.
 */

?>