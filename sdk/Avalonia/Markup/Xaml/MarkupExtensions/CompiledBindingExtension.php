<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class CompiledBindingExtension extends \Avalonia\Data\BindingBase implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @var \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPath
	 * @property
	 */
	public $Path;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $DataType;
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
	 * @param \System\IServiceProvider $provider
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindingExtension
	 */
	public  function ProvideValue($provider){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPath
	 */
	public  function get_Path(){}
	/**
	 * @param \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPath $value
	 * @return \System\Void|void
	 */
	public  function set_Path($value){}
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
	 * @return \System\Type
	 */
	public  function get_DataType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_DataType($value){}
}
