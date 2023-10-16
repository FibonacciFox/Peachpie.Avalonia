<?php
namespace System\Runtime\Intrinsics\X86;
/**
 */
class X86Base extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\Int32* $cpuInfo
	 * @param \System\Int32|int $functionId
	 * @param \System\Int32|int $subFunctionId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function __cpuidex($cpuInfo, $functionId, $subFunctionId){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsSupported(){}
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
	 * @return \System\ValueTuple_4
	 */
	public static function CpuId($functionId, $subFunctionId){}
	/**
	 * @return \System\Void|void
	 */
	public static function Pause(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
