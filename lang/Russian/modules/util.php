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

define('module_name', "Utilities");
define('ping', "Ping");
define('traceroute', "Traceroute");
define('network_tools', "Сетевые утилиты");
define('sourcemod_admins', "Админы Sourcemod");
define('steam_converter', "Конвертер SteamID");
define('your_ip', "Ваш IP-адрес");
define('loading_agents', "Loading online Agents...");
define('loading_failed', "Loading Agents failed.");
define('agents_offline', "All Agents are offline.");
define('no_commands', "Извините, у Вашей учетной записи нет прав доступа.");
define('remote_target', "Target IP Address:");
define('command', "Команда:");
define('select_agent', "Выберите Агента:");
define('chdir_failed', "Ошибка: chdir() вернул ошибку.");
define('agent_invalid', "Invalid Agent specified.");
define('networktools_agent_offline', "Невозможно выполнить команду над выбранным Агенте, поскольку он не в сети.");
define('target_empty', "Цель не выбрана.");
define('command_empty', "Команда не выбрана.");
define('command_unavilable', "Выбранная команда недоступна для выбранного агента.");
define('target_invalid', "Не верно введен IP или хост");
define('exec_failed', "Время ожидания ответа вышло.");
define('command_no_access', "У вас нет доступа к этой команде. Это будет записано в Лог.");
define('command_hacking_attempt', "Введены символы из черного списка. Это будет записано в Лог.");
define('command_bad_characters', "Попытка выполнить команду с искаженными/неправильными символами. Получено на вход:%s%s");
define('command_no_permissions', "Попытка выполнить команду с недостаточными разрешениями. Получено на вход: %s %s");
define('command_executed', "Команда успешно отправлена: %s%s");
define('no_servers', "У вас нет серверов, назначенных для вашей учетной записи.");
define('select_server', "Выбрать Сервер");
define('select_server_option', "Выбрать....");
define('steamid', "Steam ID:");
define('immunity', "Иммунитет:");
define('sourcemod_perms', "Право доступа Sourcemod:");
define('sourcemod_perm_root', "root флаг: z Sourcemod");
define('sourcemod_perm_custom', "Выбрать флаги Sourcemod ");
define('sourcemod_flag_a', "Резервный слот флаг: a");
define('sourcemod_flag_b', "Общий Админ; требуется для администраторов. флаг: b");
define('sourcemod_flag_c', "Кик игроков флаг: c");
define('sourcemod_flag_d', "Бан игроков флаг: d");
define('sourcemod_flag_e', "Разбан игроков флаг: e");
define('sourcemod_flag_f', "Убить/ранить игроков флаг: f");
define('sourcemod_flag_g', "Смена карт флаг: g");
define('sourcemod_flag_h', "Смена CVARs флаг: h");
define('sourcemod_flag_i', "Исполнение конфигов флаг: i");
define('sourcemod_flag_j', "Специальный админский чат флаг: j");
define('sourcemod_flag_k', "Голосования флаг: k");
define('sourcemod_flag_l', "Пароль сервера флаг: L");
define('sourcemod_flag_m', "РКОН команды флаг: m");
define('sourcemod_flag_n', "Разрешать sv_cheats ли использование чит-команд флаг: n");
define('sourcemod_flag_o', "Дополнительная группа 1 флаг: o");
define('sourcemod_flag_p', "Дополнительная группа 2 флаг p");
define('sourcemod_flag_q', "Дополнительная группа 3 флаг q");
define('sourcemod_flag_r', "Дополнительная группа 4 флаг r");
define('sourcemod_flag_s', "Дополнительная группа 5 флаг s");
define('sourcemod_flag_t', "Дополнительная группа 6 флаг t");
define('rcon_reload_admins_failed', "Не удалось перезагрузить кеш администратора через RCON; он в сети???");
define('reload_admins_failed', "Не удалось перезагрузить кеш администратора;  \"sm_reloadadmins\" неизвестная команда.");
define('reload_admins_success', "Успешно добавлен %s в admins_simple.ini и кеш администратора перезагрузили.");
define('add_success_no_rcon', "Успешно добавлен %s в admins_simple.ini файл, но не могу перезагрузить кеш администратора.");
define('writefile_error', "Неизвестная ошибка при записи в: %s");
define('remotefile_nonexistent', "Не удалось добавить нового администратора. Админ файл: %s на этом сервере не существует.");
define('empty_flag_list', "Вы не выбрали никаких флагов администратора.");
define('invalid_steam_format', "Введенный SteamID не соответствует требуемому параметру.");
define('selected_server_offline', "Не удалось добавить администратора, Агент, управляющий выбранным сервером, не в сети.");
define('malformed_form', "Вы отправили форму с искаженными скрытыми элементами - Не удалось добавить администратора.");
define('empty_form_data', "Пожалуйста, заполните все элементы формы.");
define('server_not_selected', "Вы не выбрали сервер.");
define('invalid_steamid', "Вы ввели недопустимый Steam ID.");
define('invalid_immunity', "Вы ввели недопустимое значение иммунитета.");
define('submit', "Отправить");
define('post_failed', "Действие POST не выполнено. Не удалось получить ответ.");
?>
