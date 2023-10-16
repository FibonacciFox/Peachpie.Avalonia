<?php
namespace System\Runtime\CompilerServices;
/**
 */
class DependencyAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DependentAssembly;
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
	 * @return \System\String|string
	 */
	public  function get_DependentAssembly(){}
	/**
	 * @return \System\Runtime\CompilerServices\LoadHint
	 */
	public  function get_LoadHint(){}
}
