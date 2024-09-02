<?php
namespace Avalonia\Logging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TraceLogSinkOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_1 ($level, $area, $source, $messageTemplate){}
	/**
	 * @deprecated
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \System\Object ...$propertyValues
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_2 ($level, $area, $source, $messageTemplate, ...$propertyValues){}
	/**
	 * @deprecated
	 * @param \System\String|string $area
	 * @param \System\String|string $template
	 * @param \System\Object|object $source
	 * @param \System\Object $values
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Format_1 ($area, $template, $source, $values){}
	/**
	 * @deprecated
	 * @param \System\String|string $area
	 * @param \System\String|string $template
	 * @param \System\Object|object $source
	 * @param \System\Object $v
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Format_2 ($area, $template, $source, $v){}
}
class TraceLogSink extends \System\Object implements
	\Avalonia\Logging\ILogSink
{
	use TraceLogSinkOverride;

	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @return \System\Boolean|bool
	 */
	public function IsEnabled($level, $area){}
	/**
	 * @uses TraceLogSinkOverride::Log_1 <br>public , args: ($level, $area, $source, $messageTemplate)<br>
	 * @uses TraceLogSinkOverride::Log_2 <br>public , args: ($level, $area, $source, $messageTemplate, ...$propertyValues)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Log (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TraceLogSinkOverride::Format_1 <br>private , args: ($area, $template, $source, $values)<br>
	 * @uses TraceLogSinkOverride::Format_2 <br>private , args: ($area, $template, $source, $v)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function Format (\override ...$args){}
	/**
	 * @param \Avalonia\Logging\LogEventLevel $minimumLevel
	 * @param \System\Collections\Generic\IList_1 $areas [generic: System\String]
	 */
	public function __construct($minimumLevel, $areas){}
}