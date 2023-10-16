<?php
namespace System\Runtime;
/**
 */
class GCSettings extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsServerGC;
	/**
	 * @var \System\Runtime\GCLatencyMode
	 * @property
	 */
	public $LatencyMode;
	/**
	 * @var \System\Runtime\GCLargeObjectHeapCompactionMode
	 * @property
	 */
	public $LargeObjectHeapCompactionMode;
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsServerGC(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGCLatencyMode(){}
	/**
	 * @param \System\Runtime\GCLatencyMode $newLatencyMode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetGCLatencyMode($newLatencyMode){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLOHCompactionMode(){}
	/**
	 * @param \System\Runtime\GCLargeObjectHeapCompactionMode $newLOHCompactionMode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetLOHCompactionMode($newLOHCompactionMode){}
	/**
	 * @return \System\Runtime\GCLatencyMode
	 */
	public static function get_LatencyMode(){}
	/**
	 * @param \System\Runtime\GCLatencyMode $value
	 * @return \System\Void|void
	 */
	public static function set_LatencyMode($value){}
	/**
	 * @return \System\Runtime\GCLargeObjectHeapCompactionMode
	 */
	public static function get_LargeObjectHeapCompactionMode(){}
	/**
	 * @param \System\Runtime\GCLargeObjectHeapCompactionMode $value
	 * @return \System\Void|void
	 */
	public static function set_LargeObjectHeapCompactionMode($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
