<?php
namespace System\Diagnostics\Tracing;
/**
 */
class SessionMask extends \System\ValueType
{
	/**
	 * @var \System\Diagnostics\Tracing\SessionMask
	 * @property
	 */
	public readonly $All;
	/**
	 * @return \System\Diagnostics\Tracing\SessionMask
	 */
	public static function get_All(){}
	/**
	 * @return \System\UInt64
	 */
	public  function ToEventKeywords(){}
	/**
	 * @param \System\UInt64 $m
	 * @return \System\Diagnostics\Tracing\SessionMask
	 */
	public static function FromEventKeywords($m){}
	/**
	 * @param \System\Diagnostics\Tracing\SessionMask $m
	 * @return \System\UInt32
	 */
	public static function op_Explicit($m){}
}
