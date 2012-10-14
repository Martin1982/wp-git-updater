<?php
/*
Plugin Name: Git Updater
Plugin URI: http://www.dreamworxmedia.com
Description: Provides plugin updates hosted on a git enviroment by their tags
Version: 1.0
Author: Martin de Keijzer
Author URI: http://www.martindekeijzer.nl
License: GPL3
*/

add_action( 'admin_menu', 'git_updater_menu');

function git_updater_menu() {
    add_menu_page('Git Updater', 'Git Updater', 'update_plugins', 'gitupdater', 'updateradmin', '', 66);
}

function updateradmin() {
    echo "<div class=\"wrap\">";
    echo "<h2>Git Updater</h2>";

    echo "<form method=\"post\" action=\"options.php\">";

    echo "Ohh hai!";
    submit_button();
    echo "</form>";

    echo "</div>";
}
