<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'French (Fran�ais)';
$translator_name = 'Kamisama';
$translator_email = 'kamisama@thegreatspirit.net';
$translator_url = 'http://www.thegreatspirit.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Aller";
$LNG['g_username'] = "Nom d'utilisateur";
$LNG['g_url'] = "Lien";
$LNG['g_title'] = "Titre";
$LNG['g_description'] = "Description";
$LNG['g_category'] = "Cat�gorie"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Lien de votre Banniere";
$LNG['g_password'] = "Mot de Passe";
$LNG['g_average'] = "Moyenne";
$LNG['g_today'] = "Aujourd'hui";
$LNG['g_yesterday'] = "Hier";
$LNG['g_daily'] = "par Jour"; // 5.0
$LNG['g_this_month'] = "Ce Mois"; // 5.0
$LNG['g_last_month'] = "Le mois dernier"; // 5.0
$LNG['g_monthly'] = "Par Mois"; // 5.0
$LNG['g_this_week'] = "Cette semaine"; // 5.0
$LNG['g_last_week'] = "La semaine derni�re"; // 5.0
$LNG['g_weekly'] = "Par Semaine"; // 5.0
$LNG['g_pv'] = 'Tout'; // 5.0
$LNG['g_overall'] = 'Globalement'; // 5.0
$LNG['g_in'] = 'Entr�e'; // 5.0
$LNG['g_out'] = 'Sortie'; // 5.0
$LNG['g_unq_pv'] = "Unique PVs"; // 5.0
$LNG['g_tot_pv'] = "Total PVs"; // 5.0
$LNG['g_unq_in'] = "Unique Entr�e"; // 5.0
$LNG['g_tot_in'] = "Total Entr�e"; // 5.0
$LNG['g_unq_out'] = "Unique Sortie"; // 5.0
$LNG['g_tot_out'] = "Total Sortie"; // 5.0
$LNG['g_invalid_u_or_p'] = "Nom d'utilisateur ou mot de passe invalide. Veuillez recommencez."; // 5.0
$LNG['g_invalid_u'] = "Nom d'utilisateur invalide. Veuillez recommencez."; // 5.0
$LNG['g_invalid_p'] = "Mot de Passe invalide. Veuillez recommencez."; // 5.0
$LNG['g_session_expired'] = "Votre session a expir�e. Veuillez vous reconnecter."; // 5.0
$LNG['g_error'] = "Erreur"; // 5.0
$LNG['g_delete_install'] = "Pour des raisons de securit�, veuillez supprimer le dossier INSTALL avant de lancer le script."; // 5.0

// Editer Compte
$LNG['edit_header'] = "Editer votre Compte";
$LNG['edit_info_edited'] = "Votre compte a �t� correctement edit�.";
$LNG['edit_password_blank'] = "Laissez ce champ vide pour garder le mot de passe actuel."; // 4.0

// Page Piege
$LNG['gateway_header'] = "Page Pi�ge du topsites";
$LNG['gateway_text'] = "Pour eviter les fraudes, une page pi�ge a �t� mise en place. Cliquez sur le lien ci-dessous pour entrer dans le Topsites.";
$LNG['gateway_vote'] = "Entrer et Voter";
$LNG['gateway_no_vote'] = "Entrer sans Voter"; // 5.0

