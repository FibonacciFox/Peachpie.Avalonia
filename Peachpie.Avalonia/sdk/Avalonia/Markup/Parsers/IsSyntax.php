<?php
namespace Avalonia\Markup\Parsers;
/**
 */
class IsSyntax extends \System\Object implements 
	\Avalonia\Markup\Parsers\ISyntax,
	\Avalonia\Markup\Parsers\ITypeSyntax
{
	/**
	 * @return \System\String|string
	 */
	public  function get_TypeName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_TypeName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Xmlns(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Xmlns($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
