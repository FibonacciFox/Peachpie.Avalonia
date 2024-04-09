<?php
namespace Avalonia\Styling;
class PropertySetterBindingInstance extends \Avalonia\PropertyStore\UntypedBindingEntry implements
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IDisposable,
	\Avalonia\Styling\ISetterInstance
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 * @since readonly
	 */
	public $Property;
	private function PropertyChanged($sender, $e){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\Styling\StyleInstance $instance
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingMode $mode
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 */
	public function __construct($target, $instance, $property, $mode, $source){}
}