// Installation
$LNG['install_header'] = "Installer";
$LNG['install_welcome'] = "Bienvenue sur Aardvark Topsites PHP5. Completez le formulaire ci-dessous afin d'installer le script.";
$LNG['install_sql_prefix'] = "Pr�fixe des tables - Ne modifier que si vous utilisez plusieurs topsites sur la mme base de donn�es.";
$LNG['install_error_chmod'] = "Impossible d'ecrire dans \"parametres_sql.php\".  Assurez vous d'avoir definie le CHMOD 666 sur le fichier \"parametres_sql.php\".";
$LNG['install_error_sql'] = "Impossible de se connecter � la Base de Donn�es SQL.  Retournez a la page pr�c�dente pour rectifier vos param�tres de connexion � SQL.";
$LNG['install_done'] = "Votre topsites a �t� correctement install�.  Supprimez � pr�sent ce dossier.";
$LNG['install_your'] = "Votre TopSites";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manuel";
$LNG['upgrade_header'] = "Mettre � jour";
$LNG['upgrade_welcome'] = "Bienvenue sur Aardvark Topsites PHP 5.  Avant d'effectuer la mise � jour, penser a effecuter une sauvegarde de vos donn�es avant.";
$LNG['upgrade_error_version'] = "La mise � jour est uniquement support�e par Aardvark Topsites PHP 4.1.0 ou plus.";
$LNG['upgrade_done'] = "Votre Topsites a �t� mis a jour. Veuillez supprimer ce dossier � pr�sent.";
$LNG['upgrade_version'] = "Veuillez vous assurer que vous mettez a jour depuis la version %s."; // 5.1.0

// Inscription
$LNG['join_header'] = "S'inscrire";
$LNG['join_enter_text'] = "Saisissez le texte figurant sur l'image ci-dessous:"; // 4.2.2
$LNG['join_user'] = "Utilisateur"; // 5.0
$LNG['join_website'] = "Site"; // 5.0
$LNG['join_error_username'] = "de saisir un nom d'utilisateur valide: seul sont accept�s les lettres, les chiffres, - et _."; // 5.0
$LNG['join_error_username_duplicate'] = "de saisir un nom d'utilisateur valide: le nom que vous avez choisis est deja pris."; // 5.0
$LNG['join_error_url'] = "de saisir un lien valide.";
$LNG['join_error_email'] = "de saisir une adresse email valide.";
$LNG['join_error_title'] = "de saisir le nom de votre site.";
$LNG['join_error_password'] = "de saisir un mot de passe.";
$LNG['join_error_urlbanner'] = "Saisissez un lien valide de banniere valide.  Laissez le champ vide si vous n'en avez pas.  La banniere ne doit pas d�passer"; // 4.0
$LNG['join_error_time'] = "Ne pas rafraichir la page de confirmation."; // 4.2.0
$LNG['join_error_captcha'] = "Le mot que vous avez saisi ne correspond pas � celle de l'image."; // 4.2.2
$LNG['join_thanks'] = "Merci de vous etre inscrit ! Collez ce code sur votre site pour etre class�.";
$LNG['join_change_warning'] = "Si vous modifiez le code, il se peut qu'il ne fonctionne plus.";
$LNG['join_welcome'] = "Bienvenue dans %s";
$LNG['join_welcome_admin'] = "Un nouveau membre a joint votre topsites.";
$LNG['join_approve'] = "Votre site sera affich� des qu'un administrateur du topsite l'aura approuv�."; // 5.1.0
$LNG['join_type'] = "Type de compte"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "Code du Bouton"; // 5.0

// mot de Passe Perdu
$LNG['lost_pw_header'] = "Mot de passe perdu"; // 5.0
$LNG['lost_pw_forgot'] = "Mot de passe oubli� ?"; // 5.0
$LNG['lost_pw_get'] = "Obtenir le mot de passe"; // 5.0
$LNG['lost_pw_emailed'] = "Des instructions vous ont �t� donn�es par email."; // 5.0
$LNG['lost_pw_email'] = "Pour obtenir un nouveau mot de passe, cliquez sur ce lien:"; // 5.0
$LNG['lost_pw_new'] = "Entrer un nouveau mot de passe"; // 5.0
$LNG['lost_pw_set_new'] = "D�finir un nouveau mot de passe"; // 5.0
$LNG['lost_pw_finish'] = "Votre mot de passe vient d'etre remplac� par celui que vous venez de choisir."; // 5.0

