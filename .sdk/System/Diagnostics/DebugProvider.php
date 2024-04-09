<?php
namespace System\Diagnostics;
class DebugProvider extends \System\Object
{
	/**
	 * @field
	 * @var \System\Action_4[System\String,System\String,System\String,System\String]
	 */
	protected static $s_FailCore;
	/**
	 * @field
	 * @var \System\Action_1[System\String]
	 */
	protected static $s_WriteCore;
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @return \System\Void|void
	 */
	public function Fail($message, $detailMessage){}
	/**
	 * @param \System\String|string $stackTrace
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @return \System\Void|void
	 */
	protected function WriteAssert($stackTrace, $message, $detailMessage){}
	/**
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	public function Write($message){}
	/**
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	public function WriteLine($message){}
	/**
	 * @param \System\Int32|int $indentLevel
	 * @return \System\Void|void
	 */
	public function OnIndentLevelChanged($indentLevel){}
	/**
	 * @param \System\Int32|int $indentSize
	 * @return \System\Void|void
	 */
	public function OnIndentSizeChanged($indentSize){}
	private function GetIndentString(){}
	/**
	 * @param \System\String|string $stackTrace
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @param \System\String|string $errorSource
	 * @return \System\Void|void
	 */
	public static function FailCore($stackTrace, $message, $detailMessage, $errorSource){}
	/**
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	public static function WriteCore($message){}
	private static function WriteToDebugger($message){}
	private static function WriteToStderr($message){}
	/**
	 */
	public function __construct(){}
}