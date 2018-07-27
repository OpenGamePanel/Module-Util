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

define('OGP_LANG_module_name', "Narzędzia");
define('OGP_LANG_ping', "Ping");
define('OGP_LANG_traceroute', "Traceroute");
define('OGP_LANG_network_tools', "Narzędzia sieciowe");
define('OGP_LANG_sourcemod_admins', "Admini Sourcemod");
define('OGP_LANG_steam_converter', "Konwenter SteamID");
define('OGP_LANG_your_ip', "Twój adres IP");
define('OGP_LANG_loading_agents', "Ładowanie włączonych agentów...");
define('OGP_LANG_loading_failed', "Błąd podczas ładownia agentów.");
define('OGP_LANG_agents_offline', "Wszyscy agenci są wyłączeni.");
define('OGP_LANG_no_commands', "Niestety, twoje konto użytkownika nie ma dostępnych poleceń.");
define('OGP_LANG_remote_target', "Docelowy adres IP");
define('OGP_LANG_command', "Komeda:");
define('OGP_LANG_select_agent', "Wybierz agenta:");
define('OGP_LANG_chdir_failed', "Błąd: chdir() zwróciło flase.");
define('OGP_LANG_agent_invalid', "Invalid Agent specified.");
define('OGP_LANG_networktools_agent_offline', "Nie można wykonać komendy na wybranym agencie ponieważ jest on wyłączony.");
define('OGP_LANG_target_empty', "Nie wybrano zdalnego adresu.");
define('OGP_LANG_command_empty', "Nie wybrano komendy.");
define('OGP_LANG_command_unavilable', "Wybrane polecenie nie jest dostępne na wybranym agencie.");
define('OGP_LANG_target_invalid', "Wprowadzono błędny adres IP lub domeny.");
define('OGP_LANG_exec_failed', "Upłynął czas oczekiwania podczas oczekiwania na odpowiedź.");
define('OGP_LANG_command_no_access', "Nie masz uprawnień dostępu do tej komendy, Ta próba zastała zapisana w logach.");
define('OGP_LANG_command_hacking_attempt', "Wprowadzono nie dozwolone znaki. Ta próba zastała zapisana w logach.");
define('OGP_LANG_command_bad_characters', "Próba wykonania polecenia zawierającego złośliwe znaki. Wprowadzono: %s %s");
define('OGP_LANG_command_no_permissions', "Próba wykonania komendy bez wymaganych uprawnień. Wprowadzono: %s %s");
define('OGP_LANG_command_executed', "Pomyślnie wysłano komendę: %s %s");
define('OGP_LANG_no_servers', "Nie posiadasz serwerów przypisanych do Twojego konta.");
define('OGP_LANG_select_server', "Wybierz serwer:");
define('OGP_LANG_select_server_option', "Wybierz...");
define('OGP_LANG_steamid', "Steam ID:");
define('OGP_LANG_immunity', "Immunitet:");
define('OGP_LANG_sourcemod_perms', "Uprawnienia Sourcemod:");
define('OGP_LANG_sourcemod_perm_root', "Flaga root'a Sourcemod'a");
define('OGP_LANG_sourcemod_perm_custom', "Własne flagi Sourcemod'a");
define('OGP_LANG_sourcemod_flag_a', "Rezerwacja slota.");
define('OGP_LANG_sourcemod_flag_b', "Administrator ogólny; wymagane dla administratorów.");
define('OGP_LANG_sourcemod_flag_c', "Wyrzuć innych graczy.");
define('OGP_LANG_sourcemod_flag_d', "Zbanuj innych graczy.");
define('OGP_LANG_sourcemod_flag_e', "Skasuj bany.");
define('OGP_LANG_sourcemod_flag_f', "Zabij / zrań innych graczy.");
define('OGP_LANG_sourcemod_flag_g', "Change the map or major gameplay features.");
define('OGP_LANG_sourcemod_flag_h', "Change most CVARs.");
define('OGP_LANG_sourcemod_flag_i', "Execute config files.");
define('OGP_LANG_sourcemod_flag_j', "Special chat privileges.");
define('OGP_LANG_sourcemod_flag_k', "Start or create votes.");
define('OGP_LANG_sourcemod_flag_l', "Set a password on the server.");
define('OGP_LANG_sourcemod_flag_m', "Use RCON commands.");
define('OGP_LANG_sourcemod_flag_n', "Change sv_cheats or use cheating commands.");
define('OGP_LANG_sourcemod_flag_o', "Custom Group 1.");
define('OGP_LANG_sourcemod_flag_p', "Custom Group 2.");
define('OGP_LANG_sourcemod_flag_q', "Custom Group 3.");
define('OGP_LANG_sourcemod_flag_r', "Custom Group 4.");
define('OGP_LANG_sourcemod_flag_s', "Custom Group 5.");
define('OGP_LANG_sourcemod_flag_t', "Custom Group 6.");
define('OGP_LANG_rcon_reload_admins_failed', "Failed to reload the admin cache via RCON; is it online?");
define('OGP_LANG_reload_admins_failed', "Failed to reload the admin cache; \"sm_reloadadmins\" is an unknown command.");
define('OGP_LANG_reload_admins_success', "Successfully added %s to admins_simple.ini and reloaded the admin cache.");
define('OGP_LANG_add_success_no_rcon', "Successfully added %s to your admins_simple.ini file, but unable to reload the admin cache.");
define('OGP_LANG_writefile_error', "There was an unknown error writing to: %s");
define('OGP_LANG_remotefile_nonexistent', "Unable to add a new admin. Admin file: %s doesn\'t exist on this server.");
define('OGP_LANG_empty_flag_list', "You didn\'t select any admin flags.");
define('OGP_LANG_invalid_steam_format', "The SteamID you entered doesn\'t match the required pattern.");
define('OGP_LANG_selected_server_offline', "Unable to add an admin, the agent controlling the selected server is offline.");
define('OGP_LANG_malformed_form', "You submitted a form with malformed hidden elements - unable to add an admin.");
define('OGP_LANG_empty_form_data', "Please fill out all elements of the form.");
define('OGP_LANG_server_not_selected', "You haven\'t selected a server.");
define('OGP_LANG_invalid_steamid', "You have entered an invalid Steam ID.");
define('OGP_LANG_invalid_immunity', "You entered an invalid immunity value.");
define('OGP_LANG_submit', "Submit");
define('OGP_LANG_post_failed', "The POST action failed. Unable to retrieve a response.");
define('OGP_LANG_amx_mod_admins', "AMX mod X Admins");
define('OGP_LANG_amx_login_type', "Login Type");
define('OGP_LANG_amx_login_steamid', "Steam ID");
define('OGP_LANG_amx_login_nick_pass', "Nickname + Password");
define('OGP_LANG_nickname', "Nickname");
define('OGP_LANG_amx_mod_perms', "AMX mod X Permissions:");
define('OGP_LANG_amx_mod_perm_root', "AMX mod X All Flags.");
define('OGP_LANG_amx_mod_perm_custom', "AMX mod X Custom Flags.");
define('OGP_LANG_amx_mod_flag_a', "immunity (can't be kicked/baned/slayed/slaped and affected by other commmands)");
define('OGP_LANG_amx_mod_flag_b', "reservation (can join on reserved slots)");
define('OGP_LANG_amx_mod_flag_c', "amx_kick command");
define('OGP_LANG_amx_mod_flag_d', "amx_ban and amx_unban commands");
define('OGP_LANG_amx_mod_flag_e', "amx_slay and amx_slap commands");
define('OGP_LANG_amx_mod_flag_f', "amx_map command");
define('OGP_LANG_amx_mod_flag_g', "amx_cvar command (not all cvars will be available)");
define('OGP_LANG_amx_mod_flag_h', "amx_cfg command");
define('OGP_LANG_amx_mod_flag_i', "amx_chat and other chat commands");
define('OGP_LANG_amx_mod_flag_j', "amx_vote and other vote commands");
define('OGP_LANG_amx_mod_flag_k', "access to sv_password cvar (by amx_cvar command)");
define('OGP_LANG_amx_mod_flag_l', "access to amx_rcon command and rcon_password cvar (by amx_cvar command)");
define('OGP_LANG_amx_mod_flag_m', "custom level A (for additional plugins)");
define('OGP_LANG_amx_mod_flag_n', "custom level B");
define('OGP_LANG_amx_mod_flag_o', "custom level C");
define('OGP_LANG_amx_mod_flag_p', "custom level D");
define('OGP_LANG_amx_mod_flag_q', "custom level E");
define('OGP_LANG_amx_mod_flag_r', "custom level F");
define('OGP_LANG_amx_mod_flag_s', "custom level G");
define('OGP_LANG_amx_mod_flag_t', "custom level H");
define('OGP_LANG_amx_mod_flag_u', "menu access");
?>