// Accueil
$LNG['main_header'] = "Classement"; // 5.0
$LNG['main_all'] = "Tous les Sites"; // 4.2.0
$LNG['main_method'] = "M�thode de Classement";
$LNG['main_members'] = "Membres";
$LNG['main_menu_rankings'] = "Classement";
$LNG['main_menu_join'] = "S'inscrire";
$LNG['main_menu_random'] = "Membre al�atoire";
$LNG['main_menu_search'] = "Rechercher";
$LNG['main_menu_lost_code'] = "Code perdu"; // 5.0
$LNG['main_menu_lost_password'] = "Mot de Passe perdu"; // 5.0
$LNG['main_menu_edit'] = "Editer les info du membre";
$LNG['main_menu_user_cp'] = "Espace Membre"; // 5.0
$LNG['main_featured'] = "Membre Sp�cial"; // 4.0.2
$LNG['main_executiontime'] = "Temps d'execution du script"; // 4.0
$LNG['main_queries'] = "Requ�tes SQL"; // 4.0
$LNG['main_powered'] = "Powered by";

// Table de Classement
$LNG['table_stats'] = "Statistiques";
$LNG['table_unique'] = "Unique";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Rang";
$LNG['table_title'] = "Titre"; // 4.0
$LNG['table_description'] = "Description"; // 4.0
$LNG['table_movement'] = "Mouvement";
$LNG['table_up'] = "Ascendant"; // 5.0
$LNG['table_down'] = "Descendant"; // 5.0
$LNG['table_neutral'] = "Neutre"; // 5.0

// Noter et Commenter
$LNG['rate_header'] = "Noter et Commenter";
$LNG['rate_rating'] = "Note";
$LNG['rate_review'] = "Commentaire - Le HTML est desactiv�"; // 5.0
$LNG['rate_thanks'] = "Merci d'avoir voter.";
$LNG['rate_error'] = "Vous avez deja noter ce site";
$LNG['rate_back'] = "Revenir aux Statistiques";
$LNG['rate_email_admin'] = "Un nouveau commentaire a �t� post� sur votre topsites."; // 5.1.0

// Rechercher
$LNG['search_header'] = "Rechercher";
$LNG['search_off'] = "La fonction de Recherche a �t� desactiv�e.";
$LNG['search_no_sites'] = "D�sol�, mais aucun site ne correpond a vos criteres de recherche."; // 5.0
$LNG['search_prev'] = "Pr�c�dent"; // 3.2.1
$LNG['search_next'] = "Suivant"; // 3.2.1
$LNG['search_displaying_results'] = "Affichage des resultats %s a %s sur %s pour <b>%s</b>."; // 5.1.0

// Statistiques
$LNG['stats_header'] = "Statistiques";
$LNG['stats_info'] = "Informations";
$LNG['stats_member_since'] = "Membre depuis"; // 5.0
$LNG['stats_rating_avg'] = "Moyenne de la note";
$LNG['stats_rating_num'] = "Nombre de votes";
$LNG['stats_rate'] = "Noter et Commenter ce site";
$LNG['stats_reviews'] = "Commentaires";
$LNG['stats_allreviews'] = "Afficher tous les commentaires"; // 4.0
$LNG['stats_week'] = "Semaine"; // 5.0
$LNG['stats_highest'] = "Maximum"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Nouveaux Membres"; // 5.0
$LNG['ssi_all'] = "Tous les Sites"; // 4.0

// Espace membre // 5.0
$LNG['user_cp_header'] = "Espace membre"; // 5.0
$LNG['user_cp_login'] = "Connexion"; // 5.0
$LNG['user_cp_logout'] = "D�connexion"; // 5.0
$LNG['user_cp_welcome'] = "Bienvenue dans l'espace membre.  Utilisez les liens de gauche pour g�rer votre compte."; // 5.0
$LNG['user_cp_logout_message'] = "Vous etes a pr�sent deconnect�(e) de l'espace membre."; // 5.0
$LNG['user_cp_login_long'] = "Connexion avec votre nom d'utilisateur et votre mot de passe ou votre OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "impossible de trouver le serveur OpenID pour %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Vous devez vous inscrire au topsites avant de pouvoir acceder au panneau d'administration."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Une erreur est survenue lors du processus de connexion. Veuillez recommencez."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Vous devez posseder les permissions pour continuer. Veuillez recommencer."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Erreur depuis le serveur: %s"; // 5.1.0

