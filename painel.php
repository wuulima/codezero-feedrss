<?php

/*
Plugin name: Code.Zero - Feed Rss
Plugin URI: https://codezero.dev.br
Description: Plugin para exibir feed de Notiícias.
Version: 1.0
Autor: Walas - < Code.Zero />
Autor URI: https://github.com/wuulima
Text Domain: painel
License: GPL2
*/

remove_action('welcome_panel, wp_welcome_panel');

add_action('welcome_panel', 'my_feed');

function my_feed(){
    ?>
        <div class="welcome-panel-content">
            <h2>Notícias</h2>
        </div>
    <?php
}
