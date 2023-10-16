<?php
namespace System;
/**
 */
class Variant extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_EMPTY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_VOID;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_BOOLEAN;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_CHAR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_I1;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_U1;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_I2;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_U2;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_I4;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_U4;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_I8;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_U8;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_R4;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_R8;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_STRING;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_PTR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_DATETIME;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_TIMESPAN;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_OBJECT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_DECIMAL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_ENUM;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_MISSING;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_NULL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $CV_LAST;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $TypeCodeBitMask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $VTBitMask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $VTBitShift;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ArrayBitMask;
	/**
	 * @return \System\Variant
	 */
	protected static function get_Empty(){}
	/**
	 * @return \System\Variant
	 */
	protected static function get_Missing(){}
	/**
	 * @return \System\Variant
	 */
	protected static function get_DBNull(){}
	/**
	 * @param \System\Object|object $val
	 * @return \System\Void|void
	 */
	protected  function SetFieldsObject($val){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_CVType(){}
	/**
	 * @return \System\Object|object
	 */
	public  function ToObject(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BoxEnum(){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\Variant& $v
	 * @return \System\Void|void
	 */
	protected static function MarshalHelperConvertObjectToVariant($o, $v){}
	/**
	 * @param \System\Variant& $v
	 * @return \System\Object|object
	 */
	protected static function MarshalHelperConvertVariantToObject($v){}
	/**
	 * @param \System\Object|object $pValue
	 * @param \System\Int32|int $vt
	 * @param \System\Variant& $v
	 * @return \System\Void|void
	 */
	protected static function MarshalHelperCastVariant($pValue, $vt, $v){}
}
