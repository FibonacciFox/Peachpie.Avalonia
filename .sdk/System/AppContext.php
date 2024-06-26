<?php
namespace System;
class AppContext extends \System\Object
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $BaseDirectory;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TargetFrameworkName;
	/**
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	public static function GetData($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $data
	 * @return \System\Void|void
	 */
	public static function SetData($name, $data){}
	/**
	 * @param \System\UnhandledExceptionEventHandler $value
	 * @return \System\Void|void
	 */
	public static function add_UnhandledException($value){}
	/**
	 * @param \System\UnhandledExceptionEventHandler $value
	 * @return \System\Void|void
	 */
	public static function remove_UnhandledException($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Runtime\ExceptionServices\FirstChanceExceptionEventArgs]
	 * @return \System\Void|void
	 */
	public static function add_FirstChanceException($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Runtime\ExceptionServices\FirstChanceExceptionEventArgs]
	 * @return \System\Void|void
	 */
	public static function remove_FirstChanceException($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public static function add_ProcessExit($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public static function remove_ProcessExit($value){}
	/**
	 * @return \System\Void|void
	 */
	protected static function OnProcessExit(){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\Boolean& &$isEnabled
	 * @return \System\Boolean|bool
	 */
	public static function TryGetSwitch($switchName, &$isEnabled){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\Boolean|bool $isEnabled
	 * @return \System\Void|void
	 */
	public static function SetSwitch($switchName, $isEnabled){}
	/**
	 * @param \System\Char** $pNames
	 * @param \System\Char** $pValues
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function Setup($pNames, $pValues, $count){}
	private static function GetBaseDirectoryCore(){}
	/**
	 * @param \System\Diagnostics\Tracing\RuntimeEventSource $ev
	 * @return \System\Void|void
	 */
	protected static function LogSwitchValues($ev){}
}