<?php
/**
* @package Portal - Search
* @version $Id$
* @copyright (c) 2009, 2010 Board3 Portal Team
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package Search
*/
class portal_search_module
{
	/**
	* Allowed columns: Just sum up your options (Exp: left + right = 10)
	* top		1
	* left		2
	* center	4
	* right		8
	* bottom	16
	*/
	var $columns = 10;

	/**
	* Default modulename
	*/
	var $name = 'PORTAL_SEARCH';

	/**
	* Default module-image:
	* file must be in "{T_THEME_PATH}/images/portal/"
	*/
	var $image_src = 'portal_search.png';

	/**
	* module-language file
	* file must be in "language/{$user->lang}/mods/portal/"
	*/
	var $language = 'portal_search_module';
	
	/**
	* custom acp template
	* file must be in "adm/style/portal/"
	*/
	var $custom_acp_tpl = '';

	function get_template_side($module_id)
	{
		global $template, $phpbb_root_path, $phpEx;

		$template->assign_var('S_SEARCH_ACTION', append_sid("{$phpbb_root_path}search.$phpEx"));

		return 'search_side.html';
	}

	function get_template_acp($module_id)
	{
		return array(
			'title'	=> 'PORTAL_SEARCH',
			'vars'	=> array(),
		);
	}

	/**
	* API functions
	*/
	function install($module_id)
	{
		return true;
	}

	function uninstall($module_id)
	{
		return true;
	}
}

?>