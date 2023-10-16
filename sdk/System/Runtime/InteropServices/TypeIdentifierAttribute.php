<?php
namespace System\Runtime\InteropServices;
/**
 */
class TypeIdentifierAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Scope;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Identifier;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Scope(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Identifier(){}
}
