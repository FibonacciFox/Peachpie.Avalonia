<?php
namespace Avalonia\LogicalTree;
class ControlTracker extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	private function Attached($sender, $e){}
	private function Detached($sender, $e){}
	private function Update(){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $relativeTo
	 * @param \System\Int32|int $ancestorLevel
	 * @param \System\Type $ancestorType
	 */
	public function __construct($relativeTo, $ancestorLevel, $ancestorType){}
}