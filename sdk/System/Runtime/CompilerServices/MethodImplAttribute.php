<?php
namespace System\Runtime\CompilerServices;
/**
 */
class MethodImplAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\CompilerServices\MethodCodeType
	 * @field
	 */
	public $MethodCodeType;
	/**
	 * @var \System\Runtime\CompilerServices\MethodImplOptions
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\CompilerServices\MethodImplOptions
	 */
	public  function get_Value(){}
}
