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

define('module_name', "Segédprogramok");
define('ping', "Ping");
define('traceroute', "Traceroute");
define('network_tools', "Hálózati eszközök");
define('sourcemod_admins', "Sourcemod Adminok");
define('steam_converter', "SteamID konvertáló");
define('your_ip', "Az IP címed:");
define('loading_agents', "Online Agentek betöltése...");
define('loading_failed', "Az Agentek betöltése sikertelen.");
define('agents_offline', "Az összes Agent offline.");
define('no_commands', "Sajnálom, de a felhasználói fiókodnak nincsennek elérhető parancsai.");
define('remote_target', "Cél IP-címe:");
define('command', "Parancs:");
define('select_agent', "Válassz Agentet:");
define('chdir_failed', "Hiba: a chdir() visszatérése hamis.");
define('agent_invalid', "Érvénytelen Agent megadva.");
define('networktools_agent_offline', "Nem sikerült végrehajtani a parancsot a kiválasztott Agenten, mert az offline.");
define('target_empty', "Nincs távoli célpont megadva.");
define('command_empty', "Nincs parancs kiválasztva.");
define('command_unavilable', "A kiválasztott parancs nem érhető el a kiválasztott Agenten.");
define('target_invalid', "Érvénytelen a megadott IP/állomásnév.");
define('exec_failed', "Időtúllépés a válaszra várás alatt.");
define('command_no_access', "Nincs hozzáférésed ehhez a parancshoz. Ez az eset jelentésre kerül.");
define('command_hacking_attempt', "Feketelistás karakterek vannak megadva. Ez az eset naplózásra kerül.");
define('command_bad_characters', "Attempted to execute a command with malicious characters. Input received: %s %s");
define('command_no_permissions', "Megpróbált végrehajtani egy parancsot megfelelő jogosultság nélkül. Kapott bemenet: %s %s");
define('command_executed', "Az alábbi parancs sikeresen elküldve: %s %s");
define('no_servers', "Nincsenek szerverek hozzárendelve a fiókodhoz.");
define('select_server', "Válassz szervert:");
define('select_server_option', "Válassz...");
define('steamid', "Steam ID");
define('immunity', "Immunitás:");
define('sourcemod_perms', "Sourcemod engedélyek");
define('sourcemod_perm_root', "Sourcemod Root zászló");
define('sourcemod_perm_custom', "Sourcemod eg");
define('sourcemod_flag_a', "Fenntartott slot hozzáférést.");
define('sourcemod_flag_b', "Általános admin; szükséges az adminhoz.");
define('sourcemod_flag_c', "Más játékos kirúgása.");
define('sourcemod_flag_d', "Más játékos kitiltása.");
define('sourcemod_flag_e', "Kitiltások eltávolítása.");
define('sourcemod_flag_f', "Megölni/ártani más játékosnak.");
define('sourcemod_flag_g', "Pályaválasztás vagy egyéb játék beállítasok módosítása.");
define('sourcemod_flag_h', "CVAR-ok módosítása.");
define('sourcemod_flag_i', "Konfigurációs fájlok végrehajtása.");
define('sourcemod_flag_j', "Speciális chat jogok.");
define('sourcemod_flag_k', "Szavazások elindítása vagy létrehozása.");
define('sourcemod_flag_l', "Jelszó beállítása a szerveren.");
define('sourcemod_flag_m', "RCON parancsok használata.");
define('sourcemod_flag_n', "Változtasd meg az sv_cheats változót vagy használj cheat parancsokat.");
define('sourcemod_flag_o', "1. Egyéni csoport");
define('sourcemod_flag_p', "2. egyéni csoport");
define('sourcemod_flag_q', "3. egyéni csoport.");
define('sourcemod_flag_r', "4. egyéni csoport.");
define('sourcemod_flag_s', "5. egyéni csoport.");
define('sourcemod_flag_t', "6. egyéni csoport.");
define('rcon_reload_admins_failed', "Nem sikerült újratölteni az admin gyorsítótárat az RCON-ból, a szerver elérhető?");
define('reload_admins_failed', "Nem sikerült újratölteni az admin gyorsítótárat az RCON-ból; \"sm_reloadadmins\" ismeretlen parancs.");
define('reload_admins_success', "Sikeresen hozzáadva %s az admins_simple.ini-hez, és újratöltve az admin gyorsítótár.");
define('add_success_no_rcon', "Sikeresen hozzáadva %s az admins_simple.ini-hez, de nem sikerült újratölteni az admin gyorsítótárat.");
define('writefile_error', "Ismeretlen írási hiba itt: %s");
define('remotefile_nonexistent', "Nem sikerült az új admin hozzáadása. Admin fájl: %s nem található.");
define('empty_flag_list', "Nem választottál ki admin jogokat.");
define('invalid_steam_format', "A megadott SteamID nem egyezik meg a kívánt mintával.");
define('selected_server_offline', "Nem sikerült az admin hozzáadása, az ügynök szerint a kiválasztott szerver nem fut.");
define('malformed_form', "You submitted a form with malformed hidden elements - unable to add an admin.");
define('empty_form_data', "Kérlek, töltsd ki az összes mezőt.");
define('server_not_selected', "Nem választottál ki szervert.");
define('invalid_steamid', "Érvénytelen Steam IDt adtál meg.");
define('invalid_immunity', "Érvénytelen védettségi értéket adtál meg.");
define('submit', "Beküldés");
define('post_failed', "A POST művelet sikertelen. Nem sikerült lekérni a választ.");
?>