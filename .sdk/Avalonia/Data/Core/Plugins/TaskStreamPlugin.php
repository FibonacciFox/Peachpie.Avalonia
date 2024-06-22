<?php
namespace Avalonia\Data\Core\Plugins;
class TaskStreamPlugin extends \System\Object implements
	\Avalonia\Data\Core\Plugins\IStreamPlugin
{


	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @return \System\Boolean|bool
	 */
	public function Match($reference){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @return \System\IObservable_1[System\Object]
	 */
	public function Start($reference){}
	private static function HandleCompleted($task){}
	/**
	 */
	public function __construct(){}
}