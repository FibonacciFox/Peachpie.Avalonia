<?php
namespace Avalonia\Diagnostics;
interface IAvaloniaObjectDebug
{

	/**
	 * @return \System\Delegate[]
	 */
	public function GetPropertyChangedSubscribers();
}