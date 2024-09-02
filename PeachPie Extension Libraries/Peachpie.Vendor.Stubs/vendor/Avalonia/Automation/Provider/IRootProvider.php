<?php
namespace Avalonia\Automation\Provider;
/**
 * @method \System\Void|void add_FocusChanged($value) [modifier: public]
 * @method \System\Void|void remove_FocusChanged($value) [modifier: public]
*/
interface IRootProvider
{

	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetFocus();
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public function GetPeerFromPoint($p);
}