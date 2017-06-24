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

	include 'util_config.php';
	
	session_name($sessionName);
	session_start();
	
	if(!empty($_SESSION['user_id'])){
		// This entire section is nothing but a big, messy, workaround.
		// Make ogpLang happy.
		$_REQUEST['m'] = 'util';
		// We need to change directory to be able to include lib_remote and make a database connection without any errors
		// This is becasue the following files include other files via their relative path rather than absolute path... could be fixed by editing them... but until then, this is just a hacky workaround.
		$cwd = getcwd();
		if(chdir('../../') === true){
			require_once('includes/config.inc.php');
			require_once('includes/helpers.php');
			include_once("includes/lang.php");
			ogpLang();
			
			require_once('includes/lib_remote.php');
			
			$db = createDatabaseConnection($db_type, $db_host, $db_user, $db_pass, $db_name, $table_prefix);
		}else{
			die(get_lang('chdir_failed'));
		}
		
		if(chdir($cwd) === false){
			die(get_lang('chdir_failed'));
		}
		
		// Actual script functions now.
		$remoteServers = $db->getRemoteServers();
		$servers = array();
		
		if(is_array($remoteServers)){
			foreach($remoteServers as $server){
				$remote = new OGPRemoteLibrary($server['agent_ip'], $server['agent_port'], $server['encryption_key'], 1);
				$status = (int)$remote->status_chk();
				
				$servers[] = array(
					'id'		=>	$server['remote_server_id'],
					'name'		=>	$server['remote_server_name'] .' '. (($status) === 0 ? '('.get_lang('offline').')' : '('.get_lang('online').')'),
					'status'	=>	$status,
				);
			}
		}
		echo json_encode($servers);
	}else{
		header('HTTP/1.0 403 Forbidden');
		exit;
	}
?>