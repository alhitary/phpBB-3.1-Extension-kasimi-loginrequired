<?php

/**
 *
 * @package phpBB Extension - Login Required
 * @copyright (c) 2015 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\loginrequired\migrations;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
    exit;
}

class v1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\kasimi\loginrequired\migrations\v1_0_0');
	}

	public function effectively_installed()
	{
		return isset($this->config['loginrequired_version']) && version_compare($this->config['loginrequired_version'], '1.0.1', '>=');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('kasimi.loginrequired.version', '1.0.1')),
		);
	}
}
