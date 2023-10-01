<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaObjectExtensionsMethodsOverride
{
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetObservable_1($o, $property){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetObservable_2($o, $property){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetObservable_3($o, $property, $converter){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetObservable_4($o, $property, $converter){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetBindingObservable_1($o, $property){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetBindingObservable_2($o, $property, $converter){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetBindingObservable_3($o, $property){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetBindingObservable_4($o, $property, $converter){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function Bind_1($target, $property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function Bind_2($target, $property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function Bind_3($target, $property, $binding, $anchor){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function GetBaseValue_1($target, $property){}
	/**
	 * @return \Avalonia\Data\Optional_1
	 */
	#[MethodOverride] public static function GetBaseValue_2($target, $property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function AddClassHandler_1($observable, $action){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function AddClassHandler_2($observable, $action){}
}
/**
 */
class AvaloniaObjectExtensions extends \System\Object
{
	/**
	 * @param \System\IObservable_1 $source
	 * @return \Avalonia\Data\IBinding
	 */
	public static function ToBinding($source){}
	/**
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetObservable_1 ($o, $property)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetObservable_2 ($o, $property)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetObservable_3 ($o, $property, $converter)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetObservable_4 ($o, $property, $converter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetObservable(mixed ...$args){}
	/**
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetBindingObservable_1 ($o, $property)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetBindingObservable_2 ($o, $property, $converter)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetBindingObservable_3 ($o, $property)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetBindingObservable_4 ($o, $property, $converter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBindingObservable(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\IObservable_1
	 */
	public static function GetPropertyChangedObservable($o, $property){}
	/**
	 * @uses AvaloniaObjectExtensionsMethodsOverride::Bind_1 ($target, $property, $source, $priority)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::Bind_2 ($target, $property, $source, $priority)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::Bind_3 ($target, $property, $binding, $anchor)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Bind(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty_1 $property
	 * @return \Avalonia\T
	 */
	public static function GetValue($target, $property){}
	/**
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetBaseValue_1 ($target, $property)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::GetBaseValue_2 ($target, $property)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBaseValue(mixed ...$args){}
	/**
	 * @uses AvaloniaObjectExtensionsMethodsOverride::AddClassHandler_1 ($observable, $action)
	 * @uses AvaloniaObjectExtensionsMethodsOverride::AddClassHandler_2 ($observable, $action)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AddClassHandler(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
