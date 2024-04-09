<?php
namespace Avalonia\Controls;
class ResourceObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	private function ResourcesChanged($sender, $e){}
	private function ActualThemeVariantChanged($sender, $e){}
	private function GetValue(){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $target
	 * @param \System\Object|object $key
	 * @param \System\Func_2 $converter [generic: System\Object,System\Object]
	 */
	public function __construct($target, $key, $converter){}
}