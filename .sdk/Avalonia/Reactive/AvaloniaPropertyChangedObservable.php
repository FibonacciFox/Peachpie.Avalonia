<?php
namespace Avalonia\Reactive;
class AvaloniaPropertyChangedObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements
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
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $property
	 */
	public function __construct($target, $property){}
}