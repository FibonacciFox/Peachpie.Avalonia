<?php
namespace System\Runtime\InteropServices;
/**
 */
class DllImportAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $EntryPoint;
	/**
	 * @var \System\Runtime\InteropServices\CharSet
	 * @field
	 */
	public $CharSet;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $SetLastError;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $ExactSpelling;
	/**
	 * @var \System\Runtime\InteropServices\CallingConvention
	 * @field
	 */
	public $CallingConvention;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $BestFitMapping;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $PreserveSig;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $ThrowOnUnmappableChar;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
}
