<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IObserver_1
{
	/**
	 * @param \System\T $value
	 */
	public function OnNext($value);
	/**
	 * @param \System\Exception $error
	 */
	public function OnError($error);
	/**
	 */
	public function OnCompleted();
}
