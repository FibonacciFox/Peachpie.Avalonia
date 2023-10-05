<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class MethodAsDelegateElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement
{
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $Method;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DelegateType;
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
