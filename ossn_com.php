<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('__SIGNUP_FIELDS__', ossn_route()->com . 'signupfields/');
/**
 * Initialize the component
 *
 * @return void
 */
function signup_fields_init(){
	ossn_add_hook('user', 'signup:fields', 'signup_fields');
	
	ossn_unregister_action('user/register');
	ossn_register_action('user/register', __SIGNUP_FIELDS__ . 'actions/register.php');
}
/**
 * Signup fields
 *
 * @params string $hook Name of hook is user
 * @params string $type Type of hook is signup fields
 * @params array  $fields A list of signup fields
 *
 * @return array
 */
function signup_fields($hook, $type, $fields){
	$fields['text'][] = 'mobile';
	return $fields;
}
ossn_register_callback('ossn', 'init', 'signup_fields_init');
