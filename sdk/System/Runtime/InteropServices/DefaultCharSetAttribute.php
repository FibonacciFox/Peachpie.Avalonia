<?php
namespace System\Runtime\InteropServices;
/**
 */
class DefaultCharSetAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\CharSet
	 * @property
	 */
	public readonly $CharSet;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\CharSet
	 */
	public  function get_CharSet(){}
}
