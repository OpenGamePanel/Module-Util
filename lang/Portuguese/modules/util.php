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

define('module_name', "Utilidades");
define('ping', "Ping");
define('traceroute', "Traceroute");
define('network_tools', "Ferramentas de rede");
define('sourcemod_admins', "Sourcemod Admins");
define('steam_converter', "SteamID Converter");
define('your_ip', "Teu endereço de IP:");
define('loading_agents', "Carregando agentes online ...");
define('loading_failed', "Carregando Agentes falhou.");
define('agents_offline', "Todos os Agentes estão offline.");
define('no_commands', "Desculpe, sua conta de usuário não possui comandos disponíveis.");
define('remote_target', "Endereço IP alvo:");
define('command', "Comando:");
define('select_agent', "Selecione Agente:");
define('chdir_failed', "Erro: chdir() retornou falso.");
define('agent_invalid', "Agente inválido especificado.");
define('networktools_agent_offline', "Não é possível executar seu comando no Agente selecionado, porque está offline.");
define('target_empty', "Nenhum alvo remoto dado.");
define('command_empty', "Nenhum comando selecionado.");
define('command_unavilable', "O comando selecionado não está disponível no agente selecionado.");
define('target_invalid', "IP/host inválido inserido.");
define('exec_failed', "Tempo de espera enquanto esperava uma resposta.");
define('command_no_access', "Você não tem acesso a este comando. Este incidente será registrado.");
define('command_hacking_attempt', "Foram inseridos caracteres na lista negra. Este incidente será registrado.");
define('command_bad_characters', "Tentou executar um comando com caracteres mal-intencionados. Entrada recebida: %s %s");
define('command_no_permissions', "Tentou executar um comando com permissões insuficientes. Entrada recebida: %s %s");
define('command_executed', "Enviou com êxito o seguinte comando: %s %s");
define('no_servers', "Você não possui servidores atribuídos à sua conta.");
define('select_server', "Selecione Servidor:");
define('select_server_option', "Selecione...");
define('steamid', "Steam ID:");
define('immunity', "Immunity:");
define('sourcemod_perms', "Sourcemod Permissions:");
define('sourcemod_perm_root', "Sourcemod Root Flag");
define('sourcemod_perm_custom', "Sourcemod Custom Flags");
define('sourcemod_flag_a', "Acesso ao slot reservado.");
define('sourcemod_flag_b', "Administrador genérico; Necessário para administradores.");
define('sourcemod_flag_c', "Chute outros jogadores.");
define('sourcemod_flag_d', "Banir outros jogadores.");
define('sourcemod_flag_e', "Remova os ban's.");
define('sourcemod_flag_f', "Matar/prejudicar outros jogadores.");
define('sourcemod_flag_g', "Mude o mapa ou os principais recursos de jogabilidade.");
define('sourcemod_flag_h', "Mude a maioria dos CVARs.");
define('sourcemod_flag_i', "Execute arquivos de configuração.");
define('sourcemod_flag_j', "Privilégios especiais de chat");
define('sourcemod_flag_k', "Comece ou crie votações.");
define('sourcemod_flag_l', "Defina uma senha no servidor.");
define('sourcemod_flag_m', "Use os comandos RCON.");
define('sourcemod_flag_n', "Altere sv_cheats ou use comandos de trapaça.");
define('sourcemod_flag_o', "Grupo personalizado 1.");
define('sourcemod_flag_p', "Grupo personalizado 2.");
define('sourcemod_flag_q', "Personalizado Grupo 3.");
define('sourcemod_flag_r', "Grupo personalizado 4.");
define('sourcemod_flag_s', "Grupo personalizado 5.");
define('sourcemod_flag_t', "Grupo personalizado 6.");
define('rcon_reload_admins_failed', "Falha ao recarregar o cache do administrador via RCON; Está online?");
define('reload_admins_failed', "Falha ao recarregar o cache do administrador; \"sm_reloadadmins\" é um comando desconhecido.");
define('reload_admins_success', "Adicionou %s de forma bem-sucedida a admins_simple.ini e recarregou o cache do administrador.");
define('add_success_no_rcon', "Acrescentou %s ao seu arquivo admins_simple.ini, mas não foi possível recarregar o cache do administrador.");
define('writefile_error', "Houve um erro desconhecido ao escrever para: %s");
define('remotefile_nonexistent', "Não foi possível adicionar um novo administrador. Arquivo de administração: %s não existem neste servidor.");
define('empty_flag_list', "Você não selecionou nenhum sinalizador de administração.");
define('invalid_steam_format', "O SteamID que você digitou não corresponde ao padrão exigido.");
define('selected_server_offline', "Não é possível adicionar um administrador, o agente que controla o servidor selecionado está desconectado.");
define('malformed_form', "Você enviou um formulário com elementos ocultos malformados - incapaz de adicionar um administrador.");
define('empty_form_data', "Preencha todos os elementos do formulário.");
define('server_not_selected', "Você não selecionou um servidor.");
define('invalid_steamid', "Você digitou um ID de Steam inválido.");
define('invalid_immunity', "Você inseriu um valor de imunidade inválido.");
define('submit', "Submeter");
define('post_failed', "A ação POST falhou. Não foi possível recuperar uma resposta.");
?>