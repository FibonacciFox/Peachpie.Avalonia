<?php
namespace Avalonia\Markup\Parsers;
/**
 */
class TypeQualifiedPropertySyntax extends \System\Object implements 
	\Avalonia\Markup\Parsers\ISyntax
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public $TypeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $TypeNamespace;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
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
	public  function get_TypeNamespace(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_TypeNamespace($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
