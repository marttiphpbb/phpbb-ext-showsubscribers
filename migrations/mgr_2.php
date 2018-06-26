<?php
/**
* phpBB Extension - marttiphpbb showtopicsubscribers
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showtopicsubscribers\migrations;

use phpbb\db\migration\migration;
use marttiphpbb\showtopicsubscribers\util\cnst;

class mgr_2 extends migration
{
	static public function depends_on()
	{
		return [
			'\marttiphpbb\showtopicsubscribers\migrations\mgr_1',
		];
	}

	public function update_data()
	{
		return [
			['config.add', [cnst::ID . '_threshold', $this->config[cnst::ID . '_treshold']]],
		];
	}
}
