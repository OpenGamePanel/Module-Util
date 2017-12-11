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

define('OGP_LANG_module_name', "Utilidades");
define('OGP_LANG_ping', "Ping");
define('OGP_LANG_traceroute', "Traceroute");
define('OGP_LANG_network_tools', "Herramientas de Red");
define('OGP_LANG_sourcemod_admins', "Administradores Sourcemod");
define('OGP_LANG_steam_converter', "Convertidor SteamID");
define('OGP_LANG_your_ip', "Tu dirección IP:");
define('OGP_LANG_loading_agents', "Cargando agentes en línea ...");
define('OGP_LANG_loading_failed', "Error al cargar agentes.");
define('OGP_LANG_agents_offline', "Todos los agentes están fuera de línea.");
define('OGP_LANG_no_commands', "Perdón, tu cuenta de usuario no tiene comandos disponibles.");
define('OGP_LANG_remote_target', "Dirección IP de destino:");
define('OGP_LANG_command', "Comando:");
define('OGP_LANG_select_agent', "Seleccionar Agente:");
define('OGP_LANG_chdir_failed', "Error: chdir() retorno falso.");
define('OGP_LANG_agent_invalid', "Se ha especificado el Agente no válido.");
define('OGP_LANG_networktools_agent_offline', "No se puede ejecutar el comando en el Agente seleccionado, porque está sin conexión.");
define('OGP_LANG_target_empty', "No se ha asignado dirección de destino.");
define('OGP_LANG_command_empty', "No se ha seleccionado ningún comando.");
define('OGP_LANG_command_unavilable', "El comando seleccionado no está disponible en el agente seleccionado.");
define('OGP_LANG_target_invalid', "Introdujiste una Ip invalida/Nombre de host.");
define('OGP_LANG_exec_failed', "Tiempo de respuesta agotado.");
define('OGP_LANG_command_no_access', "No tienes acceso a este comando. Este incidente se registrara.");
define('OGP_LANG_command_hacking_attempt', "Se han introducido caracteres de la lista negra. Este incidente se registrara.");
define('OGP_LANG_command_bad_characters', "Se ha intentado introducir comandos con caracteres maliciosos. Entrada recibida %s %s");
define('OGP_LANG_command_no_permissions', "Se ha intentado ejecutar un comando con permisos insuficientes. Entrada recibida: %s %s");
define('OGP_LANG_command_executed', "Envió correctamente el siguiente comando: %s %s");
define('OGP_LANG_no_servers', "No tiene ningún servidor asignado a su cuenta.");
define('OGP_LANG_select_server', "Seleccionar servidor:");
define('OGP_LANG_select_server_option', "Seleccionar...");
define('OGP_LANG_steamid', "ID Steam:");
define('OGP_LANG_immunity', "Inmunidad:");
define('OGP_LANG_sourcemod_perms', "Permisos Sourcemod:");
define('OGP_LANG_sourcemod_perm_root', "Sourcemod Root Flag");
define('OGP_LANG_sourcemod_perm_custom', "Sourcemod Flags personalizadas");
define('OGP_LANG_sourcemod_flag_a', "Slot reservado.");
define('OGP_LANG_sourcemod_flag_b', "Admin genérico; requerido para admins.");
define('OGP_LANG_sourcemod_flag_c', "Expulsar otros jugadores.");
define('OGP_LANG_sourcemod_flag_d', "Banear otros jugadores.");
define('OGP_LANG_sourcemod_flag_e', "Remover bans.");
define('OGP_LANG_sourcemod_flag_f', "Matar/dañar a otro jugadores.");
define('OGP_LANG_sourcemod_flag_g', "Cambiar de mapa o las principales características de juego.");
define('OGP_LANG_sourcemod_flag_h', "Modificar la mayoría de las CVARs.");
define('OGP_LANG_sourcemod_flag_i', "Ejecutar archivos de configuración");
define('OGP_LANG_sourcemod_flag_j', "Privilegios especiales de chat");
define('OGP_LANG_sourcemod_flag_k', "Iniciar o crear votaciones");
define('OGP_LANG_sourcemod_flag_l', "Introducir contraseña al servidor.");
define('OGP_LANG_sourcemod_flag_m', "Usar comandos de RCON");
define('OGP_LANG_sourcemod_flag_n', "Modificar sv_cheats o usar comandos de cheats");
define('OGP_LANG_sourcemod_flag_o', "Grupo personalizado 1.");
define('OGP_LANG_sourcemod_flag_p', "Grupo personalizado 2.");
define('OGP_LANG_sourcemod_flag_q', "Grupo personalizado 3.");
define('OGP_LANG_sourcemod_flag_r', "Grupo personalizado 4.");
define('OGP_LANG_sourcemod_flag_s', "Grupo personalizado 5.");
define('OGP_LANG_sourcemod_flag_t', "Grupo personalizado 6.");
define('OGP_LANG_rcon_reload_admins_failed', "Fallo al recargar caché de admins vía RCON; está en línea?");
define('OGP_LANG_reload_admins_failed', "No se pudo volver a cargar el caché de administración; \"sm_reloadadmins\" es un comando desconocido.");
define('OGP_LANG_reload_admins_success', "Se agrego con exito %s a admins_simple.ini y se volvió a cargar el cache de administración.");
define('OGP_LANG_add_success_no_rcon', "Se agrego con éxito %s a admins_simple.ini, pero no se pudo volver a cargar el cache de administrador.");
define('OGP_LANG_writefile_error', "Se ha producido un error desconocido de escritura en: %s");
define('OGP_LANG_remotefile_nonexistent', "No se puede agregar un nuevo administrador. El archivo de administrador: %s no existe en este servidor.");
define('OGP_LANG_empty_flag_list', "No has seleccionado ningún acceso de administrador.");
define('OGP_LANG_invalid_steam_format', "El SteamID que ingreso no coincido con el patrón requerido.");
define('OGP_LANG_selected_server_offline', "No se puede agregar un administrador, el agente que controla el servidor seleccionado no está conectado.");
define('OGP_LANG_malformed_form', "Has enviado un formulario con elementos ocultos mal formados - no puedes agregar un administrador.");
define('OGP_LANG_empty_form_data', "Por favor llene todos los elementos del formulario.");
define('OGP_LANG_server_not_selected', "No ha seleccionado un servidor.");
define('OGP_LANG_invalid_steamid', "Ha introducido un Steam ID no válido.");
define('OGP_LANG_invalid_immunity', "Ha introducido un valor de inmunidad no válido.");
define('OGP_LANG_submit', "Enviar");
define('OGP_LANG_post_failed', "La acción ANTERIOR fallo. No se puede recuperar una respuesta.");
?>