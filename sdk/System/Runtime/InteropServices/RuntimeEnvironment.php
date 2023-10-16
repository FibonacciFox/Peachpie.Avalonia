<?php
namespace System\Runtime\InteropServices;
/**
 */
class RuntimeEnvironment extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $SystemConfigurationFile;
	/**
	 * @return \System\String|string
	 */
	public static function get_SystemConfigurationFile(){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Boolean
	 */
	public static function FromGlobalAccessCache($a){}
	/**
	 * @return \System\String|string
	 */
	public static function GetRuntimeDirectory(){}
	/**
	 * @param \System\Guid $clsid
	 * @param \System\Guid $riid
	 * @return \System\IntPtr
	 */
	public static function GetRuntimeInterfaceAsIntPtr($clsid, $riid){}
	/**
	 * @param \System\Guid $clsid
	 * @param \System\Guid $riid
	 * @return \System\Object|object
	 */
	public static function GetRuntimeInterfaceAsObject($clsid, $riid){}
	/**
	 * @return \System\String|string
	 */
	public static function GetSystemVersion(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
