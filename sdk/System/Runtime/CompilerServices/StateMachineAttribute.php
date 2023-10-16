<?php
namespace System\Runtime\CompilerServices;
/**
 */
class StateMachineAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $StateMachineType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_StateMachineType(){}
}
