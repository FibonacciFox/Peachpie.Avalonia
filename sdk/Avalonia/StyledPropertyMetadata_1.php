<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StyledPropertyMetadata_1MethodsOverride
{
	/**
	 * @return \Avalonia\TValue
	 */
	#[MethodOverride] public  function get_DefaultValue_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_DefaultValue_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class StyledPropertyMetadata_1 extends \Avalonia\AvaloniaPropertyMetadata implements 
	\Avalonia\IStyledPropertyMetadata
{
	/**
	 * @var \TValue
	 * @property
	 */
	public readonly $DefaultValue;
	/**
	 * @var \System\Func_3[Avalonia\AvaloniaObject,TValue,TValue]
	 * @property
	 */
	public $CoerceValue;
	/**
	 * @var \Avalonia\Data\BindingMode
	 * @property
	 */
	public readonly $DefaultBindingMode;
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public readonly $EnableDataValidation;
	/**
	 * @uses StyledPropertyMetadata_1MethodsOverride::get_DefaultValue_1 ()
	 * @uses StyledPropertyMetadata_1MethodsOverride::get_DefaultValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_DefaultValue(mixed ...$args){}
	/**
	 * @return \System\Func_3
	 */
	public  function get_CoerceValue(){}
	/**
	 * @param \System\Func_3 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CoerceValue($value){}
}
