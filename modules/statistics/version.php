<?php

/**
 * @Project NUKEVIET 3.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES.,JSC. All rights reserved
 * @createdate 05/07/2010 09:47
 */

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$module_version = array(
	"name" => "Statistics",
	"modfuncs" => "main,allreferers,allcountries,allbrowsers,allos,allbots,referer",
	"change_alias" => "allreferers,allcountries,allbrowsers,allos,allbots,referer",
	"submenu" => "main,allreferers,allcountries,allbrowsers,allos,allbots",
	"is_sysmod" => 0,
	"virtual" => 2,
	"version" => "3.0.01",
	"date" => "Wed, 20 Oct 2010 00:00:00 GMT",
	"author" => "VINADES (contact@vinades.vn)",
	"note" => ""
);

?>