// Admin > Approuver Nouveaux Membres // 4.0
$LNG['a_approve_header'] = "Approuver les Nouveaux Membres"; // 5.0
$LNG['a_approve'] = "Approuver"; // 4.0
$LNG['a_approve_none'] = "Il n'y a aucun membre en attente d'etre approuv�."; // 4.0
$LNG['a_approve_done'] = "Le membre a �t� approuv�."; // 4.0
$LNG['a_approve_dones'] = "Les membres ont �t� approuv�s."; // 4.0
$LNG['a_approve_sel'] = "Selection:"; // 5.0

// Admin > Approuver Nouveaux Commentaires // 5.0
$LNG['a_approve_rev_header'] = "Approuver les Nouveaux Commentaires"; // 5.0
$LNG['a_approve_rev_none'] = "Il n'y a aucun commentaire en attente d'etre approuv�."; // 5.0
$LNG['a_approve_rev_done'] = "Le commentaire a �t� approuv�."; // 5.0
$LNG['a_approve_rev_dones'] = "Les commentaires ont �t� approuv�s."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Cr�er une page personnalis�e"; // 5.1.0
$LNG['a_create_page_id'] = "ID de la page - Ceci sera utilis� dans le lien, et ne peut contenir que des lettres, nombres, tirets et sous-tirets"; // 5.1.0
$LNG['a_create_page_error_id'] = "l'ID de la page ne peut contenir que des lettres, nombres, tirets et sous-tirets. Veuillez retournez � la page pr�c�dente afin de corriger l'ID de la page."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Il existe deja une page personnalis�e utilisant cet ID. Veuillez retournez � la page pr�c�dente pour choisir un autre ID."; // 5.1.0
$LNG['a_create_page_created'] = "La page a �t� cr�e. Vous devrez rajouter manuellement un lien vers %s dans wrapper.html."; // 5.1.0

// Admin > Supprimer Membres
$LNG['a_del_header'] = "Supprimer un membre"; // 5.0
$LNG['a_del_headers'] = "Supprimer des membres"; // 5.0
$LNG['a_del_done'] = "Le membre a �t� supprim�."; // 5.0
$LNG['a_del_dones'] = "Les membres ont �t� supprim�s."; // 5.0
$LNG['a_del_warn'] = "Etes-vous sur de vouloir supprimer %s?"; // 5.0
$LNG['a_del_multi'] = "ces %s membres"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Suppresion d'un mot censur�"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Suppression des mots censur�s"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Le mot censur� a �t� supprim�."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Les mots censur�s ont �t� supprim�s."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Etes-vous sur de vouloir supprimer %s de la liste de censure ?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "ces %s mots"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "ID du mot censur� invalide.  Veuillez recommencer."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Suppression de page personnalis�e"; // 5.1.0
$LNG['a_del_page_headers'] = "Suppression de pages personnalis�es"; // 5.1.0
$LNG['a_del_page_done'] = "La page personnalis�e a �t� surpprim�."; // 5.1.0
$LNG['a_del_page_dones'] = "Les pages personnalis�es ont �t� surpprim�."; // 5.1.0
$LNG['a_del_page_warn'] = "Etes-vous sur de vouloir supprimer %s?"; //5.1.0
$LNG['a_del_page_multi'] = "ces %s pages"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID de la page personnalis�e invalide.  Veuillez recommencer."; // 5.1.0

