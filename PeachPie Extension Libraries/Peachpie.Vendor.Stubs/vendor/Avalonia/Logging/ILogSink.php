<?php
namespace Avalonia\Logging;
interface ILogSink
{

	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @return \System\Boolean|bool
	 */
	public function IsEnabled($level, $area);
	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @return \System\Void|void
	 */
	public function Log($level, $area, $source, $messageTemplate);
	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \System\Object ...$propertyValues
	 * @return \System\Void|void
	 */
	public function Log($level, $area, $source, $messageTemplate, ...$propertyValues);
}