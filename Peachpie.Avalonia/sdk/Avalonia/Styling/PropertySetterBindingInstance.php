<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PropertySetterBindingInstanceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Start_1($produceValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_2(){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] protected  function ConvertAndValidate_1($value){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] protected  function ConvertAndValidate_2($value){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] private  function get_Property_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetValue_2(){}
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
 */
class PropertySetterBindingInstance extends \Avalonia\PropertyStore\UntypedBindingEntry implements 
	\Avalonia\PropertyStore\IValueEntry_1,
	\Avalonia\PropertyStore\IValueEntry,
	\System\IObserver_1,
	\System\IObserver_1,
	\System\IDisposable,
	\Avalonia\Styling\ISetterInstance
{
	/**
	 * @uses PropertySetterBindingInstanceMethodsOverride::Start_1 ($produceValue)
	 * @uses PropertySetterBindingInstanceMethodsOverride::Start_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PropertyChanged($sender, $e){}
	/**
	 * @uses PropertySetterBindingInstanceMethodsOverride::ConvertAndValidate_1 ($value)
	 * @uses PropertySetterBindingInstanceMethodsOverride::ConvertAndValidate_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertAndValidate(mixed ...$args){}
	/**
	 * @uses PropertySetterBindingInstanceMethodsOverride::get_Property_1 ()
	 * @uses PropertySetterBindingInstanceMethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @uses PropertySetterBindingInstanceMethodsOverride::GetValue_1 ()
	 * @uses PropertySetterBindingInstanceMethodsOverride::GetValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PropertySetterBindingInstanceMethodsOverride::OnNext_1 ($value)
	 * @uses PropertySetterBindingInstanceMethodsOverride::OnNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
}
