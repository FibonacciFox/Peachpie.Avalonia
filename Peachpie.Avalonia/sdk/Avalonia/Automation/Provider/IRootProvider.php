<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface IRootProvider
{
	/**
	 */
	public function get_PlatformImpl();
	/**
	 */
	public function GetFocus();
	/**
	 * @param \Avalonia\Point $p
	 */
	public function GetPeerFromPoint($p);
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_FocusChanged($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_FocusChanged($value);
}
