<?php
namespace Avalonia\Styling\Activators;
interface IStyleActivator
{

	/**
	 * @return \System\Boolean|bool
	 */
	public function GetIsActive();
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 * @return \System\Void|void
	 */
	public function Subscribe($sink);
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 * @return \System\Void|void
	 */
	public function Unsubscribe($sink);
}