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

define('OGP_LANG_module_name', "Segédprogramok");
define('OGP_LANG_ping', "Ping");
define('OGP_LANG_traceroute', "Traceroute");
define('OGP_LANG_network_tools', "Hálózati eszközök");
define('OGP_LANG_sourcemod_admins', "Sourcemod adminisztrátorok");
define('OGP_LANG_steam_converter', "SteamID konvertáló");
define('OGP_LANG_your_ip', "Az IP címed:");
define('OGP_LANG_loading_agents', "Online Agentek betöltése...");
define('OGP_LANG_loading_failed', "Az Agentek betöltése sikertelen.");
define('OGP_LANG_agents_offline', "Az összes Agent offline.");
define('OGP_LANG_no_commands', "Sajnálom, de a felhasználói fiókodnak nincsennek elérhető parancsai.");
define('OGP_LANG_remote_target', "Cél IP-címe:");
define('OGP_LANG_command', "Parancs:");
define('OGP_LANG_select_agent', "Válassz Agentet:");
define('OGP_LANG_chdir_failed', "Hiba: a chdir() visszatérése hamis.");
define('OGP_LANG_agent_invalid', "Érvénytelen Agent megadva.");
define('OGP_LANG_networktools_agent_offline', "Nem sikerült végrehajtani a parancsot a kiválasztott Agenten, mert az offline.");
define('OGP_LANG_target_empty', "Nincs távoli célpont megadva.");
define('OGP_LANG_command_empty', "Nincs parancs kiválasztva.");
define('OGP_LANG_command_unavilable', "A kiválasztott parancs nem érhető el a kiválasztott Agenten.");
define('OGP_LANG_target_invalid', "Érvénytelen a megadott IP/állomásnév.");
define('OGP_LANG_exec_failed', "Időtúllépés a válaszra várás alatt.");
define('OGP_LANG_command_no_access', "Nincs hozzáférésed ehhez a parancshoz. Ez az eset jelentésre kerül.");
define('OGP_LANG_command_hacking_attempt', "Feketelistás karakterek vannak megadva. Ez az eset naplózásra kerül.");
define('OGP_LANG_command_bad_characters', "Attempted to execute a command with malicious characters. Input received: %s %s");
define('OGP_LANG_command_no_permissions', "Megpróbált végrehajtani egy parancsot megfelelő jogosultság nélkül. Kapott bemenet: %s %s");
define('OGP_LANG_command_executed', "Az alábbi parancs sikeresen elküldve: %s %s");
define('OGP_LANG_no_servers', "Nincsenek szerverek hozzárendelve a fiókodhoz.");
define('OGP_LANG_select_server', "Válassz szervert:");
define('OGP_LANG_select_server_option', "Válassz...");
define('OGP_LANG_steamid', "Steam azonosító:");
define('OGP_LANG_immunity', "Immunitás:");
define('OGP_LANG_sourcemod_perms', "Sourcemod engedélyek");
define('OGP_LANG_sourcemod_perm_root', "Sourcemod Root zászló");
define('OGP_LANG_sourcemod_perm_custom', "Sourcemod egyéni zászlók");
define('OGP_LANG_sourcemod_flag_a', "Fenntartott slot hozzáférés.");
define('OGP_LANG_sourcemod_flag_b', "Általános adminisztrátor; a rendszergazdák számára szükséges.");
define('OGP_LANG_sourcemod_flag_c', "Más játékos kirúgása.");
define('OGP_LANG_sourcemod_flag_d', "Más játékos kitiltása.");
define('OGP_LANG_sourcemod_flag_e', "Kitiltások eltávolítása.");
define('OGP_LANG_sourcemod_flag_f', "Megölni/ártani más játékosnak.");
define('OGP_LANG_sourcemod_flag_g', "Pályaválasztás vagy egyéb játék beállítasok módosítása.");
define('OGP_LANG_sourcemod_flag_h', "CVAR-ok módosítása.");
define('OGP_LANG_sourcemod_flag_i', "Konfigurációs fájlok végrehajtása.");
define('OGP_LANG_sourcemod_flag_j', "Speciális chat jogok.");
define('OGP_LANG_sourcemod_flag_k', "Szavazások elindítása vagy létrehozása.");
define('OGP_LANG_sourcemod_flag_l', "Jelszó beállítása a szerveren.");
define('OGP_LANG_sourcemod_flag_m', "RCON parancsok használata.");
define('OGP_LANG_sourcemod_flag_n', "Változtasd meg az sv_cheats változót vagy használj cheat parancsokat.");
define('OGP_LANG_sourcemod_flag_o', "1. Egyéni csoport");
define('OGP_LANG_sourcemod_flag_p', "2. egyéni csoport");
define('OGP_LANG_sourcemod_flag_q', "3. egyéni csoport.");
define('OGP_LANG_sourcemod_flag_r', "4. egyéni csoport.");
define('OGP_LANG_sourcemod_flag_s', "5. egyéni csoport.");
define('OGP_LANG_sourcemod_flag_t', "6. egyéni csoport.");
define('OGP_LANG_rcon_reload_admins_failed', "Nem sikerült újratölteni az admin gyorsítótárat az RCON-ból, a szerver elérhető?");
define('OGP_LANG_reload_admins_failed', "Nem sikerült újratölteni az admin gyorsítótárat az RCON-ból; \"sm_reloadadmins\" ismeretlen parancs.");
define('OGP_LANG_reload_admins_success', "Sikeresen hozzáadva %s az admins_simple.ini-hez, és újratöltve az admin gyorsítótár.");
define('OGP_LANG_add_success_no_rcon', "Sikeresen hozzáadva %s az admins_simple.ini-hez, de nem sikerült újratölteni az admin gyorsítótárat.");
define('OGP_LANG_writefile_error', "Ismeretlen írási hiba itt: %s");
define('OGP_LANG_remotefile_nonexistent', "Nem sikerült az új admin hozzáadása. Admin fájl: %s nem található.");
define('OGP_LANG_empty_flag_list', "Nem választottál ki adminisztrátori jogokat.");
define('OGP_LANG_invalid_steam_format', "A megadott SteamID nem egyezik meg a kívánt mintával.");
define('OGP_LANG_selected_server_offline', "Nem sikerült az admin hozzáadása, az ügynök szerint a kiválasztott szerver nem fut.");
define('OGP_LANG_malformed_form', "You submitted a form with malformed hidden elements - unable to add an admin.");
define('OGP_LANG_empty_form_data', "Kérlek, töltsd ki az összes mezőt.");
define('OGP_LANG_server_not_selected', "Nem választottál ki szervert.");
define('OGP_LANG_invalid_steamid', "Érvénytelen Steam IDt adtál meg.");
define('OGP_LANG_invalid_immunity', "Érvénytelen védettségi értéket adtál meg.");
define('OGP_LANG_submit', "Beküldés");
define('OGP_LANG_post_failed', "A POST művelet sikertelen. Nem sikerült lekérni a választ.");
?>