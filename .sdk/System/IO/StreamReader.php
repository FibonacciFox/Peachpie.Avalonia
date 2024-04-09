<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StreamReaderOverride {
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
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Int32|int $bufferSize
	 * @return \System\IO\Stream
	 */
	#[MethodOverride]private static function ValidateArgsAndOpenPath_2 ($path, $encoding, $bufferSize){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function ReadBuffer_1 (){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $userBuffer [generic: System\Char]
	 * @param \System\Boolean& &$readToUserBuffer
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function ReadBuffer_2 ($userBuffer, &$readToUserBuffer){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_1 ($stream){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 */
	#[MethodOverride]public function __construct_2 ($stream, $detectEncodingFromByteOrderMarks){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 */
	#[MethodOverride]public function __construct_3 ($stream, $encoding){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 */
	#[MethodOverride]public function __construct_4 ($stream, $encoding, $detectEncodingFromByteOrderMarks){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_5 ($stream, $encoding, $detectEncodingFromByteOrderMarks, $bufferSize){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $leaveOpen
	 */
	#[MethodOverride]public function __construct_6 ($stream, $encoding, $detectEncodingFromByteOrderMarks, $bufferSize, $leaveOpen){}
	/**
	 * @param \System\String|string $path
	 */
	#[MethodOverride]public function __construct_7 ($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 */
	#[MethodOverride]public function __construct_8 ($path, $detectEncodingFromByteOrderMarks){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 */
	#[MethodOverride]public function __construct_9 ($path, $encoding){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 */
	#[MethodOverride]public function __construct_10 ($path, $encoding, $detectEncodingFromByteOrderMarks){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_11 ($path, $encoding, $detectEncodingFromByteOrderMarks, $bufferSize){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileStreamOptions $options
	 */
	#[MethodOverride]public function __construct_12 ($path, $options){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Boolean|bool $detectEncodingFromByteOrderMarks
	 * @param \System\IO\FileStreamOptions $options
	 */
	#[MethodOverride]public function __construct_13 ($path, $encoding, $detectEncodingFromByteOrderMarks, $options){}
}
class StreamReader extends \System\IO\TextReader implements
	\System\IDisposable
{
	use StreamReaderOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\StreamReader
	 */
	public static $Null;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $CurrentEncoding;
	/**
	 * @property
	 * @var \System\IO\Stream
	 * @since readonly
	 */
	public $BaseStream;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $EndOfStream;
	private function CheckAsyncTaskInProgress(){}
	private static function ThrowAsyncIOInProgress(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StreamReaderOverride::ValidateArgsAndOpenPath_1 <br>private , args: ($path, $encoding, $options)<br>
	 * @uses StreamReaderOverride::ValidateArgsAndOpenPath_2 <br>private , args: ($path, $encoding, $bufferSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\Stream|mixed|\override
	 */
	#[MethodOverridePrivate]function ValidateArgsAndOpenPath (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function DiscardBufferedData(){}
	private function ReadSpan($buffer){}
	private function CompressBuffer($n){}
	private function DetectEncoding(){}
	private function IsPreamble(){}
	/**
	 * @uses StreamReaderOverride::ReadBuffer_1 <br>protected , args: ()<br>
	 * @uses StreamReaderOverride::ReadBuffer_2 <br>private , args: ($userBuffer, &$readToUserBuffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function ReadBuffer (\override ...$args){}
	private function ReadLineAsyncInternal($cancellationToken){}
	private function ReadToEndAsyncInternal($cancellationToken){}
	private function ReadBufferAsync($cancellationToken){}
	private function ThrowIfDisposed(){}
	/**
	 * @uses StreamReaderOverride::__construct_1 <br>public , args: ($stream)<br>
	 * @uses StreamReaderOverride::__construct_2 <br>public , args: ($stream, $detectEncodingFromByteOrderMarks)<br>
	 * @uses StreamReaderOverride::__construct_3 <br>public , args: ($stream, $encoding)<br>
	 * @uses StreamReaderOverride::__construct_4 <br>public , args: ($stream, $encoding, $detectEncodingFromByteOrderMarks)<br>
	 * @uses StreamReaderOverride::__construct_5 <br>public , args: ($stream, $encoding, $detectEncodingFromByteOrderMarks, $bufferSize)<br>
	 * @uses StreamReaderOverride::__construct_6 <br>public , args: ($stream, $encoding, $detectEncodingFromByteOrderMarks, $bufferSize, $leaveOpen)<br>
	 * @uses StreamReaderOverride::__construct_7 <br>public , args: ($path)<br>
	 * @uses StreamReaderOverride::__construct_8 <br>public , args: ($path, $detectEncodingFromByteOrderMarks)<br>
	 * @uses StreamReaderOverride::__construct_9 <br>public , args: ($path, $encoding)<br>
	 * @uses StreamReaderOverride::__construct_10 <br>public , args: ($path, $encoding, $detectEncodingFromByteOrderMarks)<br>
	 * @uses StreamReaderOverride::__construct_11 <br>public , args: ($path, $encoding, $detectEncodingFromByteOrderMarks, $bufferSize)<br>
	 * @uses StreamReaderOverride::__construct_12 <br>public , args: ($path, $options)<br>
	 * @uses StreamReaderOverride::__construct_13 <br>public , args: ($path, $encoding, $detectEncodingFromByteOrderMarks, $options)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}