// Admin > Supprimer Commentaires // 5.0
$LNG['a_del_rev_header'] = "Supprimer un commentaire"; // 5.0
$LNG['a_del_rev_headers'] = "Supprimer des Commentaires"; // 5.0
$LNG['a_del_rev_done'] = "Le commentaire a �t� supprim�."; // 5.0
$LNG['a_del_rev_dones'] = "Les commentaires ont �t� supprim�s."; // 5.0
$LNG['a_del_rev_warn'] = "Etes-vous sur de vouloir supprimer ce commentaire ?"; //5.0
$LNG['a_del_rev_warns'] = "Etes-vous sur de vouloir supprimer ces commentaires ?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID du commentaire invalide.  Veuillez recommencer."; // 5.0

// Admin > Editer Membres
$LNG['a_edit_header'] = "Editer un Membre"; // 5.0
$LNG['a_edit_site_is'] = "Ce site est"; // 4.0
$LNG['a_edit_active'] = "Actif (List�)"; // 4.0
$LNG['a_edit_inactive'] = "Inactif (Non List�)"; // 5.0
$LNG['a_edit_edited'] = "Le membre a �t� correctement edit�.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Editer les mots censur�s"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Le mot censur� a �t� edit�."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Editer les pages personnalis�es"; // 5.1.0
$LNG['a_edit_page_content'] = "Contenu - Vous pouvez utiliser du HTML ici"; // 5.1.0
$LNG['a_edit_page_edited'] = "La page a �t� edit�e."; // 5.1.0

// Admin > Editer Commentaires // 5.0
$LNG['a_edit_rev_header'] = "Editer un commentaire"; // 5.0
$LNG['a_edit_rev_edited'] = "Le commentaire a �t� edit�.";

// Admin > Mailer Membres
$LNG['a_email_header'] = "Envoyer un email aux membres"; // 5.0
$LNG['a_email_subject'] = "Sujet"; // 4.2.0
$LNG['a_email_message'] = "Message"; // 4.2.0
$LNG['a_email_msg_sent'] = "Un email a �t� envoy� a %s"; // 5.0
$LNG['a_email_not_sent'] = "Un email n'a pas pu etre envoy� a %s"; // 5.0
$LNG['a_email_sent'] = "Le mail a  �t� envoy� a %s membres."; // 4.2.0
$LNG['a_email_failed'] = "le mail n'a pas pu etre envoy� a %s membres."; // 4.2.0

// Admin > Deconnxeion
$LNG['a_logout_message'] = "Vous etes a pr�sent deconnect� du panneau d'adminstration"; // 5.0

// Admin > Accueil
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Bienvenue dans le panneau d'Administration. Utilisez les liens de gauche pour g�rer votre topsites."; // 5.0
$LNG['a_main_approve'] = "Il y a 1 site attendant d'etre approuv�."; // 5.0
$LNG['a_main_approves'] = "Il y a %s sites attendant d'etre approuv�s."; // 5.0
$LNG['a_main_approve_rev'] = "Il y a 1 commentaire attendant d'etre approuv�."; // 5.0
$LNG['a_main_approve_revs'] = "Il y a %s commentaires attendant d'etre approuv�s."; // 5.0
$LNG['a_main_your'] = "Votre version"; // 5.0
$LNG['a_main_latest'] = "Derniere version"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Gerer Membres
$LNG['a_man_header'] = "Gestion des Membres"; // 5.0
$LNG['a_man_actions'] = "Actions"; // 4.2.0
$LNG['a_man_edit'] = "Editer"; // 4.2.0
$LNG['a_man_delete'] = "Supprimer"; // 4.2.0
$LNG['a_man_email'] = "Mailer"; // 4.2.0
$LNG['a_man_all'] = "Tout selectionner"; // 5.0
$LNG['a_man_none'] = "Ne rien selectionner"; // 5.0
$LNG['a_man_del_sel'] = "Supprimer la selection"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Censure des mots"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Entrer le mot et celui qui va le remplacer ci-dessous. Par exemple, vous pouvez entrer \"con\" dans le champ 'mot', et \"imbecile\" dans le champ du 'mot � remplacer'."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "La comparaison pr�cise remplacera uniquement le mot exact.  La comparaison globale remplacera n'importe quel mot contenant le mot.  Par exemple, la comparaison globale du mot \"con\" remplacera egalement les mots \"connard\" mais aussi \"concombre\" !"; // 5.1.0
$LNG['a_man_bad_words_word'] = "Mot"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "A remplacer par"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Comparaison"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Pr�cise"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globale"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Censurer le mot"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" a �t� ajout� dans la liste des mots censur�s."; // 5.1.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Gestions des pages personnalis�es"; // 5.1.0

