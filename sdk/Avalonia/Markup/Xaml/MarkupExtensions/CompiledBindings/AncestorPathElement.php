<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class AncestorPathElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement,
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\IControlSourceBindingPathElement
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $AncestorType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Level;
	/**
	 * @return \System\Type
	 */
	public  function get_AncestorType(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Level(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
