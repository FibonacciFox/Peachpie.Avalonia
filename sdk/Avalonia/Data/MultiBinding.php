<?php
namespace Avalonia\Data;
/**
 */
class MultiBinding extends \System\Object implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\IBinding]
	 * @property
	 */
	public $Bindings;
	/**
	 * @var \Avalonia\Data\Converters\IMultiValueConverter
	 * @property
	 */
	public $Converter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $ConverterParameter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $FallbackValue;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $TargetNullValue;
	/**
	 * @var \Avalonia\Data\BindingMode
	 * @property
	 */
	public $Mode;
	/**
	 * @var \Avalonia\Data\BindingPriority
	 * @property
	 */
	public $Priority;
	/**
	 * @var \Avalonia\Data\RelativeSource
	 * @property
	 */
	public $RelativeSource;
	/**
	 * @var \System\String
	 * @property
	 */
	public $StringFormat;
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Bindings(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Bindings($value){}
	/**
	 * @return \Avalonia\Data\Converters\IMultiValueConverter
	 */
	public  function get_Converter(){}
	/**
	 * @param \Avalonia\Data\Converters\IMultiValueConverter $value
	 * @return \System\Void|void
	 */
	public  function set_Converter($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_ConverterParameter(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_ConverterParameter($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_FallbackValue(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_FallbackValue($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_TargetNullValue(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_TargetNullValue($value){}
	/**
	 * @return \Avalonia\Data\BindingMode
	 */
	public  function get_Mode(){}
	/**
	 * @param \Avalonia\Data\BindingMode $value
	 * @return \System\Void|void
	 */
	public  function set_Mode($value){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \Avalonia\Data\BindingPriority $value
	 * @return \System\Void|void
	 */
	public  function set_Priority($value){}
	/**
	 * @return \Avalonia\Data\RelativeSource
	 */
	public  function get_RelativeSource(){}
	/**
	 * @param \Avalonia\Data\RelativeSource $value
	 * @return \System\Void|void
	 */
	public  function set_RelativeSource($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_StringFormat(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_StringFormat($value){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \System\Collections\Generic\IList_1 $values
	 * @param \System\Type $targetType
	 * @param \Avalonia\Data\Converters\IMultiValueConverter $converter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertValue($values, $targetType, $converter){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
