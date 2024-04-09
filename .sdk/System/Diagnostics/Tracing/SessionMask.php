<?php
namespace System\Diagnostics\Tracing;
final class SessionMask extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\SessionMask
	 * @since readonly
	 */
	public $All;
	/**
	 * @return \System\UInt64
	 */
	public function ToEventKeywords(){}
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
	/**
	 * @param \System\UInt32 $mask
	 */
	public function __construct($mask){}
}