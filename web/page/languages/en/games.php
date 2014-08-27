 <?php
$lang['hours'] = "Hours";
$lang['message'] = "Message";

$lang['game_status'] = "Game Summary";
$lang['game_log'] = "Log";
$lang['game_admin'] = "Administrate";
$lang['game_save'] = "Save Game";
$lang['game_restart'] = "Restart Pitboss Server";
$lang['game_restart_warning'] = "Warning, currently %s players are logged in on the Pitboss Server.";
$lang['game_restart_running'] = "Running Instance";
$lang['game_webserverpassword'] = "Change password of game administration";

$lang['game_players'] = "Players";
$lang['game_name'] = "Name";
$lang['game_turn'] = "Turn";
$lang['game_date'] = "Date";
$lang['game_timer'] = "Timer";
$lang['game_pause'] = "Break";
$lang['game_paused'] = "Game paused";
$lang['game_pause_enable'] = "Enable Pause";
$lang['game_pause_disable'] = "Disable Pause";
$lang['game_comment'] = "Comment";
$lang['game_end_turn'] = "End Turn";
$lang['game_player'] = "Player";
$lang['game_password'] = "Password";
$lang['game_leader'] = "Leader";
$lang['game_civilization'] = "Civilization";
$lang['game_score'] = "Score";
$lang['game_player_status'] = "Status";
$lang['game_chat_message'] = "Send game chat message";
$lang['game_chat_message_successful'] = "Message „%s“ was send.";
$lang['game_set_timer'] = "Change Turn Timer";
$lang['game_set_timer_successful'] = "Set turn timer on %s.";
$lang['game_end_round'] = "Force End of Turn";
$lang['game_end_turn_successful'] = "A new turn was started.";
$lang['game_end_turn_error'] = "Error. The server replys: ";
$lang['game_end_turn_ask'] = "Are you sure to start a new round?";
$lang['game_set_autostart_flag'] = "Automatic save game loading";
$lang['game_autostart_enable'] = "Enable automatic save game loading";
$lang['game_autostart_disable'] = "Disable automatic save game loading";
$lang['game_set_headless_flag'] = "Hide Pitboss Window";
$lang['game_headless_enable'] = "Headless mode (no gui)";
$lang['game_headless_disable'] = "Normal mode (with gui)";
$lang['game_player_password_change'] = "Change Password of Player";
$lang['game_operation_already_done'] = "This operation was already done. Click on '".$lang['game_admin']."' to start a new operation.";

$lang['game_error_msg'] = "Operation fails. The Pitboss server replys: <br>";
$lang['game_success_msg'] = "Operation successful. The Pitboss server replys: <br>";

$lang['game_admin_back'] = "Back to '".$lang['game_admin']."'.";
$lang['game_status_error'] = "Can not read game status. Error message:<br>";
$lang['game_connection_error0'] = "Error. Can not etablish connetion to Pitboss server.";
$lang['game_connection_error1'] = "Connection to Pitboss Server fails. Show last known status.";
$lang['game_connection_error2'] = "Connection to Pitboss Server fails. No older data available, too.";
$lang['game_password_success'] = "The player password was changed.";
$lang['game_password_error'] = "Error, can not update password. The server replies:<br>";
$lang['game_save_file'] = "'%s' saved.";
$lang['game_pause_successful'] = "Pause flag was set to: %s.";
$lang['game_notes_save_file'] = "Write filename without extension.</p><p>The ALTROOT-argument infuence the foldor for savegames.";

$lang['game_notes_restart'] = "Saves can be protected by an admin password. The password can be deposited in the configuration file 'pbSettings.json'. You can only restart saves with the same password.
	</p><p>You can not use the webinterface during the restart.";
$lang['game_invoke_restart1'] = "Game was saved and server is restarting.";
$lang['game_invoke_restart2'] = "Set desired file to '%s' and invoke pitboss server restart.";

$lang['game_notes_password'] = "To control the Pitboss server the <i>webpassword</i> is required. It's defined in 'pbSettings.json'.
	</p><p>Your password will be stored in a cookie. It's not required to create an account on this site to set/use game administration passwords.
	</p><p>The game administration password isn't related to the account of the game creator. Other players can manage the Pitboss server, too. ";

$lang['game_notes_autostart'] =  "Attention: The webinterface requires a running game. If you disable the autostart, you has no remote access until the host has load an save game by hand.
</p><p>Nevertheless, you can use the restart function even if the autostart is disabled (autostart will be enabled on time if you restart).";

$lang['game_notes_headless'] = "The redrawing of the Pitboss administration window on the local machine causes needless CPU load. If you use the webinterface for all administration tasks you can disable the GUI with this option.";

$lang['game_notes_set_timer'] = "The new turn timer value will be applied next round.";
$lang['game_notes_end_round'] = "Attention! Currently, no AI action (i.e. automated workers) will be done.";

$lang['game_notes_player_password'] = "Note: Please use no special chars. They could be interpreted wrong.";

// Log messages
$lang['log_player_change_name'] = "Changed name to %s.";
$lang['log_player_score_increased'] = "Score increased to %s.";
$lang['log_player_score_decreased'] = "Score decreased to %s.";
$lang['log_player_finished_turn'] = "Finished turn.";
$lang['log_eliminated'] = "Eliminated";
$lang['log_switched_to_ai'] = "Switched to AI.";
$lang['log_logged_out'] = "Logged out.";
$lang['log_logged_in'] = "Logged in.";
$lang['log_claimed_by_human'] = "Claimed by human.";
$lang['log_new_game'] = "New game was loaded. It is now %s.";
$lang['log_new_turn'] = "A new turn has begun. It is now %s.";
$lang['log_old_turn'] = "An earlier turn was loaded. It is now %s.";


?> 
