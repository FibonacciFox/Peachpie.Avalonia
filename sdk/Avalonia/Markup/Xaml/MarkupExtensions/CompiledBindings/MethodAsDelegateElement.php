<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class MethodAsDelegateElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement
{
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function get_Method(){}
	/**
	 * @return \System\Type
	 */
	public  function get_DelegateType(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
