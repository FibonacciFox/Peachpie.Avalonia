<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextWriterOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_1 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_2 (){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_2 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_3 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_4 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_16 ($format, $arg0){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_17 ($format, $arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_18 ($format, $arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object ...$arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_19 ($format, ...$arg){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_3 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_4 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_5 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_16 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_17 ($format, $arg0){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_18 ($format, $arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_19 ($format, $arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object ...$arg
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteLine_20 ($format, ...$arg){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $value
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_3 ($value, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_4 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_5 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Char]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_6 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $value
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_3 ($value, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_4 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_5 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Char]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_6 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteLineAsync_7 (){}
}
class TextWriter extends \System\MarshalByRefObject implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use TextWriterOverride;
	/**
	 * @field
	 * @var \System\Char[]
	 */
	protected $CoreNewLine;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\TextWriter
	 */
	public static $Null;
	/**
	 * @property
	 * @var \System\IFormatProvider
	 * @since readonly
	 */
	public $FormatProvider;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Encoding;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NewLine;
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses TextWriterOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses TextWriterOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @return \System\Void|void
	 */
	public function Flush(){}
	/**
	 * @uses TextWriterOverride::Write_1 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_2 <br>public , args: ($buffer)<br>
	 * @uses TextWriterOverride::Write_3 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextWriterOverride::Write_4 <br>public , args: ($buffer)<br>
	 * @uses TextWriterOverride::Write_5 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_6 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_7 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_8 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_9 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_10 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_11 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_12 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_13 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_14 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_15 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::Write_16 <br>public , args: ($format, $arg0)<br>
	 * @uses TextWriterOverride::Write_17 <br>public , args: ($format, $arg0, $arg1)<br>
	 * @uses TextWriterOverride::Write_18 <br>public , args: ($format, $arg0, $arg1, $arg2)<br>
	 * @uses TextWriterOverride::Write_19 <br>public , args: ($format, ...$arg)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	/**
	 * @uses TextWriterOverride::WriteLine_1 <br>public , args: ()<br>
	 * @uses TextWriterOverride::WriteLine_2 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_3 <br>public , args: ($buffer)<br>
	 * @uses TextWriterOverride::WriteLine_4 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextWriterOverride::WriteLine_5 <br>public , args: ($buffer)<br>
	 * @uses TextWriterOverride::WriteLine_6 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_7 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_8 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_9 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_10 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_11 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_12 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_13 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_14 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_15 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_16 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLine_17 <br>public , args: ($format, $arg0)<br>
	 * @uses TextWriterOverride::WriteLine_18 <br>public , args: ($format, $arg0, $arg1)<br>
	 * @uses TextWriterOverride::WriteLine_19 <br>public , args: ($format, $arg0, $arg1, $arg2)<br>
	 * @uses TextWriterOverride::WriteLine_20 <br>public , args: ($format, ...$arg)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteLine (\override ...$args){}
	/**
	 * @uses TextWriterOverride::WriteAsync_1 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteAsync_2 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteAsync_3 <br>public , args: ($value, $cancellationToken)<br>
	 * @uses TextWriterOverride::WriteAsync_4 <br>public , args: ($buffer)<br>
	 * @uses TextWriterOverride::WriteAsync_5 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextWriterOverride::WriteAsync_6 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAsync (\override ...$args){}
	/**
	 * @uses TextWriterOverride::WriteLineAsync_1 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLineAsync_2 <br>public , args: ($value)<br>
	 * @uses TextWriterOverride::WriteLineAsync_3 <br>public , args: ($value, $cancellationToken)<br>
	 * @uses TextWriterOverride::WriteLineAsync_4 <br>public , args: ($buffer)<br>
	 * @uses TextWriterOverride::WriteLineAsync_5 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextWriterOverride::WriteLineAsync_6 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @uses TextWriterOverride::WriteLineAsync_7 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function WriteLineAsync (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function FlushAsync(){}
	/**
	 * @param \System\IO\TextWriter $writer
	 * @return \System\IO\TextWriter
	 */
	public static function Synchronized($writer){}
}