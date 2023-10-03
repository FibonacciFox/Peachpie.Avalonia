<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypedBindingEntry_1MethodsOverride
{
	/**
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_2(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] private  function get_Property_3(){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] protected  function ConvertAndValidate_1($value){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] protected  function ConvertAndValidate_2($value){}
	/**
	 * @return \Avalonia\PropertyStore\T
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
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TypedBindingEntry_1 extends \Avalonia\PropertyStore\BindingEntryBase_2 implements 
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IObserver_1,
	\System\IDisposable
{
	/**
	 * @uses TypedBindingEntry_1MethodsOverride::get_Property_1 ()
	 * @uses TypedBindingEntry_1MethodsOverride::get_Property_2 ()
	 * @uses TypedBindingEntry_1MethodsOverride::get_Property_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @uses TypedBindingEntry_1MethodsOverride::ConvertAndValidate_1 ($value)
	 * @uses TypedBindingEntry_1MethodsOverride::ConvertAndValidate_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertAndValidate(mixed ...$args){}
	/**
	 * @uses TypedBindingEntry_1MethodsOverride::GetValue_1 ()
	 * @uses TypedBindingEntry_1MethodsOverride::GetValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TypedBindingEntry_1MethodsOverride::Start_1 ()
	 * @uses TypedBindingEntry_1MethodsOverride::Start_2 ($produceValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses TypedBindingEntry_1MethodsOverride::OnNext_1 ($value)
	 * @uses TypedBindingEntry_1MethodsOverride::OnNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
}
