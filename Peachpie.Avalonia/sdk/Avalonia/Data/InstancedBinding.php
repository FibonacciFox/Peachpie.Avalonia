<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InstancedBindingMethodsOverride
{
	/**
	 * @return \Avalonia\Data\InstancedBinding
	 */
	#[MethodOverride] public static function OneTime_1($value, $priority){}
	/**
	 * @return \Avalonia\Data\InstancedBinding
	 */
	#[MethodOverride] public static function OneTime_2($observable, $priority){}
}
/**
 */
class InstancedBinding extends \System\Object
{
	/**
	 * @return \Avalonia\Data\BindingMode
	 */
	public  function get_Mode(){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_Source(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_Observable(){}
	/**
	 * @uses InstancedBindingMethodsOverride::OneTime_1 ($value, $priority)
	 * @uses InstancedBindingMethodsOverride::OneTime_2 ($observable, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OneTime(mixed ...$args){}
	/**
	 * @param \System\IObservable_1 $observable
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public static function OneWay($observable, $priority){}
	/**
	 * @param \System\IObserver_1 $observer
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public static function OneWayToSource($observer, $priority){}
	/**
	 * @param \System\IObservable_1 $observable
	 * @param \System\IObserver_1 $observer
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public static function TwoWay($observable, $observer, $priority){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function WithPriority($priority){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
