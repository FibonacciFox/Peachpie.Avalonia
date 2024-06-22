<?php
namespace System\Runtime;
class GCSettings extends \System\Object
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsServerGC;
	/**
	 * @property
	 * @var \System\Runtime\GCLatencyMode
	 */
	public $LatencyMode;
	/**
	 * @property
	 * @var \System\Runtime\GCLargeObjectHeapCompactionMode
	 */
	public $LargeObjectHeapCompactionMode;
	private static function GetGCLatencyMode(){}
	private static function SetGCLatencyMode($newLatencyMode){}
	private static function GetLOHCompactionMode(){}
	private static function SetLOHCompactionMode($newLOHCompactionMode){}
}