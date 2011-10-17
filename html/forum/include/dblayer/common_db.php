<?php
/**
 * Loads the proper database layer class.
 *
 * @copyright (C) 2008-2009 PunBB, partially based on code (C) 2008-2009 FluxBB.org
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package PunBB
 */


// Make sure no one attempts to run this script "directly"
if (!defined('FORUM'))
	exit;


//
// Return current timestamp (with microseconds) as a float (used in dblayer)
//
if (defined('FORUM_SHOW_QUERIES'))
{
	function get_microtime()
	{
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
}


// Load the appropriate DB layer class
switch ($db_type)
{
	case 'mysql':
		require FORUM_ROOT.'include/dblayer/mysql.php';
		break;

	case 'mysqli':
		require FORUM_ROOT.'include/dblayer/mysqli.php';
		break;

	case 'pgsql':
		require FORUM_ROOT.'include/dblayer/pgsql.php';
		break;

	case 'sqlite':
		require FORUM_ROOT.'include/dblayer/sqlite.php';
		break;

	default:
		error('\''.$db_type.'\' is not a valid database type. Please check settings in config.php.', __FILE__, __LINE__);
		break;
}


// Create the database adapter object (and open/connect to/select db)
$forum_db = new DBLayer($db_host, $db_username, $db_password, $db_name, $db_prefix, $p_connect);
