<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DebugMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Print_1($message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Print_2($format, $args){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_2($condition, $message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_3($condition, $message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_4($condition, $message, $detailMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_5($condition, $message, $detailMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_6($condition, $message, $detailMessageFormat, $args){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Fail_1($message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Fail_2($message, $detailMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_1($message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_3($value, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_4($format, $args){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_5($message, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_1($message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_3($message, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_4($value, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIf_1($condition, $message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIf_2($condition, $message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIf_3($condition, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIf_4($condition, $message, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIf_5($condition, $message, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIf_6($condition, $value, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLineIf_1($condition, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLineIf_2($condition, $value, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLineIf_3($condition, $message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLineIf_4($condition, $message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLineIf_5($condition, $message, $category){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLineIf_6($condition, $message, $category){}
}
/**
 */
class Debug extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AutoFlush;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $IndentLevel;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $IndentSize;
	/**
	 * @param \System\Diagnostics\DebugProvider $provider
	 * @return \System\Diagnostics\DebugProvider
	 */
	public static function SetProvider($provider){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_AutoFlush(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function set_AutoFlush($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_IndentLevel(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_IndentLevel($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_IndentSize(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_IndentSize($value){}
	/**
	 * @return \System\Void|void
	 */
	public static function Close(){}
	/**
	 * @return \System\Void|void
	 */
	public static function Flush(){}
	/**
	 * @return \System\Void|void
	 */
	public static function Indent(){}
	/**
	 * @return \System\Void|void
	 */
	public static function Unindent(){}
	/**
	 * @uses DebugMethodsOverride::Print_1 ($message)
	 * @uses DebugMethodsOverride::Print_2 ($format, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Print(mixed ...$args){}
	/**
	 * @uses DebugMethodsOverride::Assert_1 ($condition)
	 * @uses DebugMethodsOverride::Assert_2 ($condition, $message)
	 * @uses DebugMethodsOverride::Assert_3 ($condition, $message)
	 * @uses DebugMethodsOverride::Assert_4 ($condition, $message, $detailMessage)
	 * @uses DebugMethodsOverride::Assert_5 ($condition, $message, $detailMessage)
	 * @uses DebugMethodsOverride::Assert_6 ($condition, $message, $detailMessageFormat, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Assert(mixed ...$args){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @param \System\String|string $failureKindMessage
	 * @return \System\Void|void
	 */
	protected static function ContractFailure($message, $detailMessage, $failureKindMessage){}
	/**
	 * @uses DebugMethodsOverride::Fail_1 ($message)
	 * @uses DebugMethodsOverride::Fail_2 ($message, $detailMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Fail(mixed ...$args){}
	/**
	 * @uses DebugMethodsOverride::WriteLine_1 ($message)
	 * @uses DebugMethodsOverride::WriteLine_2 ($value)
	 * @uses DebugMethodsOverride::WriteLine_3 ($value, $category)
	 * @uses DebugMethodsOverride::WriteLine_4 ($format, $args)
	 * @uses DebugMethodsOverride::WriteLine_5 ($message, $category)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteLine(mixed ...$args){}
	/**
	 * @uses DebugMethodsOverride::Write_1 ($message)
	 * @uses DebugMethodsOverride::Write_2 ($value)
	 * @uses DebugMethodsOverride::Write_3 ($message, $category)
	 * @uses DebugMethodsOverride::Write_4 ($value, $category)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Write(mixed ...$args){}
	/**
	 * @uses DebugMethodsOverride::WriteIf_1 ($condition, $message)
	 * @uses DebugMethodsOverride::WriteIf_2 ($condition, $message)
	 * @uses DebugMethodsOverride::WriteIf_3 ($condition, $value)
	 * @uses DebugMethodsOverride::WriteIf_4 ($condition, $message, $category)
	 * @uses DebugMethodsOverride::WriteIf_5 ($condition, $message, $category)
	 * @uses DebugMethodsOverride::WriteIf_6 ($condition, $value, $category)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteIf(mixed ...$args){}
	/**
	 * @uses DebugMethodsOverride::WriteLineIf_1 ($condition, $value)
	 * @uses DebugMethodsOverride::WriteLineIf_2 ($condition, $value, $category)
	 * @uses DebugMethodsOverride::WriteLineIf_3 ($condition, $message)
	 * @uses DebugMethodsOverride::WriteLineIf_4 ($condition, $message)
	 * @uses DebugMethodsOverride::WriteLineIf_5 ($condition, $message, $category)
	 * @uses DebugMethodsOverride::WriteLineIf_6 ($condition, $message, $category)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteLineIf(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
