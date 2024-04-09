<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypedBindingEntry_1Override {
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 */
	#[MethodOverride]public function __construct_1 ($target, $frame, $property, $source){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 */
	#[MethodOverride]public function __construct_2 ($target, $frame, $property, $source){}
}
final class TypedBindingEntry_1 extends \Avalonia\PropertyStore\BindingEntryBase_2 implements
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IDisposable
{
	use TypedBindingEntry_1Override;
	/**
	 * @property dublicate
	 * @var \Avalonia\StyledProperty_1[T]|\Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @uses TypedBindingEntry_1Override::__construct_1 <br>public , args: ($target, $frame, $property, $source)<br>
	 * @uses TypedBindingEntry_1Override::__construct_2 <br>public , args: ($target, $frame, $property, $source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}