<?php
namespace Avalonia\PropertyStore;
final class SourceUntypedBindingEntry_1 extends \Avalonia\PropertyStore\BindingEntryBase_2 implements
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IDisposable
{

	/**
	 * @property duplicate
	 * @var \Avalonia\StyledProperty_1[TTarget]|\Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @param \Avalonia\StyledProperty_1 $property [generic: TTarget]
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 */
	public function __construct($target, $frame, $property, $source){}
}