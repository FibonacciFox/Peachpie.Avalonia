<?php
namespace Avalonia\Remote\Protocol;
/**
 */
interface IAvaloniaRemoteTransportConnection
{
	/**
	 * @param \System\Object|object $data
	 */
	public function Send($data);
	/**
	 * @param \System\Action_2 $value
	 */
	public function add_OnMessage($value);
	/**
	 * @param \System\Action_2 $value
	 */
	public function remove_OnMessage($value);
	/**
	 * @param \System\Action_2 $value
	 */
	public function add_OnException($value);
	/**
	 * @param \System\Action_2 $value
	 */
	public function remove_OnException($value);
	/**
	 */
	public function Start();
}
