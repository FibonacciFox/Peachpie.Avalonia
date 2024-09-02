<?php
namespace System\Threading;
class ProcessorIdCache extends \System\Object
{

	private static function RefreshCurrentProcessorId(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetCurrentProcessorId(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected static function ProcessorNumberSpeedCheck(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function UninlinedThreadStatic(){}
}