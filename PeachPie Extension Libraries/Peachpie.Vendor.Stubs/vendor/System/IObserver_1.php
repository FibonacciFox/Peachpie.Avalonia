<?php
namespace System;
interface IObserver_1
{

	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function OnNext($value);
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error);
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted();
}