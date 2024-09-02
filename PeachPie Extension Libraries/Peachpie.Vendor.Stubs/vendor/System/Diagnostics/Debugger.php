<?php
namespace System\Diagnostics;
class Debugger extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $DefaultCategory;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAttached;
	/**
	 * @return \System\Void|void
	 */
	public static function Break(){}
	private static function BreakInternal(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function Launch(){}
	private static function NotifyOfCrossThreadDependencySlow(){}
	/**
	 * @return \System\Void|void
	 */
	public static function NotifyOfCrossThreadDependency(){}
	private static function LaunchInternal(){}
	/**
	 * @param \System\Int32|int $level
	 * @param \System\String|string $category
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	public static function Log($level, $category, $message){}
	private static function LogInternal($level, $category, $message){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function IsLogging(){}
	private static function CustomNotification($data){}
}