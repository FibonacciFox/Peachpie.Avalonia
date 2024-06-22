<?php
namespace Avalonia\PropertyStore;
class UntypedBindingEntry extends \Avalonia\PropertyStore\BindingEntryBase_2 implements
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IDisposable
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
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 */
	public function __construct($target, $frame, $property, $source){}
}