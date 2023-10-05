<?php
namespace Avalonia\Data;
/**
 */
class Binding extends \Avalonia\Data\BindingBase implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $ElementName;
	/**
	 * @var \Avalonia\Data\RelativeSource
	 * @property
	 */
	public $RelativeSource;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Path;
	/**
	 * @var \System\Func_3[System\String,System\String,System\Type]
	 * @property
	 */
	public $TypeResolver;
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
	 * @var \System\String
	 * @property
	 */
	public $StringFormat;
	/**
	 * @var \System\WeakReference
	 * @property
	 */
	public $DefaultAnchor;
	/**
	 * @var \System\WeakReference_1[Avalonia\Controls\INameScope]
	 * @property
	 */
	public $NameScope;
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
	public  function get_Source(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
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
	 * @return \System\Func_3
	 */
	public  function get_TypeResolver(){}
	/**
	 * @param \System\Func_3 $value
	 * @return \System\Void|void
	 */
	public  function set_TypeResolver($value){}
}
