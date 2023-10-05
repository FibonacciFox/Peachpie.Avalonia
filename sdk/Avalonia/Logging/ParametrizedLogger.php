<?php
namespace Avalonia\Logging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ParametrizedLoggerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_1($source, $messageTemplate){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_2($source, $messageTemplate, $propertyValue0){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_3($source, $messageTemplate, $propertyValue0, $propertyValue1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_4($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_5($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_6($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Log_7($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4, $propertyValue5){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class ParametrizedLogger extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValid;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValid(){}
	/**
	 * @uses ParametrizedLoggerMethodsOverride::Log_1 ($source, $messageTemplate)
	 * @uses ParametrizedLoggerMethodsOverride::Log_2 ($source, $messageTemplate, $propertyValue0)
	 * @uses ParametrizedLoggerMethodsOverride::Log_3 ($source, $messageTemplate, $propertyValue0, $propertyValue1)
	 * @uses ParametrizedLoggerMethodsOverride::Log_4 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2)
	 * @uses ParametrizedLoggerMethodsOverride::Log_5 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3)
	 * @uses ParametrizedLoggerMethodsOverride::Log_6 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4)
	 * @uses ParametrizedLoggerMethodsOverride::Log_7 ($source, $messageTemplate, $propertyValue0, $propertyValue1, $propertyValue2, $propertyValue3, $propertyValue4, $propertyValue5)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Log(mixed ...$args){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Logging\ParametrizedLogger $left
	 * @param \Avalonia\Logging\ParametrizedLogger $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Logging\ParametrizedLogger $left
	 * @param \Avalonia\Logging\ParametrizedLogger $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses ParametrizedLoggerMethodsOverride::Equals_1 ($obj)
	 * @uses ParametrizedLoggerMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
