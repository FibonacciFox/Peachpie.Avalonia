<?php
namespace Avalonia\Styling\Activators;
interface IStyleActivatorSink
{


	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function OnNext($value);
}