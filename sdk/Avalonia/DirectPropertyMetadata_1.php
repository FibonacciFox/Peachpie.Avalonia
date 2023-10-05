<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DirectPropertyMetadata_1MethodsOverride
{
	/**
	 * @return \Avalonia\TValue
	 */
	#[MethodOverride] public  function get_UnsetValue_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_UnsetValue_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class DirectPropertyMetadata_1 extends \Avalonia\AvaloniaPropertyMetadata implements 
	\Avalonia\IDirectPropertyMetadata
{
	/**
	 * @var \TValue
	 * @property
	 */
	public $UnsetValue;
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
	 * @uses DirectPropertyMetadata_1MethodsOverride::get_UnsetValue_1 ()
	 * @uses DirectPropertyMetadata_1MethodsOverride::get_UnsetValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_UnsetValue(mixed ...$args){}
	/**
	 * @param \Avalonia\TValue $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_UnsetValue($value){}
}
