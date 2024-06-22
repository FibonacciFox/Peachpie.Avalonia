<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PropertySetterInstance_1Override {
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 */
	#[MethodOverride]public function __construct_1 ($target, $property, $value){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \T|object $value
	 */
	#[MethodOverride]public function __construct_2 ($target, $property, $value){}
}
class PropertySetterInstance_1 extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements
	\System\IObservable_1,
	\System\IDisposable,
	\Avalonia\Styling\ISetterInstance
{
	use PropertySetterInstance_1Override;


	/**
	 * @param \System\Boolean|bool $hasActivator
	 * @return \System\Void|void
	 */
	public function Start($hasActivator){}
	/**
	 * @return \System\Void|void
	 */
	public function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public function Deactivate(){}
	/**
	 * @uses PropertySetterInstance_1Override::__construct_1 <br>public , args: ($target, $property, $value)<br>
	 * @uses PropertySetterInstance_1Override::__construct_2 <br>public , args: ($target, $property, $value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}