<?php
namespace System\IO;
/**
 */
class Error extends \System\Object
{
	/**
	 * @return \System\Exception
	 */
	protected static function GetEndOfFile(){}
	/**
	 * @return \System\Exception
	 */
	protected static function GetPipeNotOpen(){}
	/**
	 * @return \System\Exception
	 */
	protected static function GetReadNotSupported(){}
	/**
	 * @return \System\Exception
	 */
	protected static function GetSeekNotSupported(){}
	/**
	 * @return \System\Exception
	 */
	protected static function GetWriteNotSupported(){}
	/**
	 * @return \System\Exception
	 */
	protected static function GetOperationAborted(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
