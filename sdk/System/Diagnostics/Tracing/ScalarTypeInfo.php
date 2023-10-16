<?php
namespace System\Diagnostics\Tracing;
/**
 */
class ScalarTypeInfo extends \System\Diagnostics\Tracing\TraceLoggingTypeInfo
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	public readonly $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @property
	 */
	public readonly $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	public readonly $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @property
	 */
	public readonly $Tags;
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
