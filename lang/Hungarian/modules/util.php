<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
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

define('module_name', "Segédprogramok");
define('ping', "Ping");
define('traceroute', "Traceroute");
define('network_tools', "Hálózati eszközök");
define('sourcemod_admins', "Sourcemod Adminok");
define('steam_converter', "SteamID konvertáló");
define('your_ip', "Az IP címed");
define('loading_agents', "Online Agentek betöltése...");
define('loading_failed', "Az Agentek betöltése sikertelen.");
define('agents_offline', "Az összes Agent offline.");
define('no_commands', "Sajnáljuk, de a felhasználói fiókodnak nincsennek elérhető parancsai.");
define('remote_target', "Target Address:");
define('command', "Parancs");
define('select_agent', "Kiválasztott Agent");
define('chdir_failed', "Error: chdir() returned false.");
define('agent_invalid', "Érvénytelen Agent megjelölve.");
define('networktools_agent_offline', "Unable to execute your command on the selected agent because it is offline.");
define('target_empty', "Nincs távoli célpont megadva.");
define('command_empty', "Nincs parancs kiválasztva.");
define('command_unavilable', "A kiválasztott parancs nem érhető el a kiválasztott Agenten.");
define('target_invalid', "Érvénytelen a megadott IP/állomásnév.");
define('exec_failed', "Időtúllépés a válaszra várás alatt.");
define('command_no_access', "You do not have access to this command. This incident will be logged.");
define('command_hacking_attempt', "Feketelistás karakterek vannak megadva. Ez az eset naplózásra kerül.");
define('command_bad_characters', "Attempted to execute a command with malicious characters. Input received: %s %s");
define('command_no_permissions', "Attempted to execute a command with insufficient permissions. Input received: %s %s");
define('command_executed', "Az alábbi parancs sikeresen elküldve: %s %s");
define('no_servers', "Nincsenek szerverek hozzárendelve a fiókodhoz.");
define('select_server', "Válassz szervert");
define('select_server_option', "Válassz...");
define('steamid', "Steam ID");
define('immunity', "Védettség");
define('sourcemod_perms', "Sourcemod engedélyek");
define('sourcemod_perm_root', "Sourcemod Root Flag");
define('sourcemod_perm_custom', "Sourcemod Custom Flags");
define('sourcemod_flag_a', "Fenntartott slot hozzáférést.");
define('sourcemod_flag_b', "Generic admin; required for admins.");
define('sourcemod_flag_c', "Más játékos kirúgása.");
define('sourcemod_flag_d', "Más játékos kitiltása.");
define('sourcemod_flag_e', "Kitiltások eltávolítása.");
define('sourcemod_flag_f', "Slay/harm other players.");
define('sourcemod_flag_g', "Change the map or major gameplay features.");
define('sourcemod_flag_h', "Change most CVARs.");
define('sourcemod_flag_i', "Konfigurációs fájlok végrehajtása.");
define('sourcemod_flag_j', "Special chat privileges.");
define('sourcemod_flag_k', "Szavazások elindítása vagy létrehozása.");
define('sourcemod_flag_l', "Jelszó beállítása a szerveren.");
define('sourcemod_flag_m', "RCON parancsok használata.");
define('sourcemod_flag_n', "Change sv_cheats or use cheating commands.");
define('sourcemod_flag_o', "1. Egyéni csoport");
define('sourcemod_flag_p', "2. egyéni csoport.");
define('sourcemod_flag_q', "3. egyéni csoport.");
define('sourcemod_flag_r', "4. egyéni csoport.");
define('sourcemod_flag_s', "5. egyéni csoport.");
define('sourcemod_flag_t', "6. egyéni csoport.");
define('rcon_reload_admins_failed', "Failed to reload the admin cache via RCON; is it online?");
define('reload_admins_failed', "Failed to reload the admin cache; \"sm_reloadadmins\" is an unknown command.");
define('reload_admins_success', "Successfully added %s to admins_simple.ini and reloaded the admin cache.");
define('add_success_no_rcon', "Successfully added %s to your admins_simple.ini file, but unable to reload the admin cache.");
define('writefile_error', "There was an unknown error writing to: %s");
define('remotefile_nonexistent', "Unable to add a new admin. Admin file: %s doesn\'t exist on this server.");
define('empty_flag_list', "You didn\'t select any admin flags.");
define('invalid_steam_format', "The SteamID you entered doesn\'t match the required pattern.");
define('selected_server_offline', "Unable to add an admin, the agent controlling the selected server is offline.");
define('malformed_form', "You submitted a form with malformed hidden elements - unable to add an admin.");
define('empty_form_data', "Please fill out all elements of the form.");
define('server_not_selected', "You haven\'t selected a server.");
define('invalid_steamid', "Érvénytelen Steam IDt adtál meg.");
define('invalid_immunity', "Érvénytelen védettségi értéket adtál meg.");
define('submit', "Beküldés");
define('post_failed', "The POST action failed. Unable to retrieve a response.");
?>