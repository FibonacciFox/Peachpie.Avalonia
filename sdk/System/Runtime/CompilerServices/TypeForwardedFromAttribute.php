<?php
namespace System\Runtime\CompilerServices;
/**
 */
class TypeForwardedFromAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AssemblyFullName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_AssemblyFullName(){}
}
