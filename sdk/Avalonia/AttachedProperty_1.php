<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AttachedProperty_1MethodsOverride
{
	/**
	 * @return \Avalonia\AttachedProperty_1
	 */
	#[MethodOverride] public  function AddOwner_1($metadata){}
	/**
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride] public  function AddOwner_2($metadata){}
	/**
	 * @return \Avalonia\TValue
	 */
	#[MethodOverride] public  function GetDefaultValue_1($type){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetDefaultValue_2($type){}
	/**
	 * @return \Avalonia\StyledPropertyMetadata_1
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
	#[MethodOverride] public  function OverrideDefaultValue_1($defaultValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OverrideDefaultValue_2($type, $defaultValue){}
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
class AttachedProperty_1 extends \Avalonia\StyledProperty_1 implements 
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo,
	\Avalonia\IStyledPropertyAccessor
{
	/**
	 * @var \System\Func_2[TValue,System\Boolean]
	 * @property
	 */
	public readonly $ValidateValue;
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
	 * @uses AttachedProperty_1MethodsOverride::AddOwner_1 ($metadata)
	 * @uses AttachedProperty_1MethodsOverride::AddOwner_2 ($metadata)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddOwner(mixed ...$args){}
	/**
	 * @uses AttachedProperty_1MethodsOverride::GetDefaultValue_1 ($type)
	 * @uses AttachedProperty_1MethodsOverride::GetDefaultValue_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDefaultValue(mixed ...$args){}
	/**
	 * @uses AttachedProperty_1MethodsOverride::GetMetadata_1 ($type)
	 * @uses AttachedProperty_1MethodsOverride::GetMetadata_2 ()
	 * @uses AttachedProperty_1MethodsOverride::GetMetadata_3 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMetadata(mixed ...$args){}
	/**
	 * @uses AttachedProperty_1MethodsOverride::OverrideDefaultValue_1 ($defaultValue)
	 * @uses AttachedProperty_1MethodsOverride::OverrideDefaultValue_2 ($type, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OverrideDefaultValue(mixed ...$args){}
	/**
	 * @uses AttachedProperty_1MethodsOverride::OverrideMetadata_1 ($metadata)
	 * @uses AttachedProperty_1MethodsOverride::OverrideMetadata_2 ($type, $metadata)
	 * @uses AttachedProperty_1MethodsOverride::OverrideMetadata_3 ($type, $metadata)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OverrideMetadata(mixed ...$args){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateValue($value){}
	/**
	 * @uses AttachedProperty_1MethodsOverride::get_Changed_1 ()
	 * @uses AttachedProperty_1MethodsOverride::get_Changed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Changed(mixed ...$args){}
	/**
	 * @uses AttachedProperty_1MethodsOverride::Equals_1 ($obj)
	 * @uses AttachedProperty_1MethodsOverride::Equals_2 ($other)
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
