<?php

/*********************************************************************************
* LiveZilla config.php
*
* Copyright 2016 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
*
********************************************************************************/

$_CONFIG['gl_pr_cr'] = '1490313600';
$_CONFIG['gl_lzid'] = getenv('LIVEZILLA_SERVER_ID');
$_CONFIG['b64'] = false;

$_CONFIG[0]['gl_db_host'] = getenv('DB_HOST');
$_CONFIG[0]['gl_db_user'] = getenv('MYSQL_USER');
$_CONFIG[0]['gl_db_ext'] = 'mysqli';
$_CONFIG[0]['gl_db_eng'] = 'MyISAM';
$_CONFIG[0]['gl_db_pass'] = getenv('MYSQL_PASSWORD');
$_CONFIG[0]['gl_db_name'] = getenv('MYSQL_DATABASE');
$_CONFIG[0]['gl_db_prefix'] = 'lz_';

?>
