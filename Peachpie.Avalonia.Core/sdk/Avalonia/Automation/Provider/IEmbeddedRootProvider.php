<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface IEmbeddedRootProvider
{
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
