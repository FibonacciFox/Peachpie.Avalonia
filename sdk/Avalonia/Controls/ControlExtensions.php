<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ControlExtensionsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function BringIntoView_1($control){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function BringIntoView_2($control, $rect){}
}
/**
 */
class ControlExtensions extends \System\Object
{
	/**
	 * @uses ControlExtensionsMethodsOverride::BringIntoView_1 ($control)
	 * @uses ControlExtensionsMethodsOverride::BringIntoView_2 ($control, $rect)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BringIntoView(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\String|string $name
	 * @return \Avalonia\Controls\T
	 */
	public static function FindControl($control, $name){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\String|string $name
	 * @return \Avalonia\Controls\T
	 */
	public static function GetControl($control, $name){}
	/**
	 * @param \Avalonia\Controls\IPseudoClasses $classes
	 * @param \System\String|string $name
	 * @param \System\IObservable_1 $trigger
	 * @return \System\IDisposable
	 */
	public static function Set($classes, $name, $trigger){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
