<?php
namespace Avalonia\Markup\Parsers;
/**
 */
class TypeCastNode extends \System\Object implements 
	\Avalonia\Markup\Parsers\INode
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Namespace;
	/**
	 * @var \System\String
	 * @property
	 */
	public $TypeName;
	/**
	 * @return \System\String|string
	 */
	public  function get_Namespace(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Namespace($value){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
