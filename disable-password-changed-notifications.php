<?php
/*
 * Plugin Name: Disable Password Changed Notifications
 * Plugin URI: https://pippinsplugins.com
 * Description: Disables the notification sent to site admins when a user changes their password
 * Author: Pippin Williamson
 * Author URI: https://pippinsplugins.com
 * Version: 1.0
 *
 */

remove_action( 'after_password_reset', 'wp_password_change_notification' );