<?php
namespace Avalonia\Logging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ParametrizedLoggerOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_1 ($source, $messageTemplate){}
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \T0 $propertyValue0
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_2 ($source, $messageTemplate, $propertyValue0){}
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \T0 $propertyValue0
	 * @param \T1 $propertyValue1
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_3 ($source, $messageTemplate, $propertyValue0, $propertyValue1){}
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \T0 $propertyValue0
	 * @param \T1 $propertyValue1
	 * @param \T2 $propertyValue2
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_4 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2){}
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \T0 $propertyValue0
	 * @param \T1 $propertyValue1
	 * @param \T2 $propertyValue2
	 * @param \T3 $propertyValue3
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_5 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3){}
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \T0 $propertyValue0
	 * @param \T1 $propertyValue1
	 * @param \T2 $propertyValue2
	 * @param \T3 $propertyValue3
	 * @param \T4 $propertyValue4
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_6 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4){}
	/**
	 * @deprecated
	 * @param \System\Object|object $source
	 * @param \System\String|string $messageTemplate
	 * @param \T0 $propertyValue0
	 * @param \T1 $propertyValue1
	 * @param \T2 $propertyValue2
	 * @param \T3 $propertyValue3
	 * @param \T4 $propertyValue4
	 * @param \T5 $propertyValue5
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Log_7 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4, $propertyValue5){}
}
final class ParametrizedLogger extends \System\ValueType implements
	\System\IEquatable_1
{
	use ParametrizedLoggerOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValid;
	/**
	 * @uses ParametrizedLoggerOverride::Log_1 <br>public , args: ($source, $messageTemplate)<br>
	 * @uses ParametrizedLoggerOverride::Log_2 <br>public , args: ($source, $messageTemplate, $propertyValue0)<br>
	 * @uses ParametrizedLoggerOverride::Log_3 <br>public , args: ($source, $messageTemplate, $propertyValue0, $propertyValue1)<br>
	 * @uses ParametrizedLoggerOverride::Log_4 <br>public , args: ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2)<br>
	 * @uses ParametrizedLoggerOverride::Log_5 <br>public , args: ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3)<br>
	 * @uses ParametrizedLoggerOverride::Log_6 <br>public , args: ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4)<br>
	 * @uses ParametrizedLoggerOverride::Log_7 <br>public , args: ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4, $propertyValue5)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Log (\override ...$args){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Logging\ParametrizedLogger $left
	 * @param \Avalonia\Logging\ParametrizedLogger $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Logging\ParametrizedLogger $left
	 * @param \Avalonia\Logging\ParametrizedLogger $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Logging\ILogSink $sink
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 */
	public function __construct($sink, $level, $area){}
}