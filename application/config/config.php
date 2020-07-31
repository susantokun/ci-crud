<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : support@susantokun.com
 * | Filename        : config.php
 * | Instagram       : @susantokun
 * | Website         : http://www.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Tuesday, 12th March 2019 5:00:21 pm
 * | Last Modified   : Tuesday, 12th March 2019 5:04:28 pm
 * |==============================================================|
 */

$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http');
$config['base_url'] .= '://'.$_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

$config['index_page'] = '';

$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';

$config['language'] = '';

$config['charset'] = 'UTF-8';
$config['enable_hooks'] = false;
$config['subclass_prefix'] = 'MY_';

$config['composer_autoload'] = FALSE;;

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = false;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = true;
$config['log_threshold'] = 1;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = false;
$config['encryption_key'] = 'jYgJkiHJBgyJdtrdJfdOPwQsdERtGc';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = null;
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;

$config['cookie_prefix'] = '';
$config['cookie_domain'] = '';
$config['cookie_path'] = '/';
$config['cookie_secure'] = false;
$config['cookie_httponly'] = false;

$config['standardize_newlines'] = false;
$config['global_xss_filtering'] = false;

$config['csrf_protection'] = false;
$config['csrf_token_name'] = 'token';
$config['csrf_cookie_name'] = 'cookie';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = false;
$config['csrf_exclude_uris'] = array();

$config['compress_output'] = false;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = false;
$config['proxy_ips'] = '';
