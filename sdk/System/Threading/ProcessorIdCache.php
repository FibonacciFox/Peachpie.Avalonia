<?php
namespace System\Threading;
/**
 */
class ProcessorIdCache extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RefreshCurrentProcessorId(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetCurrentProcessorId(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function ProcessorNumberSpeedCheck(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function UninlinedThreadStatic(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
