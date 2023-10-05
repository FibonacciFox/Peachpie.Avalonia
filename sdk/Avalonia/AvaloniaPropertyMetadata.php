<?php
namespace Avalonia;
/**
 */
class AvaloniaPropertyMetadata extends \System\Object
{
	/**
	 * @var \Avalonia\Data\BindingMode
	 * @property
	 */
	public readonly $DefaultBindingMode;
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public $EnableDataValidation;
	/**
	 * @return \Avalonia\Data\BindingMode
	 */
	public  function get_DefaultBindingMode(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_EnableDataValidation(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_EnableDataValidation($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyMetadata $baseMetadata
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function Merge($baseMetadata, $property){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	public  function GenerateTypeSafeMetadata(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
