<?php
namespace System\Threading;
/**
 */
interface IAsyncLocal
{
	/**
	 * @param \System\Object|object $previousValue
	 * @param \System\Object|object $currentValue
	 * @param \System\Boolean $contextChanged
	 */
	public function OnValueChanged($previousValue, $currentValue, $contextChanged);
}
