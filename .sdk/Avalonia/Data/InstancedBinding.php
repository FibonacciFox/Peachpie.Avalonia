<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InstancedBindingOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	#[MethodOverride]public static function OneTime_1 ($value, $priority){}
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $observable [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	#[MethodOverride]public static function OneTime_2 ($observable, $priority){}
}
class InstancedBinding extends \System\Object
{
	use InstancedBindingOverride;

	/**
	 * @property
	 * @var \Avalonia\Data\BindingMode
	 * @since readonly
	 */
	public $Mode;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 * @since readonly
	 */
	public $Priority;
	/**
	 * @property
	 * @var \System\IObservable_1[System\Object]
	 * @since readonly
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\IObservable_1[System\Object]
	 * @since readonly
	 */
	public $Observable;
	/**
	 * @uses InstancedBindingOverride::OneTime_1 <br>public , args: ($value, $priority)<br>
	 * @uses InstancedBindingOverride::OneTime_2 <br>public , args: ($observable, $priority)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\InstancedBinding|mixed|\override
	 */
	#[MethodOverridePublic]function OneTime (\override ...$args){}
	/**
	 * @param \System\IObservable_1 $observable [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public static function OneWay($observable, $priority){}
	/**
	 * @param \System\IObserver_1 $observer [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public static function OneWayToSource($observer, $priority){}
	/**
	 * @param \System\IObservable_1 $observable [generic: System\Object]
	 * @param \System\IObserver_1 $observer [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public static function TwoWay($observable, $observer, $priority){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public function WithPriority($priority){}
}