<?php
namespace System\Threading;
interface IAsyncLocal
{

	/**
	 * @param \System\Object|object $previousValue
	 * @param \System\Object|object $currentValue
	 * @param \System\Boolean|bool $contextChanged
	 * @return \System\Void|void
	 */
	public function OnValueChanged($previousValue, $currentValue, $contextChanged);
}