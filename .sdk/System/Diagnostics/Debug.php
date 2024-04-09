<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DebugOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Print_1 ($message){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object ...$args
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Print_2 ($format, ...$args){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_2 ($condition, $message){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Diagnostics\Debug+AssertInterpolatedStringHandler& $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_3 ($condition, $message){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_4 ($condition, $message, $detailMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Diagnostics\Debug+AssertInterpolatedStringHandler& $message
	 * @param \System\Diagnostics\Debug+AssertInterpolatedStringHandler& $detailMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_5 ($condition, $message, $detailMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessageFormat
	 * @param \System\Object ...$args
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_6 ($condition, $message, $detailMessageFormat, ...$args){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Fail_1 ($message){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Fail_2 ($message, $detailMessage){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_1 ($message){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_3 ($value, $category){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object ...$args
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_4 ($format, ...$args){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_5 ($message, $category){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_1 ($message){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_3 ($message, $category){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_4 ($value, $category){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIf_1 ($condition, $message){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Diagnostics\Debug+WriteIfInterpolatedStringHandler& $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIf_2 ($condition, $message){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIf_3 ($condition, $value){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIf_4 ($condition, $message, $category){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Diagnostics\Debug+WriteIfInterpolatedStringHandler& $message
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIf_5 ($condition, $message, $category){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Object|object $value
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIf_6 ($condition, $value, $category){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLineIf_1 ($condition, $value){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Object|object $value
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLineIf_2 ($condition, $value, $category){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLineIf_3 ($condition, $message){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Diagnostics\Debug+WriteIfInterpolatedStringHandler& $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLineIf_4 ($condition, $message){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $message
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLineIf_5 ($condition, $message, $category){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\Diagnostics\Debug+WriteIfInterpolatedStringHandler& $message
	 * @param \System\String|string $category
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLineIf_6 ($condition, $message, $category){}
}
class Debug extends \System\Object
{
	use DebugOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AutoFlush;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $IndentLevel;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $IndentSize;
	/**
	 * @param \System\Diagnostics\DebugProvider $provider
	 * @return \System\Diagnostics\DebugProvider
	 */
	public static function SetProvider($provider){}
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
	 * @uses DebugOverride::Print_1 <br>public , args: ($message)<br>
	 * @uses DebugOverride::Print_2 <br>public , args: ($format, ...$args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Print (\override ...$args){}
	/**
	 * @uses DebugOverride::Assert_1 <br>public , args: ($condition)<br>
	 * @uses DebugOverride::Assert_2 <br>public , args: ($condition, $message)<br>
	 * @uses DebugOverride::Assert_3 <br>public , args: ($condition, $message)<br>
	 * @uses DebugOverride::Assert_4 <br>public , args: ($condition, $message, $detailMessage)<br>
	 * @uses DebugOverride::Assert_5 <br>public , args: ($condition, $message, $detailMessage)<br>
	 * @uses DebugOverride::Assert_6 <br>public , args: ($condition, $message, $detailMessageFormat, ...$args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Assert (\override ...$args){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $detailMessage
	 * @param \System\String|string $failureKindMessage
	 * @return \System\Void|void
	 */
	protected static function ContractFailure($message, $detailMessage, $failureKindMessage){}
	/**
	 * @uses DebugOverride::Fail_1 <br>public , args: ($message)<br>
	 * @uses DebugOverride::Fail_2 <br>public , args: ($message, $detailMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Fail (\override ...$args){}
	/**
	 * @uses DebugOverride::WriteLine_1 <br>public , args: ($message)<br>
	 * @uses DebugOverride::WriteLine_2 <br>public , args: ($value)<br>
	 * @uses DebugOverride::WriteLine_3 <br>public , args: ($value, $category)<br>
	 * @uses DebugOverride::WriteLine_4 <br>public , args: ($format, ...$args)<br>
	 * @uses DebugOverride::WriteLine_5 <br>public , args: ($message, $category)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteLine (\override ...$args){}
	/**
	 * @uses DebugOverride::Write_1 <br>public , args: ($message)<br>
	 * @uses DebugOverride::Write_2 <br>public , args: ($value)<br>
	 * @uses DebugOverride::Write_3 <br>public , args: ($message, $category)<br>
	 * @uses DebugOverride::Write_4 <br>public , args: ($value, $category)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	/**
	 * @uses DebugOverride::WriteIf_1 <br>public , args: ($condition, $message)<br>
	 * @uses DebugOverride::WriteIf_2 <br>public , args: ($condition, $message)<br>
	 * @uses DebugOverride::WriteIf_3 <br>public , args: ($condition, $value)<br>
	 * @uses DebugOverride::WriteIf_4 <br>public , args: ($condition, $message, $category)<br>
	 * @uses DebugOverride::WriteIf_5 <br>public , args: ($condition, $message, $category)<br>
	 * @uses DebugOverride::WriteIf_6 <br>public , args: ($condition, $value, $category)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteIf (\override ...$args){}
	/**
	 * @uses DebugOverride::WriteLineIf_1 <br>public , args: ($condition, $value)<br>
	 * @uses DebugOverride::WriteLineIf_2 <br>public , args: ($condition, $value, $category)<br>
	 * @uses DebugOverride::WriteLineIf_3 <br>public , args: ($condition, $message)<br>
	 * @uses DebugOverride::WriteLineIf_4 <br>public , args: ($condition, $message)<br>
	 * @uses DebugOverride::WriteLineIf_5 <br>public , args: ($condition, $message, $category)<br>
	 * @uses DebugOverride::WriteLineIf_6 <br>public , args: ($condition, $message, $category)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteLineIf (\override ...$args){}
}