<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaPropertyRegistryMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function GetRegistered_1($type){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function GetRegistered_2($o){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function GetRegisteredDirect_1($type){}
	/**
	 * @return \Avalonia\DirectPropertyBase_1
	 */
	#[MethodOverride] public  function GetRegisteredDirect_2($o, $property){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function FindRegistered_1($type, $name){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function FindRegistered_2($o, $name){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] protected  function FindRegistered_3($id){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsRegistered_1($type, $property){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsRegistered_2($o, $property){}
}
/**
 */
class AvaloniaPropertyRegistry extends \System\Object
{
	/**
	 * @return \Avalonia\AvaloniaPropertyRegistry
	 */
	public static function get_Instance(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyCollection_1
	 */
	protected  function get_Properties(){}
	/**
	 * @uses AvaloniaPropertyRegistryMethodsOverride::GetRegistered_1 ($type)
	 * @uses AvaloniaPropertyRegistryMethodsOverride::GetRegistered_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRegistered(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetRegisteredAttached($type){}
	/**
	 * @uses AvaloniaPropertyRegistryMethodsOverride::GetRegisteredDirect_1 ($type)
	 * @uses AvaloniaPropertyRegistryMethodsOverride::GetRegisteredDirect_2 ($o, $property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRegisteredDirect(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetRegisteredInherited($type){}
	/**
	 * @uses AvaloniaPropertyRegistryMethodsOverride::FindRegistered_1 ($type, $name)
	 * @uses AvaloniaPropertyRegistryMethodsOverride::FindRegistered_2 ($o, $name)
	 * @uses AvaloniaPropertyRegistryMethodsOverride::FindRegistered_3 ($id)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindRegistered(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\DirectPropertyBase_1 $property
	 * @return \Avalonia\DirectPropertyBase_1
	 */
	public  function FindRegisteredDirect($o, $property){}
	/**
	 * @uses AvaloniaPropertyRegistryMethodsOverride::IsRegistered_1 ($type, $property)
	 * @uses AvaloniaPropertyRegistryMethodsOverride::IsRegistered_2 ($o, $property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsRegistered(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function Register($type, $property){}
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function RegisterAttached($type, $property){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