// Admin > Gerer Commentaires // 5.0
$LNG['a_man_rev_header'] = "Gerer les Commentaires"; // 5.0
$LNG['a_man_rev_enter'] = "Pour gerer les commentaires d'un site, saisissez son nom d'utilisateur ci-dessous."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Commentaire"; // 5.0
$LNG['a_man_rev_date'] = "Date"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Accueil"; // 5.0
$LNG['a_menu_approve'] = "Approuver les nouveaux membres";
$LNG['a_menu_manage'] = "Gestion des Membres"; // 4.2.0
$LNG['a_menu_settings'] = "Changer les Param�tres"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Censure des mots"; // 5.1.0
$LNG['a_menu_skins'] = "Skins et Cat�gories"; // 5.0
$LNG['a_menu_approve_reviews'] = "Approuver Nouveaux Commentaires"; // 5.0
$LNG['a_menu_manage_reviews'] = "Gestion des Commentaires"; // 5.0
$LNG['a_menu_email'] = "Envoyer un mail";
$LNG['a_menu_delete_review'] = "Supprimer des Commentaires";
$LNG['a_menu_logout'] = "D�connexion";
$LNG['a_menu_delete'] = "Supprimer des membres";
$LNG['a_menu_edit'] = "Editer des membres";
$LNG['a_menu_create_page'] = "Cr�er une page personnalis�e"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Gestion des pages personnalis�es"; // 5.1.0
$LNG['a_header_members'] = "Membres"; // 5.0
$LNG['a_header_settings'] = "Param�tres"; // 5.0
$LNG['a_header_reviews'] = "Commentaires"; // 5.0
$LNG['a_header_pages'] = "Pages personnalis�es"; // 5.1.0

// Admin > Parametres
$LNG['a_s_header'] = "Changer les param�tres";
$LNG['a_s_help'] = "Aide"; // 5.1.0

$LNG['a_s_general'] = "Param�tres G�n�raux";
$LNG['a_s_admin_password'] = "Mot de passe administrateur";
$LNG['a_s_list_name'] = "Le nom de votre topsites";
$LNG['a_s_list_url'] = "URL vers le dossier de votre topsites";
$LNG['a_s_default_language'] = "Language par D�faut";
$LNG['a_s_your_email'] = "Votre adresse email";

$LNG['a_s_sql'] = "Param�tres SQL";
$LNG['a_s_sql_type'] = "Type de Base de Donn�es"; // 4.1.0
$LNG['a_s_sql_host'] = "Serveur";
$LNG['a_s_sql_database'] = "Base de Donn�es";
$LNG['a_s_sql_username'] = "Nom d'utilisateur";
$LNG['a_s_sql_password'] = "Mot de Passe";

$LNG['a_s_ranking'] = "Param�tres de Classement";
$LNG['a_s_num_list'] = "Nombre de membres � afficher par page"; // 5.0
$LNG['a_s_ranking_period'] = "P�riode de classement"; // 5.0
$LNG['a_s_ranking_method'] = "M�thode de classement"; // 5.0
$LNG['a_s_ranking_average'] = "Classement par moyenne ou juste %s"; // 5.0
$LNG['a_s_featured_member'] = 'Membre sp�cial - Vous devez rajouter {$featured_membre} dans wrapper.html apres que vous ayez activer cette fonction.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Nombre de membres � utiliser le _top skin";
$LNG['a_s_ad_breaks'] = "Afficher une publicit� apres ces rangs (a separer par une virgule) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Param�tres des Membres";
$LNG['a_s_active_default'] = "N�cessite votre validation pour que le membre puisse etre class�";
$LNG['a_s_active_default_review'] = "N�cessite votre validation pour afficher un nouveau commentaire";
$LNG['a_s_delete_after'] = "Supprimer les membres inactifs apres xx jours (0 pour desactiver)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Envoyer un mail � l'administrateur lors de l'inscription d'un nouveau membre"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Envoyer un mail � l'administrateur lorsqu'un nouveau commentaire est post�"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Largeur maximale de la banniere (0 pour desactiver)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Hauteur maximale de la banniere (0 pour desactiver)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banni�re par d�faut pour les membres n'en ayant pas propos�";

