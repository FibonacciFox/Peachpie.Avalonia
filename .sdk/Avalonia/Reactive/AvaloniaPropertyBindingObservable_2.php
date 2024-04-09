<?php
namespace Avalonia\Reactive;
class AvaloniaPropertyBindingObservable_2 extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1,
	\Avalonia\IDescription
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	private function PropertyChanged($sender, $e){}
	private function PropertyChanged_WithConversion($sender, $e){}
	private function PublishValue($newValue){}
	private function PublishUntypedValue($newValue){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Func_2 $converter [generic: TSource,TResult]
	 */
	public function __construct($target, $property, $converter){}
}