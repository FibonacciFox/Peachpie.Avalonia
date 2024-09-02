<?php
namespace System\Runtime\InteropServices;
class RuntimeEnvironment extends \System\Object
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $SystemConfigurationFile;
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Boolean|bool
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
}