$LNG['a_s_button'] = "Param�tres des Boutons";
$LNG['a_s_ranks_on_buttons'] = "Rangs sur les boutons -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Boutons des Statistiques"; // 4.2.0
$LNG['a_s_button_url'] = "Si Oui/Non - Lien vers le bouton par d�faut que vous voulez voir apparaitre sur le site de vos membres"; // 4.0
$LNG['a_s_button_dir'] = "Si Oui - lien vers le dossier contenant vos boutons"; // 4.0
$LNG['a_s_button_ext'] = "Si Oui - Extension des boutons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Si Oui - Nombre de boutons que vous avez fait"; // 4.0
$LNG['a_s_google_friendly_links'] = "Liens Google-friendly  - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Autres param�tres";
$LNG['a_s_search'] = "Rechercher";
$LNG['a_s_time_offset'] = "Plage horaire de votre serveur (en heures)";
$LNG['a_s_gateway'] = "Page pi�ge du Topsites pour d�courager la fraude";
$LNG['a_s_captcha'] = "Code de confirmation lors de l'inscription (protection contre les spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Activ�";
$LNG['a_s_off'] = "D�sactiv�";
$LNG['a_s_days'] = "Jours";
$LNG['a_s_months'] = "Mois";
$LNG['a_s_weeks'] = "Semaines"; // 4.2.0
$LNG['a_s_yes'] = "Oui";
$LNG['a_s_no'] = "Non";

$LNG['a_s_updated'] = "Vos param�tres ont �t� mis � jour.";

// Admin > Skins et Categories // 5.0
$LNG['a_skins_header'] = "Skins et Cat�gories"; // 5.0
$LNG['a_skins_default'] = "Skin par D�faut"; // 5.0
$LNG['a_skins_set_default'] = "D�finir le skin par d�faut"; // 5.0
$LNG['a_skins_anon'] = "Anonyme"; // 5.0
$LNG['a_skins_default_done'] = "Le skin par defaut a �t� d�finie."; // 5.0
$LNG['a_skins_categories_done'] = "Le skin de la cat�gorie a �t� d�finie."; // 5.0
$LNG['a_skins_new_category_done'] = "La nouvelle cat�gorie a �t� cr��e."; // 5.0
$LNG['a_skins_delete_done'] = "La cat�gorie a �t� supprim�e."; // 5.0
$LNG['a_skins_delete_error'] = "La Cat�gorie ne peut etre supprim�e car vous devez avoir au moins une cat�gorie."; // 5.1.0
$LNG['a_skins_edit_done'] = "La cat�gorie a �t� edit�e."; // 5.0
$LNG['a_skins_invalid_skin'] = "Skin invalide: %s.  Veuillez recommencez."; // 5.0
$LNG['a_skins_categories'] = "Cat�gories"; // 5.0
$LNG['a_skins_new_category'] = "Cr��r une nouvelle categorie"; // 5.0
$LNG['a_skins_set_skins'] = "D�finir le skin des cat�gories"; // 5.0
$LNG['a_skins_edit_category'] = "Editer une Cat�gorie"; // 5.0
$LNG['a_skins_category_name'] = "Nom de la Cat�gorie"; // 5.0
$LNG['a_skins_diff_skins'] = "Si vous desirez differents skins pour les diff�rentes cat�gories, definissez les ci-dessous."; // 5.0
?>
