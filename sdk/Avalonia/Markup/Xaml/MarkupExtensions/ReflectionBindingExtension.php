<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class ReflectionBindingExtension extends \System\Object
{
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @property
	 */
	public $Converter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $ConverterParameter;
	/**
	 * @var \System\String
	 * @property
	 */
	public $ElementName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $FallbackValue;
	/**
	 * @var \Avalonia\Data\BindingMode
	 * @property
	 */
	public $Mode;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Path;
	/**
	 * @var \Avalonia\Data\BindingPriority
	 * @property
	 */
	public $Priority;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\String
	 * @property
	 */
	public $StringFormat;
	/**
	 * @var \Avalonia\Data\RelativeSource
	 * @property
	 */
	public $RelativeSource;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $TargetNullValue;
	/**
	 * @param \System\IServiceProvider $serviceProvider
	 * @return \Avalonia\Data\Binding
	 */
	public  function ProvideValue($serviceProvider){}
	/**
	 * @return \Avalonia\Data\Converters\IValueConverter
	 */
	public  function get_Converter(){}
	/**
	 * @param \Avalonia\Data\Converters\IValueConverter $value
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
	 * @return \System\String|string
	 */
	public  function get_ElementName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ElementName($value){}
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
	 * @return \Avalonia\Data\BindingMode
	 */
	public  function get_Mode(){}
	/**
	 * @param \Avalonia\Data\BindingMode $value
	 * @return \System\Void|void
	 */
	public  function set_Mode($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Path(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Path($value){}
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
	 * @return \System\Object|object
	 */
	public  function get_Source(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
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
	 * @return \Avalonia\Data\RelativeSource
	 */
	public  function get_RelativeSource(){}
	/**
	 * @param \Avalonia\Data\RelativeSource $value
	 * @return \System\Void|void
	 */
	public  function set_RelativeSource($value){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
