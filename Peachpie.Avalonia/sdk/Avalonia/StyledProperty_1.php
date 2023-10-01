<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StyledProperty_1MethodsOverride
{
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
class StyledProperty_1 extends \Avalonia\AvaloniaProperty_1 implements 
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo,
	\Avalonia\IStyledPropertyAccessor
{
	/**
	 * @return \System\Func_2
	 */
	public  function get_ValidateValue(){}
	/**
	 * @param \Avalonia\StyledPropertyMetadata_1 $metadata
	 * @return \Avalonia\StyledProperty_1
	 */
	public  function AddOwner($metadata){}
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \Avalonia\TValue $baseValue
	 * @return \Avalonia\TValue
	 */
	public  function CoerceValue($instance, $baseValue){}
	/**
	 * @uses StyledProperty_1MethodsOverride::GetDefaultValue_1 ($type)
	 * @uses StyledProperty_1MethodsOverride::GetDefaultValue_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDefaultValue(mixed ...$args){}
	/**
	 * @uses StyledProperty_1MethodsOverride::GetMetadata_1 ($type)
	 * @uses StyledProperty_1MethodsOverride::GetMetadata_2 ()
	 * @uses StyledProperty_1MethodsOverride::GetMetadata_3 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMetadata(mixed ...$args){}
	/**
	 * @uses StyledProperty_1MethodsOverride::OverrideDefaultValue_1 ($defaultValue)
	 * @uses StyledProperty_1MethodsOverride::OverrideDefaultValue_2 ($type, $defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OverrideDefaultValue(mixed ...$args){}
	/**
	 * @uses StyledProperty_1MethodsOverride::OverrideMetadata_1 ($metadata)
	 * @uses StyledProperty_1MethodsOverride::OverrideMetadata_2 ($type, $metadata)
	 * @uses StyledProperty_1MethodsOverride::OverrideMetadata_3 ($type, $metadata)
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
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \System\Object|object $value
	 * @param \Avalonia\TValue& $converted
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldSetValue($target, $value, $converted){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDefaultBoxedValue($type){}
	/**
	 * @uses StyledProperty_1MethodsOverride::get_Changed_1 ()
	 * @uses StyledProperty_1MethodsOverride::get_Changed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Changed(mixed ...$args){}
	/**
	 * @uses StyledProperty_1MethodsOverride::Equals_1 ($obj)
	 * @uses StyledProperty_1MethodsOverride::Equals_2 ($other)
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
