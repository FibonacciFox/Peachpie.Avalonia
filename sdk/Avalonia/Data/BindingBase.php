<?php
namespace Avalonia\Data;
/**
 */
class BindingBase extends \System\Object implements 
	\Avalonia\Data\IBinding
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
	 * @return \System\String|string
	 */
	public  function get_StringFormat(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_StringFormat($value){}
	/**
	 * @return \System\WeakReference
	 */
	public  function get_DefaultAnchor(){}
	/**
	 * @param \System\WeakReference $value
	 * @return \System\Void|void
	 */
	public  function set_DefaultAnchor($value){}
	/**
	 * @return \System\WeakReference_1
	 */
	public  function get_NameScope(){}
	/**
	 * @param \System\WeakReference_1 $value
	 * @return \System\Void|void
	 */
	public  function set_NameScope($value){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	protected  function CreateExpressionObserver($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\Data\Core\ExpressionNode $node
	 * @param \System\Boolean $targetIsDataContext
	 * @param \System\Object|object $anchor
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	protected  function CreateDataContextObserver($target, $node, $targetIsDataContext, $anchor){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \System\String|string $elementName
	 * @param \Avalonia\Data\Core\ExpressionNode $node
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	protected  function CreateElementObserver($target, $elementName, $node){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \Avalonia\Data\RelativeSource $relativeSource
	 * @param \Avalonia\Data\Core\ExpressionNode $node
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	protected  function CreateFindAncestorObserver($target, $relativeSource, $node){}
	/**
	 * @param \System\Object|object $source
	 * @param \Avalonia\Data\Core\ExpressionNode $node
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	protected  function CreateSourceObserver($source, $node){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\Data\Core\ExpressionNode $node
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	protected  function CreateTemplatedParentObserver($target, $node){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetParentDataContext($target){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
