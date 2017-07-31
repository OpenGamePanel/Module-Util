<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('module_name', "Utilitaires");
define('ping', "Ping");
define('traceroute', "Traceroute");
define('network_tools', "Outils Réseau");
define('sourcemod_admins', "Admins Sourcemod");
define('steam_converter', "Convertisseur SteamID");
define('your_ip', "Votre adresse IP:");
define('loading_agents', "Loading online Agents...");
define('loading_failed', "Loading Agents failed.");
define('agents_offline', "All Agents are offline.");
define('no_commands', "Désolé, votre compte d'utilisateur n'a aucune commande disponible.");
define('remote_target', "Target IP Address:");
define('command', "Commande:");
define('select_agent', "Sélectionner un Agent:");
define('chdir_failed', "Erreur: chdir() returned false.");
define('agent_invalid', "Invalid Agent specified.");
define('networktools_agent_offline', "Impossible d'exécuter votre commande sur l'Agent sélectionné car il est hors-ligne.");
define('target_empty', "Aucune cible distante spécifiée.");
define('command_empty', "Aucune commande sélectionnée.");
define('command_unavilable', "La commande spécifiée est indisponible sur l'Agent sélectionné.");
define('target_invalid', "IP/Nom d'Hôte entré invalide.");
define('exec_failed', "Temps d'attente de la requête expiré.");
define('command_no_access', "Vous n'avez pas accès à cette commande. L'incident va être enregistré.");
define('command_hacking_attempt', "Caractères entrés interdits. L'incident va être enregistré.");
define('command_bad_characters', "Tentative d'exécution d'une commande avec des caractères malveillants. Entrée reçue: %s %s");
define('command_no_permissions', "Tentative d'exécution d'une commande avec des permissions insuffisantes. Entrée reçue: %s %s");
define('command_executed', "La commande suivante a bien été envoyée: %s %s");
define('no_servers', "Il n'y a pas de serveur de jeu disponible sur votre compte.");
define('select_server', "Choisissez un serveur:");
define('select_server_option', "Sélectionner...");
define('steamid', "Steam ID:");
define('immunity', "Immunité:");
define('sourcemod_perms', "Permissions Sourcemod:");
define('sourcemod_perm_root', "Sourcemod Root Flag");
define('sourcemod_perm_custom', "Sourcemod Custom Flags");
define('sourcemod_flag_a', "Place Réservée.");
define('sourcemod_flag_b', "Admin générique; requis pour les admins.");
define('sourcemod_flag_c', "Kicker d'autres joueurs.");
define('sourcemod_flag_d', "Bannir d'autres joueurs.");
define('sourcemod_flag_e', "Enlever les bannissements.");
define('sourcemod_flag_f', "Tuer / blesser d'autres joueurs.");
define('sourcemod_flag_g', "Changer la carte ou des fonctionnalités majeures de gameplay.");
define('sourcemod_flag_h', "Changer la plupart des CVARs.");
define('sourcemod_flag_i', "Exécuter les fichiers de configuration.");
define('sourcemod_flag_j', "Privilèges spéciaux du chat.");
define('sourcemod_flag_k', "Initier ou créer des votes.");
define('sourcemod_flag_l', "Définir un mot de passe sur le serveur.");
define('sourcemod_flag_m', "Utiliser des commandes RCON.");
define('sourcemod_flag_n', "Changer sv_cheats ou utiliser des commandes de triche.");
define('sourcemod_flag_o', "Groupe Perso 1.");
define('sourcemod_flag_p', "Groupe Perso 2.");
define('sourcemod_flag_q', "Groupe Perso 3.");
define('sourcemod_flag_r', "Groupe Perso 4.");
define('sourcemod_flag_s', "Groupe Perso 5.");
define('sourcemod_flag_t', "Groupe Perso 6.");
define('rcon_reload_admins_failed', "Echec du rechargement du cache admin via RCON; est-il en ligne?");
define('reload_admins_failed', "Echec du rechargement du cache admin; \"sm_reloadadmins\" est une commande inconnue.");
define('reload_admins_success', "Ajout de %s à admins_simple.ini réussi, ainsi que le rechargement du cache admin.");
define('add_success_no_rcon', "Ajout de %s à votre fichier admins_simple.ini réussi, mais impossible de recharger le cache admin.");
define('writefile_error', "Il y a eu une erreur inconnue lors de l'écriture de: %s");
define('remotefile_nonexistent', "Impossible d'ajouter un nouvel admin. Le fichier d'admin: %s n'existe pas sur ce serveur");
define('empty_flag_list', "Vous n'avez sélectionné aucun admin flags.");
define('invalid_steam_format', "Le SteamID entré ne correspond pas à ce qui est requis.");
define('selected_server_offline', "Impossible d'ajouter un admin, l'Agent qui contrôle le serveur sélectionné est déconnecté.");
define('malformed_form', "Vous avez soumis un formulaire avec des éléments cachés mal formés - impossible d'ajouter un administrateur.");
define('empty_form_data', "Veuillez remplir tous les éléments du formulaire.");
define('server_not_selected', "Vous n'avez pas sélectionné de serveur.");
define('invalid_steamid', "Vous avez entré un Steam ID invalide.");
define('invalid_immunity', "Vous avez entré une valeur d'immunité invalide.");
define('submit', "Envoyer");
define('post_failed', "L'action POST a échoué. Impossible d'obtenir une réponse.");
?>
