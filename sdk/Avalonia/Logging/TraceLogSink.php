<?php
namespace Avalonia\Logging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TraceLogSinkMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_1($level, $area, $source, $messageTemplate){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_2($level, $area, $source, $messageTemplate, $propertyValues){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Format_1($area, $template, $source, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Format_2($area, $template, $source, $v){}
}
/**
 */
class TraceLogSink extends \System\Object implements 
	\Avalonia\Logging\ILogSink
{
	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @return \System\Boolean
	 */
	public  function IsEnabled($level, $area){}
	/**
	 * @uses TraceLogSinkMethodsOverride::Log_1 ($level, $area, $source, $messageTemplate)
	 * @uses TraceLogSinkMethodsOverride::Log_2 ($level, $area, $source, $messageTemplate, $propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Log(mixed ...$args){}
	/**
	 * @uses TraceLogSinkMethodsOverride::Format_1 ($area, $template, $source, $values)
	 * @uses TraceLogSinkMethodsOverride::Format_2 ($area, $template, $source, $v)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Format(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
