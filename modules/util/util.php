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

function exec_ogp_module() 
{
	global $db;
	include 'util_config.php';
	
	$userInfo = $db->getUserById($_SESSION['user_id']);
	$userRole = $userInfo['users_role'];
	$commands = array();
	
	foreach($availableCommands as $command){
		if($userRole == 'admin' && $command['admin'] === true){
			$commands[] = '<option value="'.$command['title'].'">'.get_lang($command['title']).'</option>';
		}
		
		if($userRole == 'user' && $command['user'] === true){
			$commands[] = '<option value="'.$command['title'].'">'.get_lang($command['title']).'</option>';
		}
		
		if($userRole == 'subuser' && $command['subuser'] === true){
			$commands[] = '<option value="'.$command['title'].'">'.get_lang($command['title']).'</option>';
		}
	}
?>
<h2><?php echo get_lang('module_name'); ?></h2>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1"><?php echo get_lang('network_tools'); ?></a></li>
		<li><a href="#tabs-2"><?php echo get_lang('sourcemod_admins'); ?></a></li>
		<li><a href="#tabs-3"><?php echo get_lang('steam_converter'); ?></a></li>
	</ul>
	
	<div id="tabs-1">
		<div>
			<span id="loading_agents" class="show"><?php echo get_lang('loading_agents'); ?></span>
			<span id="loading_failed" class="hide"><?php echo get_lang('loading_failed'); ?></span>
			<span id="no_commands" class="hide"><?php echo get_lang('no_commands'); ?></span>
			<span id="agents_offline" class="hide"><?php echo get_lang('agents_offline'); ?></span>
		</div>
		
		<div id="options" class="hide">
			<div><?php echo get_lang('your_ip'); ?> <span id="your-address"><?php echo getClientIPAddress(); ?></span></div>
			<form action="" method="POST" id="network_tools">
				<div id="select_agent"></div>
				
				<label for="command"><?php echo get_lang('command'); ?></label>
				<select id="command" name="command"><?php echo implode('', $commands); ?></select>
				
				<label for="remote_target"><?php echo get_lang('remote_target'); ?></label>
				<input type="text" id="remote_target" name="remote_target" required>
				<button type="submit"><?php echo get_lang('submit'); ?></button>
			</form>
		</div>
		
		<div id="loading" class="hide"></div>
		<div id="output" class="hide"></div>
	</div><!--/#tabs-1-->
	
	<div id="tabs-2">
		<div>
			<div>
				<span id="no_servers" class="hide"><?php echo get_lang('no_servers'); ?></span>
			</div>
			
			<div id="add_admin" class="hide">
				<form action="" method="POST" id="addadmin_form">
					<div id="games"></div>
					
					<label for="addSteamid"><?php echo get_lang('steamid'); ?></label>
					<input type="text" id="addSteamid" name="addSteamid" pattern="^STEAM_[01]:[01]:\d+$" required>
					
					
					<label for="immunity"><?php echo get_lang('immunity'); ?></label>
					<input type="number" id="immunity" name="immunity" min="1" max="99">
					
					<label for="sourcemod_perms"><?php echo get_lang('sourcemod_perms'); ?></label>
					<select id="sourcemod_perms" name="sourcemod_perms">
						<option value="root"><?php echo get_lang('sourcemod_perm_root'); ?></option>
						<option value="custom"><?php echo get_lang('sourcemod_perm_custom'); ?></option>
					</select>
					
					<div id="sourcemod_flagList" class="hide">
						<fieldset>
							<?php
								foreach(range('a', 't') as $flag){
							?>
							
							<div class="item">
								<input type="checkbox" id="flag_<?php echo $flag; ?>" name="flags[]" value="<?php echo $flag; ?>">
								<label for="flag_<?php echo $flag; ?>"><?php echo get_lang('sourcemod_flag_'.$flag); ?></label>
							</div>
							
							<?php
								}
							?>
						</fieldset>
					</div>
					
					<input type="hidden" name="remote_server_id" id="remote_server_id" value="">
					<input type="hidden" name="gameserver_name" id="gameserver_name" value="">
					<input type="hidden" name="gameserver_ip" id="gameserver_ip" value="">
					<input type="hidden" name="gameserver_port" id="gameserver_port" value="">
					
					<button type="submit"><?php echo get_lang('submit'); ?></button>
				</form>
			</div>
			
			<div id="invalid_server" class="hide"><?php echo get_lang('server_not_selected'); ?></div>
			<div id="invalid_steamid_admin" class="hide"><?php echo get_lang('invalid_steamid'); ?></div>
			<div id="invalid_response_admin" class="hide"><?php echo get_lang('post_failed'); ?></div>
			<div id="invalid_immunity" class="hide"><?php echo get_lang('invalid_immunity'); ?></div>
			
			<div id="all_servers_offline" class="hide"><?php echo get_lang('agents_offline'); ?></div>
			
			<div id="addadmin_response" class="hide"></div>
		</div>
	</div><!--/#tabs-2-->
	
	<div id="tabs-3">
		<div>
			<form action="" method="POST" id="steam_converter">
				<label for="steam_input">SteamID / SteamID3 / SteamID64 / CustomID:</label>
				<input type="text" name="steam_input" id="steam_input" required>
				
				<button type="submit"><?php echo get_lang('submit'); ?></button>
			</form>
		</div>
		
		<div id="invalid_steamid" class="hide"><?php echo get_lang('invalid_steamid'); ?></div>
		<div id="invalid_response" class="hide"><?php echo get_lang('post_failed'); ?></div>
		
		<div id="steam_info">
			<div id="steamLink"></div>
			<div id="steamId"></div>
			<div id="steamId3"></div>
			<div id="steamId64"></div>
		</div>
	</div><!--/#tabs-3-->
</div> <!--/#tabs-->

<script>
	$(function(){
		$("#tabs").tabs();
		$("#loading").removeClass('hide').addClass('show');
		
		// Load the agents via an external script so the user isn't waiting an eternity if they have several agents and multiple are offline
		$.getJSON("modules/util/agents.php", function(data){
			var agents = "";
			var agentsOnline = 0;
			
			$("#loading_agents").removeClass('show').addClass('hide');
			$("#loading").removeClass('show').addClass('hide');
			$("#options").removeClass('hide').addClass('show');
			
			agents += "<label for=\"agent\"><?php echo get_lang('select_agent'); ?></label>\r\n"
			agents += "<select id=\"agent\" name=\"agent\">\r\n"
			
			for(var i = 0; i<data.length; ++i){
				agents += "\t<option value=\"" + data[i]['id'] + "\"" + (data[i]['status']===0?" disabled":"") + ">" + data[i]['name'] +"</option>\r\n";
				
				if(data[i]['status'] == 1){
					++agentsOnline;
				}
			}
			
			agents += "</select>";
			
			if(agentsOnline == 0){
				$("#options").removeClass('show').addClass('hide');
				$("#agents_offline").removeClass('hide').addClass('show');
				
				// Hide the sourcemod add admin form if all agents are offline.
				$("#addadmin_form").addClass('hide');
				$("#all_servers_offline").removeClass('hide').addClass('show');
			}else if($("#command option").length == 0){
				$("#options").removeClass('show').addClass('hide');
				$("#no_commands").removeClass('hide').addClass('show');
			}else{
				$("#select_agent").html(agents);
			}
		}).fail(function(){
			$("#loading_agents").removeClass('show').addClass('hide');
			$("#loading").removeClass('show').addClass('hide');
			$("#loading_failed").removeClass('hide').addClass('show');
		});
		
		// Handle the network_tools form.
		$("#network_tools").on("submit", function(e){
			var target = $("#remote_target").val();
			var agent = $("#agent").val();
			var command = $("#command").val();
			
			// Some validation browser-side. Still need to do the same server-side.
			if(target.length === 0){
				// target input is empty.
				$("#output").removeClass('hide').addClass('show').html("<pre><?php echo get_lang('target_empty'); ?></pre>");
			}else if(agent.length === 0){
				// We'll only get to this point if there's no agents, or all agents are offline but the form was still submitted.
				$("#output").removeClass('hide').addClass('show').html("<pre><?php echo get_lang('agent_invalid'); ?></pre>");
			}else if(command.length === 0){
				// We'll only get to this point if there's no command specified.
				$("#output").removeClass('hide').addClass('show').html("<pre><?php echo get_lang('command_empty'); ?></pre>");
			}else{
				$("#loading").removeClass('hide').addClass('show');
				$("#output").removeClass('show').addClass('hide')
				
				$("#network_tools button").prop({disabled:true}); // Disable the submit button if we're about to post - preventing stuff being ran several times via spamming the button and/or enter.
				$.post("modules/util/network_tools.php", $("#network_tools").serialize(), function(postCommand){
					$("#loading").removeClass('show').addClass('hide');
					$("#output").removeClass('hide').addClass('show').html("<pre>" + postCommand + "</pre>");
					
					$("#network_tools button").prop({disabled:false});
				}).fail(function(){
					$("#loading").removeClass('show').addClass('hide');
					$("#output").removeClass('hide').addClass('show').html("<pre><?php echo get_lang('post_failed'); ?></pre>");
					
					$("#network_tools button").prop({disabled:false});
				});
			}
			e.preventDefault();
		});// ./end network_tools form handling.
		
		// ----- Sourcemod Admins -----
		$.getJSON("modules/util/addadmin_helper.php", function(gs){
			if(gs.length === 0){
				$("#no_servers").removeClass('hide').addClass('show');
			}else{
				var games = "";
				$("#add_admin").removeClass('hide').addClass('show');
				
				games += "<label for=\"gameserver_id\"><?php echo get_lang('select_server'); ?></label>\r\n"
				games += "<select id=\"gameserver_id\" name=\"gameserver_id\">\r\n"
				games += "<option value=\"0\" selected><?php echo get_lang('select_server_option'); ?></option>\r\n"
				
				for(var i = 0; i<gs.length; ++i){
					games += "\t<option value=\"" + gs[i]['home_id'] + "\">" + gs[i]['home_name'] +"</option>\r\n";
				}
				
				games += "</select>";
				$("#games").html(games);
				
				$("#gameserver_id").change(function(){
					var home = $("#gameserver_id").val();
					var gameserver_id = $("#gameserver_id").val();
					
					// although the disabled attribute is put on the option, set all the values to 0 if it's somehow chosen again via the form being edited
					if(gameserver_id == 0){
						$("#remote_server_id").val(0);
						$("#gameserver_name").val(0);
						$("#gameserver_ip").val(0);
						$("#gameserver_port").val(0);
					}else{
						for(var i = 0; i<gs.length; ++i){
							if(home === gs[i]['home_id']){
								$("option[value='0']").attr("disabled", "disabled");
								$("#remote_server_id").val(gs[i]['remote_server_id']);
								$("#gameserver_name").val(gs[i]['game_name']);
								$("#gameserver_ip").val(gs[i]['ip']);
								$("#gameserver_port").val(gs[i]['port']);
								break;
							}
						}
					}
				});
			}
		}); // ./end Sourcemod Admins
		
		$("#sourcemod_perms").change(function(){
			var sourcemod_perms = $("#sourcemod_perms").val();
			
			if(sourcemod_perms === 'root'){
				$("#sourcemod_flagList").removeClass('show').addClass('hide');
				$('.item input[type="checkbox"]').prop('checked', false);
			}else{
				$("#sourcemod_flagList").removeClass('hide').addClass('show');
			}
		});
		
		// Process the sourcemod admin form on submission.
		$("#addadmin_form").on("submit", function(e){
			$("#addadmin_form button").prop({disabled:true});
			
			var errors = 0;
			var remoteId = $("#remote_server_id").val();
			var gameName = $("#gameserver_name").val();
			var gameIp = $("#gameserver_ip").val();
			var gamePort = $("#gameserver_port").val();
			var addSteamid = $("#addSteamid").val();
			var immunity = $("#immunity").val();
			
			// Set the message divs back to defaults.
			$("#invalid_server").removeClass('show').addClass('hide');
			$("#invalid_steamid_admin").removeClass('show').addClass('hide');
			$("#invalid_response_admin").removeClass('show').addClass('hide');
			$("#invalid_immunity").removeClass('show').addClass('hide');
			$("#addadmin_response").removeClass('show').addClass('hide');
			
			if(remoteId.length === 0 || gameName.length === 0 || gameIp.length === 0 || gamePort.length === 0){
				$("#invalid_server").removeClass('hide').addClass('show');
				++errors;
			}
			
			if(!(addSteamid.match(/^STEAM_[01]:[01]:\d+$/))){
				$("#invalid_steamid_admin").removeClass('hide').addClass('show');
				++errors;
			}
			
			if(immunity.length > 2 || isNaN(immunity)){
				$("#invalid_immunity").removeClass('hide').addClass('show');
				++errors;
			}
			
			if(errors === 0){
				$.post("modules/util/addadmin_helper.php", $("#addadmin_form").serialize(), function(postCommand){
					$("#addadmin_response").removeClass('hide').addClass('show').html(postCommand);
					$("#addadmin_form button").prop({disabled:false});
				}).fail(function(){
					$("#invalid_response_admin").removeClass('hide').addClass('show');
					$("#addadmin_form button").prop({disabled:false});
				});
			}else{
				$("#addadmin_form button").prop({disabled:false});
			}
			
			e.preventDefault();
		}); // add_admin form handling
		
		// ----- Steam Converter -----
		$("#steam_converter").on("submit", function(e){
			$("#steam_converter button").prop({disabled:true});
			$.post("modules/util/steamid_converter.php", $("#steam_converter").serialize(), function(steam_data){
				var json = $.parseJSON(steam_data);
				
				if(json.length === 0){
					$("#steam_info").removeClass('show').addClass('hide');
					$("#invalid_steamid").removeClass('hide').addClass('show');
					$("#invalid_response").removeClass('show').addClass('hide');
					
					$("#steam_converter button").prop({disabled:false});
				}else{
					$("#steam_info").removeClass('hide').addClass('show');
					$("#invalid_steamid").removeClass('show').addClass('hide');
					$("#invalid_response").removeClass('show').addClass('hide');
					
					$("#steamLink").html('<b>Profile Link:</b> ' + json.steamProfile);
					$("#steamId").html('<b>Legacy ID:</b> ' + json.steamId);
					$("#steamId3").html('<b>SteamID3:</b> ' + json.steamId3);
					$("#steamId64").html('<b>SteamID64:</b> ' + json.communityId);
					
					$("#steam_converter button").prop({disabled:false});
				}
			}).fail(function(){
				$("#invalid_steamid").removeClass('show').addClass('hide');
				$("#steam_info").removeClass('show').addClass('hide');
				$("#invalid_response").removeClass('hide').addClass('show');
			});
			e.preventDefault();
		}); // ./end steam_converter form handling.
		
		$("#your-address").click(function(){
			$("#remote_target").val($("#your-address").text());
		});
	});
</script>
<?php
}
?>
