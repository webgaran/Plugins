<?php

if( ! defined( 'WP_UNINSTALL_PLUGIN' ))
    exit;

delete_option( 'my_plugin_author_email' );