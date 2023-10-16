<?php
namespace System\Diagnostics;
/**
 */
class StackFrameHelper extends \System\Object
{
	/**
	 * @param \System\Int32|int $iSkip
	 * @param \System\Boolean $fNeedFileInfo
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	protected  function InitializeSourceInfo($iSkip, $fNeedFileInfo, $exception){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Reflection\MethodBase
	 */
	public  function GetMethodBase($i){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Int32|int
	 */
	public  function GetOffset($i){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Int32|int
	 */
	public  function GetILOffset($i){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\String|string
	 */
	public  function GetFilename($i){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Int32|int
	 */
	public  function GetLineNumber($i){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Int32|int
	 */
	public  function GetColumnNumber($i){}
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Boolean
	 */
	public  function IsLastFrameFromForeignExceptionStackTrace($i){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetNumberOfFrames(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
