<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BindingEntryBase_2MethodsOverride
{
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] private  function get_Property_2(){}
	/**
	 * @return \Avalonia\PropertyStore\TValue
	 */
	#[MethodOverride] public  function GetValue_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetValue_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Start_2($produceValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_2($value){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] protected  function ConvertAndValidate_1($value){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] protected  function ConvertAndValidate_2($value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class BindingEntryBase_2 extends \System\Object implements 
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IObserver_1,
	\System\IDisposable
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSubscribed(){}
	/**
	 * @uses BindingEntryBase_2MethodsOverride::get_Property_1 ()
	 * @uses BindingEntryBase_2MethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @return \Avalonia\PropertyStore\ValueFrame
	 */
	protected  function get_Frame(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_Source(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses BindingEntryBase_2MethodsOverride::GetValue_1 ()
	 * @uses BindingEntryBase_2MethodsOverride::GetValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @param \Avalonia\Data\BindingValueType& $state
	 * @param \System\Exception& $error
	 * @return \System\Boolean
	 */
	public  function GetDataValidationState($state, $error){}
	/**
	 * @uses BindingEntryBase_2MethodsOverride::Start_1 ()
	 * @uses BindingEntryBase_2MethodsOverride::Start_2 ($produceValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @uses BindingEntryBase_2MethodsOverride::OnNext_1 ($value)
	 * @uses BindingEntryBase_2MethodsOverride::OnNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unsubscribe(){}
	/**
	 * @uses BindingEntryBase_2MethodsOverride::ConvertAndValidate_1 ($value)
	 * @uses BindingEntryBase_2MethodsOverride::ConvertAndValidate_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertAndValidate(mixed ...$args){}
	/**
	 * @param \System\Type $ownerType
	 * @return \Avalonia\PropertyStore\TValue
	 */
	protected  function GetDefaultValue($ownerType){}
	/**
	 * @param \Avalonia\Data\BindingValue_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetValue($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BindingCompleted(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCachedDefaultValue(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
