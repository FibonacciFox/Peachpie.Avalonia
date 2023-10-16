<?php
namespace System\Diagnostics;
/**
 */
class StackFrame extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $OFFSET_UNKNOWN;
	/**
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean $needFileInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BuildStackFrame($skipFrames, $needFileInfo){}
	/**
	 * @param \System\IntPtr $ip
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMethodDescFromNativeIP($ip){}
	/**
	 * @param \System\IntPtr $ip
	 * @return \System\Reflection\MethodBase
	 */
	protected static function GetMethodFromNativeIP($ip){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitMembers(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsLastFrameFromForeignExceptionStackTrace(){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	public  function GetMethod(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetNativeOffset(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetILOffset(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetFileName(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetFileLineNumber(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetFileColumnNumber(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
