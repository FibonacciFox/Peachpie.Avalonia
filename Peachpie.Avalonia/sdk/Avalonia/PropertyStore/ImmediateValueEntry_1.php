<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmediateValueEntry_1MethodsOverride
{
	/**
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] private  function get_Property_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetValue_1(){}
	/**
	 * @return \Avalonia\PropertyStore\T
	 */
	#[MethodOverride] private  function GetValue_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ImmediateValueEntry_1 extends \System\Object implements 
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IDisposable
{
	/**
	 * @uses ImmediateValueEntry_1MethodsOverride::get_Property_1 ()
	 * @uses ImmediateValueEntry_1MethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unsubscribe(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses ImmediateValueEntry_1MethodsOverride::GetValue_1 ()
	 * @uses ImmediateValueEntry_1MethodsOverride::GetValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @param \Avalonia\Data\BindingValueType& $state
	 * @param \System\Exception& $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataValidationState($state, $error){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
