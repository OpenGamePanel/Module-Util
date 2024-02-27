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

define('OGP_LANG_module_name', "工具");
define('OGP_LANG_ping', "Ping");
define('OGP_LANG_traceroute', "路由跟踪");
define('OGP_LANG_network_tools', "网络工具");
define('OGP_LANG_sourcemod_admins', "Sourcemod管理员");
define('OGP_LANG_steam_converter', "SteamID转换器");
define('OGP_LANG_your_ip', "您的IP地址：");
define('OGP_LANG_loading_agents', "正在加载在线代理...");
define('OGP_LANG_loading_failed', "加载代理失败。");
define('OGP_LANG_agents_offline', "所有代理都离线。");
define('OGP_LANG_no_commands', "抱歉，您的用户账户没有可用命令。");
define('OGP_LANG_remote_target', "目标IP地址：");
define('OGP_LANG_command', "命令：");
define('OGP_LANG_select_agent', "选择代理：");
define('OGP_LANG_chdir_failed', "错误：chdir()返回false。");
define('OGP_LANG_agent_invalid', "指定的代理无效。");
define('OGP_LANG_networktools_agent_offline', "无法在所选代理上执行您的命令，因为它处于离线状态。");
define('OGP_LANG_target_empty', "未给出远程目标。");
define('OGP_LANG_command_empty', "未选择命令。");
define('OGP_LANG_command_unavilable', "所选代理上不可用的选定命令。");
define('OGP_LANG_target_invalid', "输入了无效的IP/主机名。");
define('OGP_LANG_exec_failed', "等待响应时超时。");
define('OGP_LANG_command_no_access', "您无权访问此命令。此事件将被记录。");
define('OGP_LANG_command_hacking_attempt', "输入了黑名单字符。此事件将被记录。");
define('OGP_LANG_command_bad_characters', "尝试使用恶意字符执行命令。接收到的输入：%s %s");
define('OGP_LANG_command_no_permissions', "尝试使用不足权限执行命令。接收到的输入：%s %s");
define('OGP_LANG_command_executed', "成功发送以下命令：%s %s");
define('OGP_LANG_no_servers', "您的账户未分配任何服务器。");
define('OGP_LANG_select_server', "选择服务器：");
define('OGP_LANG_select_server_option', "选择...");
define('OGP_LANG_steamid', "Steam ID：");
define('OGP_LANG_immunity', "状态：");
define('OGP_LANG_sourcemod_perms', "Sourcemod权限：");
define('OGP_LANG_sourcemod_perm_root', "Sourcemod根标志");
define('OGP_LANG_sourcemod_perm_custom', "Sourcemod自定义标志");
define('OGP_LANG_sourcemod_flag_a', "保留玩家数量访问权限。");
define('OGP_LANG_sourcemod_flag_b', "通用管理员；管理员所需。");
define('OGP_LANG_sourcemod_flag_c', "踢出其他玩家。");
define('OGP_LANG_sourcemod_flag_d', "封禁其他玩家。");
define('OGP_LANG_sourcemod_flag_e', "移除封禁。");
define('OGP_LANG_sourcemod_flag_f', "杀死/伤害其他玩家。");
define('OGP_LANG_sourcemod_flag_g', "更改地图或主要游戏功能。");
define('OGP_LANG_sourcemod_flag_h', "更改大多数CVARs。");
define('OGP_LANG_sourcemod_flag_i', "执行配置文件。");
define('OGP_LANG_sourcemod_flag_j', "特殊聊天权限。");
define('OGP_LANG_sourcemod_flag_k', "开始或创建投票。");
define('OGP_LANG_sourcemod_flag_l', "在服务器上设置密码。");
define('OGP_LANG_sourcemod_flag_m', "使用RCON命令。");
define('OGP_LANG_sourcemod_flag_n', "更改sv_cheats或使用作弊命令。");
define('OGP_LANG_sourcemod_flag_o', "自定义组1。");
define('OGP_LANG_sourcemod_flag_p', "自定义组2。");
define('OGP_LANG_sourcemod_flag_q', "自定义组3。");
define('OGP_LANG_sourcemod_flag_r', "自定义组4。");
define('OGP_LANG_sourcemod_flag_s', "自定义组5。");
define('OGP_LANG_sourcemod_flag_t', "自定义组6。");
define('OGP_LANG_rcon_reload_admins_failed', "通过RCON重新加载管理员缓存失败；它是否在线？");
define('OGP_LANG_reload_admins_failed', "重新加载管理员缓存失败；\"sm_reloadadmins\"是未知命令。");
define('OGP_LANG_reload_admins_success', "成功将%s添加到admins_simple.ini并重新加载了管理员缓存。");
define('OGP_LANG_add_success_no_rcon', "成功将%s添加到您的admins_simple.ini文件，但无法重新加载管理员缓存。");
define('OGP_LANG_writefile_error', "写入：%s时出现未知错误");
define('OGP_LANG_remotefile_nonexistent', "无法添加新管理员。管理员文件：%s在此服务器上不存在。");
define('OGP_LANG_empty_flag_list', "您没有选择任何管理员标志。");
define('OGP_LANG_invalid_steam_format', "您输入的SteamID不符合所需的模式。");
define('OGP_LANG_selected_server_offline', "无法添加管理员，因为控制所选服务器的代理处于离线状态。");
define('OGP_LANG_malformed_form', "您提交了一个带有畸形隐藏元素的表单 - 无法添加管理员。");
define('OGP_LANG_empty_form_data', "请填写表单的所有元素。");
define('OGP_LANG_server_not_selected', "您尚未选择服务器。");
define('OGP_LANG_invalid_steamid', "您输入了无效的Steam ID。");
define('OGP_LANG_invalid_immunity', "您输入了无效的状态值。");
define('OGP_LANG_submit', "提交");
define('OGP_LANG_post_failed', "POST操作失败。无法检索响应。");
define('OGP_LANG_amx_mod_admins', "AMX mod X管理员");
define('OGP_LANG_amx_login_type', "登录类型");
define('OGP_LANG_amx_login_steamid', "Steam ID");
define('OGP_LANG_amx_login_nick_pass', "昵称+密码");
define('OGP_LANG_nickname', "昵称");
define('OGP_LANG_amx_mod_perms', "AMX mod X权限：");
define('OGP_LANG_amx_mod_perm_root', "AMX mod X所有标志。");
define('OGP_LANG_amx_mod_perm_custom', "AMX mod X自定义标志。");
define('OGP_LANG_amx_mod_flag_a', "状态（不能被kicked/baned/slayed/slaped和受其他命令影响）");
define('OGP_LANG_amx_mod_flag_b', "保留（可以加入保留玩家数量）");
define('OGP_LANG_amx_mod_flag_c', "amx_kick命令");
define('OGP_LANG_amx_mod_flag_d', "amx_ban和amx_unban命令");
define('OGP_LANG_amx_mod_flag_e', "amx_slay和amx_slap命令");
define('OGP_LANG_amx_mod_flag_f', "amx_map命令");
define('OGP_LANG_amx_mod_flag_g', "amx_cvar命令（并非所有cvars都将可用）");
define('OGP_LANG_amx_mod_flag_h', "amx_cfg命令");
define('OGP_LANG_amx_mod_flag_i', "amx_chat和其他聊天命令");
define('OGP_LANG_amx_mod_flag_j', "amx_vote和其他投票命令");
define('OGP_LANG_amx_mod_flag_k', "访问sv_password cvar（通过amx_cvar命令）");
define('OGP_LANG_amx_mod_flag_l', "访问amx_rcon命令和rcon_password cvar（通过amx_cvar命令）");
define('OGP_LANG_amx_mod_flag_m', "自定义级别A（用于附加插件）");
define('OGP_LANG_amx_mod_flag_n', "自定义级别B");
define('OGP_LANG_amx_mod_flag_o', "自定义级别C");
define('OGP_LANG_amx_mod_flag_p', "自定义级别D");
define('OGP_LANG_amx_mod_flag_q', "自定义级别E");
define('OGP_LANG_amx_mod_flag_r', "自定义级别F");
define('OGP_LANG_amx_mod_flag_s', "自定义级别G");
define('OGP_LANG_amx_mod_flag_t', "自定义级别H");
define('OGP_LANG_amx_mod_flag_u', "菜单访问");
?>