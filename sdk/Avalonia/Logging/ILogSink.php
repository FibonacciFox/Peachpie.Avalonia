<?php
namespace Avalonia\Logging;
/**
 */
interface ILogSink
{
	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 */
	public function IsEnabled($level, $area);
}
