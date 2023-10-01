<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaProperty_1MethodsOverride
{
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public  function get_Changed_1(){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public  function get_Changed_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride] public  function GetMetadata_1(){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride] public  function GetMetadata_2($type){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AvaloniaProperty_1 extends \Avalonia\AvaloniaProperty implements 
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo
{
	/**
	 * @uses AvaloniaProperty_1MethodsOverride::get_Changed_1 ()
	 * @uses AvaloniaProperty_1MethodsOverride::get_Changed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Changed(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs_1 $e
	 * @return \System\Void|void
	 */
	protected  function NotifyChanged($e){}
	/**
	 * @param \System\Object|object $value
	 * @return \Avalonia\Data\BindingValue_1
	 */
	protected  function TryConvert($value){}
	/**
	 * @uses AvaloniaProperty_1MethodsOverride::Equals_1 ($obj)
	 * @uses AvaloniaProperty_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses AvaloniaProperty_1MethodsOverride::GetMetadata_1 ()
	 * @uses AvaloniaProperty_1MethodsOverride::GetMetadata_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMetadata(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CanGet(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CanSet(){}
	/**
	 * @param \System\Object|object $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Get($target){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Set($target, $value){}
}
