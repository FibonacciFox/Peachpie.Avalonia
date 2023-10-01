<?php
namespace Avalonia\Styling\Activators;
/**
 */
interface IStyleActivator
{
	/**
	 */
	public function get_IsSubscribed();
	/**
	 */
	public function GetIsActive();
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 */
	public function Subscribe($sink);
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 */
	public function Unsubscribe($sink);
}
