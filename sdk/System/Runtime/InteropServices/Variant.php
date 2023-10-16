<?php
namespace System\Runtime\InteropServices;
/**
 */
class Variant extends \System\ValueType
{
	/**
	 * @var \System\Runtime\InteropServices\VarEnum
	 * @property
	 */
	public $VariantType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEmpty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRef;
	/**
	 * @var \System\SByte
	 * @property
	 */
	public readonly $AsI1;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $AsI2;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $AsI4;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $AsI8;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $AsUi1;
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $AsUi2;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $AsUi4;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $AsUi8;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $AsInt;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $AsUint;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AsBool;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $AsError;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $AsR4;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $AsR8;
	/**
	 * @var \System\Decimal
	 * @property
	 */
	public readonly $AsDecimal;
	/**
	 * @var \System\Decimal
	 * @property
	 */
	public readonly $AsCy;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $AsDate;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AsBstr;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $AsUnknown;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $AsDispatch;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $AsByRefVariant;
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function CopyFromIndirect($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function ToObject(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Runtime\InteropServices\VarEnum
	 */
	public  function get_VariantType(){}
	/**
	 * @param \System\Runtime\InteropServices\VarEnum $value
	 * @return \System\Void|void
	 */
	public  function set_VariantType($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsByRef(){}
	/**
	 * @return \System\SByte
	 */
	public  function get_AsI1(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_AsI2(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AsI4(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_AsI8(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_AsUi1(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_AsUi2(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_AsUi4(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_AsUi8(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AsInt(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_AsUint(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AsBool(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AsError(){}
	/**
	 * @return \System\Single
	 */
	public  function get_AsR4(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_AsR8(){}
	/**
	 * @return \System\Decimal
	 */
	public  function get_AsDecimal(){}
	/**
	 * @return \System\Decimal
	 */
	public  function get_AsCy(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_AsDate(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_AsBstr(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_AsUnknown(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_AsDispatch(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_AsByRefVariant(){}
}
