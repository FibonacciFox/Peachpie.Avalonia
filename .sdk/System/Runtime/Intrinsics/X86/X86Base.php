<?php
namespace System\Runtime\Intrinsics\X86;
class X86Base extends \System\Object
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	private static function __cpuidex($cpuInfo, $functionId, $subFunctionId){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function BitScanForward($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	protected static function BitScanReverse($value){}
	/**
	 * @param \System\Int32|int $functionId
	 * @param \System\Int32|int $subFunctionId
	 * @return \System\ValueTuple_4[System\Int32,System\Int32,System\Int32,System\Int32]
	 */
	public static function CpuId($functionId, $subFunctionId){}
	/**
	 * @return \System\Void|void
	 */
	public static function Pause(){}
}