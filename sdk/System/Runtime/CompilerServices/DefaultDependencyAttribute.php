<?php
namespace System\Runtime\CompilerServices;
/**
 */
class DefaultDependencyAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\CompilerServices\LoadHint
	 * @property
	 */
	public readonly $LoadHint;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\CompilerServices\LoadHint
	 */
	public  function get_LoadHint(){}
}
