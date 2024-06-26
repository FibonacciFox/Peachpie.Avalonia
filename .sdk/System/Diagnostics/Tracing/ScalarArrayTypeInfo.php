<?php
namespace System\Diagnostics\Tracing;
final class ScalarArrayTypeInfo extends \System\Diagnostics\Tracing\TraceLoggingTypeInfo
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @since readonly
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @since readonly
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @since readonly
	 */
	public $Keywords;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @since readonly
	 */
	public $Tags;
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Boolean(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Byte(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function SByte(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Char(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Int16(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function UInt16(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Int32(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function UInt32(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Int64(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function UInt64(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function IntPtr(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function UIntPtr(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Single(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Double(){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Guid(){}
}