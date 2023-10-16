<?php
namespace System\Runtime\InteropServices;
/**
 */
class UnmanagedFunctionPointerAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $BestFitMapping;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $SetLastError;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $ThrowOnUnmappableChar;
	/**
	 * @var \System\Runtime\InteropServices\CharSet
	 * @field
	 */
	public $CharSet;
	/**
	 * @var \System\Runtime\InteropServices\CallingConvention
	 * @property
	 */
	public readonly $CallingConvention;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\CallingConvention
	 */
	public  function get_CallingConvention(){}
}
