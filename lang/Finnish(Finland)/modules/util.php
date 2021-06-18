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

define('OGP_LANG_module_name', "Apuohjelmat");
define('OGP_LANG_ping', "Ping");
define('OGP_LANG_traceroute', "Traceroute");
define('OGP_LANG_network_tools', "Verkkotyökalut");
define('OGP_LANG_sourcemod_admins', "Sourcemod ylläpitäjät");
define('OGP_LANG_steam_converter', "SteamID muunnin");
define('OGP_LANG_your_ip', "Sinun IP-osoitteesi:");
define('OGP_LANG_loading_agents', "Ladataan online-agentteja...");
define('OGP_LANG_loading_failed', "Agenttien lataaminen epäonnistui.");
define('OGP_LANG_agents_offline', "Kaikki agentit ovat offline-tilassa.");
define('OGP_LANG_no_commands', "Käyttäjätililläsi ei ole käytettävissä olevia komentoja.");
define('OGP_LANG_remote_target', "Kohde IP-osoite:");
define('OGP_LANG_command', "Komento:");
define('OGP_LANG_select_agent', "Valitse agentti:");
define('OGP_LANG_chdir_failed', "Virhe: chdir () palautti epätoden.");
define('OGP_LANG_agent_invalid', "Virheellinen agentti määritetty.");
define('OGP_LANG_networktools_agent_offline', "Komennon suorittaminen valitulla agentilla ei onnistu, koska se on offline-tilassa.");
define('OGP_LANG_target_empty', "Etäkohdetta ei annettu.");
define('OGP_LANG_command_empty', "Komentoa ei ole valittu.");
define('OGP_LANG_command_unavilable', "Valittu komento ei ole käytettävissä valitulla agentilla.");
define('OGP_LANG_target_invalid', "Virheellinen IP/verkko-osoite syötetty.");
define('OGP_LANG_exec_failed', "Aikakatkaisu odotettaessa vastausta.");
define('OGP_LANG_command_no_access', "Sinulla ei ole oikeuksia tähän komentoon. Tapaus kirjataan ylös.");
define('OGP_LANG_command_hacking_attempt', "Mustalla listalla olevia merkkejä syötetty. Tapaus kirjataan ylös.");
define('OGP_LANG_command_bad_characters', "Yritetty suorittaa komento haitallisilla merkeillä. Vastaanotettu syöte: %s%s");
define('OGP_LANG_command_no_permissions', "Yritetty suorittaa komento ilman riittäviä käyttöoikeuksia. Vastaanotettu syöte: %s%s");
define('OGP_LANG_command_executed', "Seuraavan komennon lähettäminen onnistui: %s%s");
define('OGP_LANG_no_servers', "Tilillesi ei ole määritetty palvelimia.");
define('OGP_LANG_select_server', "Valitse palvelin:");
define('OGP_LANG_select_server_option', "Valitse...");
define('OGP_LANG_steamid', "Steam ID:");
define('OGP_LANG_immunity', "Koskemattomuus:");
define('OGP_LANG_sourcemod_perms', "Sourcemod oikeudet:");
define('OGP_LANG_sourcemod_perm_root', "Sourcemod Root-lippu");
define('OGP_LANG_sourcemod_perm_custom', "Sourcemod mukautetut liput");
define('OGP_LANG_sourcemod_flag_a', "Varatun paikan-pääsy.");
define('OGP_LANG_sourcemod_flag_b', "Yleinen järjestelmänvalvoja; vaaditaan järjestelmänvalvojille.");
define('OGP_LANG_sourcemod_flag_c', "Potkaise muita pelaajia.");
define('OGP_LANG_sourcemod_flag_d', "Estä muita pelaajia.");
define('OGP_LANG_sourcemod_flag_e', "Poista estot.");
define('OGP_LANG_sourcemod_flag_f', "Tapa/vahingoita muita pelaajia.");
define('OGP_LANG_sourcemod_flag_g', "Vaihda karttaa tai tärkeimpiä pelattavuus ominaisuuksia.");
define('OGP_LANG_sourcemod_flag_h', "Muuta useimpia CVAR-arvoja.");
define('OGP_LANG_sourcemod_flag_i', "Suorita määritystiedostot.");
define('OGP_LANG_sourcemod_flag_j', "Erityiset chat-oikeudet.");
define('OGP_LANG_sourcemod_flag_k', "Aloita tai luo äänestyksiä.");
define('OGP_LANG_sourcemod_flag_l', "Aseta salasana palvelimelle.");
define('OGP_LANG_sourcemod_flag_m', "Käytä RCON-komentoja.");
define('OGP_LANG_sourcemod_flag_n', "Muuta sv_cheats tai käytä huijauskomentoja.");
define('OGP_LANG_sourcemod_flag_o', "Mukautettu ryhmä 1.");
define('OGP_LANG_sourcemod_flag_p', "Mukautettu ryhmä 2.");
define('OGP_LANG_sourcemod_flag_q', "Mukautettu ryhmä 3.");
define('OGP_LANG_sourcemod_flag_r', "Mukautettu ryhmä 4.");
define('OGP_LANG_sourcemod_flag_s', "Mukautettu ryhmä 5.");
define('OGP_LANG_sourcemod_flag_t', "Mukautettu ryhmä 6.");
define('OGP_LANG_rcon_reload_admins_failed', "Järjestelmänvalvojan välimuistin uudelleenlataus RCON:in kautta epäonnistui. onko se verkossa?");
define('OGP_LANG_reload_admins_failed', "Järjestelmänvalvojan välimuistin uudelleenlataus epäonnistui. \"sm_reloadadmins\" on tuntematon komento.");
define('OGP_LANG_reload_admins_success', "Onnistuneesti lisätty %s admins_simple.ini:in ja uudelleenladattu järjestelmänvalvojan välimuisti.");
define('OGP_LANG_add_success_no_rcon', "Onnistuneesti lisätty %s admins_simple.ini-tiedostoon, mutta ei voitu uudelleenladata järjestelmänvalvojan välimuistia.");
define('OGP_LANG_writefile_error', "Tapahtui tuntematon virhe kirjoittaessa: %s");
define('OGP_LANG_remotefile_nonexistent', "Uutta järjestelmänvalvojaa ei voi lisätä. Järjestelmänvalvojan tiedosto: %s ei ole tällä palvelimella.");
define('OGP_LANG_empty_flag_list', "Et valinnut yhtään järjestelmänvalvojan lippua.");
define('OGP_LANG_invalid_steam_format', "Antamasi SteamID ei vastaa vaadittua mallia.");
define('OGP_LANG_selected_server_offline', "Järjestelmänvalvojaa ei voi lisätä, valittua palvelinta hallitseva agentti on offline-tilassa.");
define('OGP_LANG_malformed_form', "Lähetit lomakkeen, jossa on väärin muotoiltuja piilotettuja elementtejä - järjestelmänvalvojaa ei voi lisätä.");
define('OGP_LANG_empty_form_data', "Täytä kaikki lomakkeen osat.");
define('OGP_LANG_server_not_selected', "Et ole valinnut palvelinta.");
define('OGP_LANG_invalid_steamid', "Olet antanut virheellisen Steam-ID:n.");
define('OGP_LANG_invalid_immunity', "Annoit virheellisen immuniteettiarvon.");
define('OGP_LANG_submit', "Lähetä");
define('OGP_LANG_post_failed', "POST-toiminto epäonnistui. Vastausta ei voi noutaa.");
define('OGP_LANG_amx_mod_admins', "AMX mod X järjestelmänvalvojat");
define('OGP_LANG_amx_login_type', "Kirjautumistyyppi");
define('OGP_LANG_amx_login_steamid', "Steam ID");
define('OGP_LANG_amx_login_nick_pass', "Nimimerkki + salasana");
define('OGP_LANG_nickname', "Nimimerkki");
define('OGP_LANG_amx_mod_perms', "AMX mod X oikeudet:");
define('OGP_LANG_amx_mod_perm_root', "AMX mod X kaikki liput.");
define('OGP_LANG_amx_mod_perm_custom', "AMX mod X mukautetut liput.");
define('OGP_LANG_amx_mod_flag_a', "Koskemattomuus (ei voida potkaista/bannata/tappaa/lyödä ja vaikuttaa muihin komentoihin)");
define('OGP_LANG_amx_mod_flag_b', "varaus (voi liittyä varattuihin paikkoihin)");
define('OGP_LANG_amx_mod_flag_c', "amx_kick-komento");
define('OGP_LANG_amx_mod_flag_d', "amx_ban- ja amx_unban-komennot");
define('OGP_LANG_amx_mod_flag_e', "amx_slay- ja amx_slap-komennot");
define('OGP_LANG_amx_mod_flag_f', "amx_map-komento");
define('OGP_LANG_amx_mod_flag_g', "amx_cvar-komento (kaikkia cvareja ei ole saatavana)");
define('OGP_LANG_amx_mod_flag_h', "amx_cfg-komento");
define('OGP_LANG_amx_mod_flag_i', "amx_chat ja muut chat-komennot");
define('OGP_LANG_amx_mod_flag_j', "amx_vote ja muut äänestyskomennot");
define('OGP_LANG_amx_mod_flag_k', "pääsy sv_password cvariin (amx_cvar-komennolla)");
define('OGP_LANG_amx_mod_flag_l', "pääsy amx_rcon-komentoon ja rcon_password cvariin (amx_cvar-komennolla)");
define('OGP_LANG_amx_mod_flag_m', "mukautettu taso A (ylimääräisiä liitännäisiä varten)");
define('OGP_LANG_amx_mod_flag_n', "mukautettu taso B");
define('OGP_LANG_amx_mod_flag_o', "mukautettu taso C");
define('OGP_LANG_amx_mod_flag_p', "mukautettu taso D");
define('OGP_LANG_amx_mod_flag_q', "mukautettu taso E");
define('OGP_LANG_amx_mod_flag_r', "mukautettu taso F");
define('OGP_LANG_amx_mod_flag_s', "mukautettu taso G");
define('OGP_LANG_amx_mod_flag_t', "mukautettu taso H");
define('OGP_LANG_amx_mod_flag_u', "valikkoon pääsy");
?>