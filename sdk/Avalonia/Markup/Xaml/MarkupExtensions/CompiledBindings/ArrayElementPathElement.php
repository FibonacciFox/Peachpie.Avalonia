<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class ArrayElementPathElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement
{
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public readonly $Indices;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ElementType;
	/**
	 * @return \System\Int32[]
	 */
	public  function get_Indices(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ElementType(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
