<?php
namespace Avalonia\VisualTree;
class VisualTracker extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	private function AttachedDetached($sender, $e){}
	private function GetResult(){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @param \System\Int32|int $ancestorLevel
	 * @param \System\Type $ancestorType
	 */
	public function __construct($relativeTo, $ancestorLevel, $ancestorType){}
}