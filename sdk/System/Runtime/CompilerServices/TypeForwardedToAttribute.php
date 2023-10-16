<?php
namespace System\Runtime\CompilerServices;
/**
 */
class TypeForwardedToAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $Destination;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_Destination(){}
}
