<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EffectiveValue_1MethodsOverride
{
	/**
	 * @return \Avalonia\PropertyStore\T
	 */
	#[MethodOverride] public  function get_Value_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Value_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetAndRaiseCore_1($owner, $property, $value, $priority, $isOverriddenCurrentValue, $isCoercedDefaultValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetAndRaiseCore_2($owner, $property, $value, $priority, $baseValue, $basePriority){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class EffectiveValue_1 extends \Avalonia\PropertyStore\EffectiveValue
{
	/**
	 * @uses EffectiveValue_1MethodsOverride::get_Value_1 ()
	 * @uses EffectiveValue_1MethodsOverride::get_Value_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Value(mixed ...$args){}
	/**
	 * @param \Avalonia\PropertyStore\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Value($value){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @return \System\Void|void
	 */
	public  function SetLocalValueAndRaise($owner, $property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @return \System\Void|void
	 */
	public  function SetCurrentValueAndRaise($owner, $property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @return \System\Void|void
	 */
	public  function SetCoercedDefaultValueAndRaise($owner, $property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\T& $value
	 * @return \System\Boolean
	 */
	public  function TryGetBaseValue($value){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetValue($entry){}
	/**
	 * @uses EffectiveValue_1MethodsOverride::SetAndRaiseCore_1 ($owner, $property, $value, $priority, $isOverriddenCurrentValue, $isCoercedDefaultValue)
	 * @uses EffectiveValue_1MethodsOverride::SetAndRaiseCore_2 ($owner, $property, $value, $priority, $baseValue, $basePriority)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAndRaiseCore(mixed ...$args){}
}
