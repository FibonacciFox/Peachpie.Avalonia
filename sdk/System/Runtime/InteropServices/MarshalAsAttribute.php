<?php
namespace System\Runtime\InteropServices;
/**
 */
class MarshalAsAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\VarEnum
	 * @field
	 */
	public $SafeArraySubType;
	/**
	 * @var \System\Type
	 * @field
	 */
	public $SafeArrayUserDefinedSubType;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $IidParameterIndex;
	/**
	 * @var \System\Runtime\InteropServices\UnmanagedType
	 * @field
	 */
	public $ArraySubType;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $SizeParamIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $SizeConst;
	/**
	 * @var \System\String
	 * @field
	 */
	public $MarshalType;
	/**
	 * @var \System\Type
	 * @field
	 */
	public $MarshalTypeRef;
	/**
	 * @var \System\String
	 * @field
	 */
	public $MarshalCookie;
	/**
	 * @var \System\Runtime\InteropServices\UnmanagedType
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\UnmanagedType
	 */
	public  function get_Value(){}
}
