<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StreamWriterOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\IO\FileStreamOptions $options
	 * @return \System\IO\Stream
	 */
	#[MethodOverride]private static function ValidateArgsAndOpenPath_1 ($path, $encoding, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $append
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Int32|int $bufferSize
	 * @return \System\IO\Stream
	 */
	#[MethodOverride]private static function ValidateArgsAndOpenPath_2 ($path, $append, $encoding, $bufferSize){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $flushStream
	 * @param \System\Boolean|bool $flushEncoder
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Flush_1 ($flushStream, $flushEncoder){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Boolean|bool $appendNewLine
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function WriteAsyncInternal_1 ($value, $appendNewLine){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $source [generic: System\Char]
	 * @param \System\Boolean|bool $appendNewLine
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function WriteAsyncInternal_2 ($source, $appendNewLine, $cancellationToken){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_1 ($stream){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 */
	#[MethodOverride]public function __construct_2 ($stream, $encoding){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_3 ($stream, $encoding, $bufferSize){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $leaveOpen
	 */
	#[MethodOverride]public function __construct_4 ($stream, $encoding, $bufferSize, $leaveOpen){}
	/**
	 * @param \System\String|string $path
	 */
	#[MethodOverride]public function __construct_5 ($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $append
	 */
	#[MethodOverride]public function __construct_6 ($path, $append){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $append
	 * @param \System\Text\Encoding $encoding
	 */
	#[MethodOverride]public function __construct_7 ($path, $append, $encoding){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $append
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_8 ($path, $append, $encoding, $bufferSize){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileStreamOptions $options
	 */
	#[MethodOverride]public function __construct_9 ($path, $options){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\IO\FileStreamOptions $options
	 */
	#[MethodOverride]public function __construct_10 ($path, $encoding, $options){}
}
class StreamWriter extends \System\IO\TextWriter implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use StreamWriterOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\StreamWriter
	 */
	public static $Null;
	/**
	 * @field
	 * @var \System\Char[]
	 */
	protected $CoreNewLine;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AutoFlush;
	/**
	 * @property
	 * @var \System\IO\Stream
	 * @since readonly
	 */
	public $BaseStream;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Encoding;
	/**
	 * @property
	 * @var \System\IFormatProvider
	 * @since readonly
	 */
	public $FormatProvider;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NewLine;
	private function CheckAsyncTaskInProgress(){}
	private static function ThrowAsyncIOInProgress(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StreamWriterOverride::ValidateArgsAndOpenPath_1 <br>private , args: ($path, $encoding, $options)<br>
	 * @uses StreamWriterOverride::ValidateArgsAndOpenPath_2 <br>private , args: ($path, $append, $encoding, $bufferSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\Stream|mixed|\override
	 */
	#[MethodOverridePrivate]function ValidateArgsAndOpenPath (\override ...$args){}
	private function CloseStreamFromDispose($disposing){}
	private function DisposeAsyncCore(){}
	private function WriteSpan($buffer, $appendNewLine){}
	private function WriteFormatHelper($format, $args, $appendNewLine){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StreamWriterOverride::WriteAsyncInternal_1 <br>private , args: ($value, $appendNewLine)<br>
	 * @uses StreamWriterOverride::WriteAsyncInternal_2 <br>private , args: ($source, $appendNewLine, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePrivate]function WriteAsyncInternal (\override ...$args){}
	private function FlushAsyncInternal($flushStream, $flushEncoder, $cancellationToken){}
	private function ThrowIfDisposed(){}
	/**
	 * @uses StreamWriterOverride::__construct_1 <br>public , args: ($stream)<br>
	 * @uses StreamWriterOverride::__construct_2 <br>public , args: ($stream, $encoding)<br>
	 * @uses StreamWriterOverride::__construct_3 <br>public , args: ($stream, $encoding, $bufferSize)<br>
	 * @uses StreamWriterOverride::__construct_4 <br>public , args: ($stream, $encoding, $bufferSize, $leaveOpen)<br>
	 * @uses StreamWriterOverride::__construct_5 <br>public , args: ($path)<br>
	 * @uses StreamWriterOverride::__construct_6 <br>public , args: ($path, $append)<br>
	 * @uses StreamWriterOverride::__construct_7 <br>public , args: ($path, $append, $encoding)<br>
	 * @uses StreamWriterOverride::__construct_8 <br>public , args: ($path, $append, $encoding, $bufferSize)<br>
	 * @uses StreamWriterOverride::__construct_9 <br>public , args: ($path, $options)<br>
	 * @uses StreamWriterOverride::__construct_10 <br>public , args: ($path, $encoding, $options)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}