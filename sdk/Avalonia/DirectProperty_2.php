<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DirectProperty_2MethodsOverride
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
class DirectProperty_2 extends \Avalonia\DirectPropertyBase_1 implements 
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo,
	\Avalonia\IDirectPropertyAccessor
{
	/**
	 * @var \System\Func_2[TOwner,TValue]
	 * @property
	 */
	public readonly $Getter;
	/**
	 * @var \System\Action_2[TOwner,TValue]
	 * @property
	 */
	public readonly $Setter;
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
	 * @return \System\Func_2
	 */
	public  function get_Getter(){}
	/**
	 * @return \System\Action_2
	 */
	public  function get_Setter(){}
	/**
	 * @param \System\Func_2 $getter
	 * @param \System\Action_2 $setter
	 * @param \Avalonia\TValue $unsetValue
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\DirectProperty_2
	 */
	public  function AddOwner($getter, $setter, $unsetValue, $defaultBindingMode, $enableDataValidation){}
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValue($instance){}
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetValue($instance, $value){}
	/**
	 * @uses DirectProperty_2MethodsOverride::GetMetadata_1 ($type)
	 * @uses DirectProperty_2MethodsOverride::GetMetadata_2 ()
	 * @uses DirectProperty_2MethodsOverride::GetMetadata_3 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMetadata(mixed ...$args){}
	/**
	 * @uses DirectProperty_2MethodsOverride::OverrideMetadata_1 ($metadata)
	 * @uses DirectProperty_2MethodsOverride::OverrideMetadata_2 ($type, $metadata)
	 * @uses DirectProperty_2MethodsOverride::OverrideMetadata_3 ($type, $metadata)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OverrideMetadata(mixed ...$args){}
	/**
	 * @uses DirectProperty_2MethodsOverride::get_Changed_1 ()
	 * @uses DirectProperty_2MethodsOverride::get_Changed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Changed(mixed ...$args){}
	/**
	 * @uses DirectProperty_2MethodsOverride::Equals_1 ($obj)
	 * @uses DirectProperty_2MethodsOverride::Equals_2 ($other)
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
