<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class ElementNameElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement,
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\IControlSourceBindingPathElement
{
	/**
	 * @return \Avalonia\Controls\INameScope
	 */
	public  function get_NameScope(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
