<?php
namespace System\Runtime\CompilerServices;
/**
 */
class AsyncMethodBuilderAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $BuilderType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_BuilderType(){}
}
