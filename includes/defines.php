<?php require_once('config.php');
define('RDBHOST0', $_config['mssql']['ip']);
define('RDBUSER0', $_config['mssql']['id']);
define('RDBPASS0', $_config['mssql']['pw']);
define('RDBNAME0', $_config['mssql']['db']);
define("PORTALDB", $_config['mssql']['portal_db']);
define('SSL', $_config['site_info']['ssl'] ?? false);
define('EXT', $_config['site_info']['extension'] ?? ".asp");
define('WEBSITE', $_config['site_info']['domain']);
define('ROOTDIR', $_config['site_info']['rootdir']);
define('HTTP_DOMAIN', (SSL==true?"https":"http")."://".WEBSITE);
define('PAGE_ITEMMALL',	HTTP_DOMAIN.ROOTDIR.$_config['pages'][0].EXT);
define('PAGE_GATEWAY', HTTP_DOMAIN.ROOTDIR.$_config['pages'][1].EXT);
define('PAGE_ERROR', HTTP_DOMAIN.ROOTDIR.$_config['pages'][2].EXT);
define('SITE_NAME', $_config['site_info']['title']);
define('SITE_DESC', $_config['site_info']['description']);
define('SITE_KWRD', $_config['site_info']['keyword']);
define('SITE_PASS', $_config['site_info']['secret']);
define('VERIFYKEY', $_config['site_info']['vkey']);
define('SERVERNAME', $_config['site_info']['servername']);
define('CHARGEURL', $_config['site_info']['chargeurl']);
define("VIPTIER", $_config['vipinfo']['level']);
define("VIPLVLACCESS", $_config['vipinfo']['level_access']);
define("MESSAGE", $_config['message']);
define("CDN", $_config['site_info']['cdn'] ?? "/");
define("GIFTING", $_config['site_info']['gifting'] ?? false);