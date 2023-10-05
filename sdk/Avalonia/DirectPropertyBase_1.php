<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DirectPropertyBase_1MethodsOverride
{
	/**
	 * @return \Avalonia\DirectPropertyMetadata_1
	 */
	#[MethodOverride] public  function GetMetadata_1($type){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride] public  function GetMetadata_2(){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride] public  function GetMetadata_3($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OverrideMetadata_1($metadata){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OverrideMetadata_2($type, $metadata){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OverrideMetadata_3($type, $metadata){}
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
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class DirectPropertyBase_1 extends \Avalonia\AvaloniaProperty_1 implements 
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs_1[TValue]]
	 * @property
	 */
	public readonly $Changed;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $OwnerType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Inherits;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsAttached;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDirect;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsReadOnly;
	/**
	 * @return \System\Type
	 */
	public  function get_Owner(){}
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @return \Avalonia\TValue
	 */
	protected  function InvokeGetter($instance){}
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \Avalonia\Data\BindingValue_1 $value
	 * @return \System\Void|void
	 */
	protected  function InvokeSetter($instance, $value){}
	/**
	 * @param \System\Type $type
	 * @return \Avalonia\TValue
	 */
	public  function GetUnsetValue($type){}
	/**
	 * @uses DirectPropertyBase_1MethodsOverride::GetMetadata_1 ($type)
	 * @uses DirectPropertyBase_1MethodsOverride::GetMetadata_2 ()
	 * @uses DirectPropertyBase_1MethodsOverride::GetMetadata_3 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMetadata(mixed ...$args){}
	/**
	 * @uses DirectPropertyBase_1MethodsOverride::OverrideMetadata_1 ($metadata)
	 * @uses DirectPropertyBase_1MethodsOverride::OverrideMetadata_2 ($type, $metadata)
	 * @uses DirectPropertyBase_1MethodsOverride::OverrideMetadata_3 ($type, $metadata)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OverrideMetadata(mixed ...$args){}
	/**
	 * @uses DirectPropertyBase_1MethodsOverride::get_Changed_1 ()
	 * @uses DirectPropertyBase_1MethodsOverride::get_Changed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Changed(mixed ...$args){}
	/**
	 * @uses DirectPropertyBase_1MethodsOverride::Equals_1 ($obj)
	 * @uses DirectPropertyBase_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
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
