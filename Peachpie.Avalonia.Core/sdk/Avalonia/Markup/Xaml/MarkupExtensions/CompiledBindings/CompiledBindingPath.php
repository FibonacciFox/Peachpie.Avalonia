<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class CompiledBindingPath extends \System\Object
{
	/**
	 * @param \System\Boolean $enableValidation
	 * @return \Avalonia\Data\Core\ExpressionNode
	 */
	protected  function BuildExpression($enableValidation){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected  function get_Elements(){}
	/**
	 * @return \Avalonia\Markup\Parsers\SourceMode
	 */
	protected  function get_SourceMode(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_RawSource(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
