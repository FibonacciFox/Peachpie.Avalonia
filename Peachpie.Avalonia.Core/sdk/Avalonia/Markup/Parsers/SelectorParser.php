<?php
namespace Avalonia\Markup\Parsers;
/**
 */
class SelectorParser extends \System\Object
{
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Styling\Selector
	 */
	public  function Parse($s){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $syntax
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Create($syntax){}
	/**
	 * @param \System\String|string $xmlns
	 * @param \System\String|string $typeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Resolve($xmlns, $typeName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
