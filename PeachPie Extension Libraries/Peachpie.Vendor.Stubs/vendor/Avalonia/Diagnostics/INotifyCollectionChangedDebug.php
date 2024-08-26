<?php
namespace Avalonia\Diagnostics;
interface INotifyCollectionChangedDebug
{

	/**
	 * @return \System\Delegate[]
	 */
	public function GetCollectionChangedSubscribers();
}