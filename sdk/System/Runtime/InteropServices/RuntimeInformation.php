<?php
namespace System\Runtime\InteropServices;
/**
 */
class RuntimeInformation extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FrameworkDescription;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $RuntimeIdentifier;
	/**
	 * @var \System\Runtime\InteropServices\Architecture
	 * @property
	 */
	public readonly $ProcessArchitecture;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $OSDescription;
	/**
	 * @var \System\Runtime\InteropServices\Architecture
	 * @property
	 */
	public readonly $OSArchitecture;
	/**
	 * @return \System\String|string
	 */
	public static function get_FrameworkDescription(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_RuntimeIdentifier(){}
	/**
	 * @param \System\Runtime\InteropServices\OSPlatform $osPlatform
	 * @return \System\Boolean
	 */
	public static function IsOSPlatform($osPlatform){}
	/**
	 * @return \System\Runtime\InteropServices\Architecture
	 */
	public static function get_ProcessArchitecture(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_OSDescription(){}
	/**
	 * @return \System\Runtime\InteropServices\Architecture
	 */
	public static function get_OSArchitecture(){}
	/**
	 * @param \System\Int32|int $processorArchitecture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Map($processorArchitecture){}
	/**
	 * @param \System\UInt16 $processMachine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MapMachineConstant($processMachine){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
