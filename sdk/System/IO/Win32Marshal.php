<?php
namespace System\IO;
/**
 */
class Win32Marshal extends \System\Object
{
	/**
	 * @param \System\String|string $path
	 * @return \System\Exception
	 */
	protected static function GetExceptionForLastWin32Error($path){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @param \System\String|string $path
	 * @return \System\Exception
	 */
	protected static function GetExceptionForWin32Error($errorCode, $path){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @return \System\Int32|int
	 */
	protected static function MakeHRFromErrorCode($errorCode){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
