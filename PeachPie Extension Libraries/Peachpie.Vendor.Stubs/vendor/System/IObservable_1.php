<?php
namespace System;
interface IObservable_1
{

	/**
	 * @param \System\IObserver_1 $observer [generic: T]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer);
}