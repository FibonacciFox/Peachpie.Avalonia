<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StreamReaderMethodsOverride
{
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] private static function ValidateArgsAndOpenPath_1($path, $encoding, $options){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] private static function ValidateArgsAndOpenPath_2($path, $encoding, $bufferSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_2($buffer, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_3($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ReadBlock_1($buffer, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ReadBlock_2($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function ReadBuffer_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function ReadBuffer_2($userBuffer, $readToUserBuffer){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadLineAsync_1(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadLineAsync_2($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadToEndAsync_1(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadToEndAsync_2($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_1($buffer, $index, $count){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadBlockAsync_1($buffer, $index, $count){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadBlockAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class StreamReader extends \System\IO\TextReader implements 
	\System\IDisposable
{
	/**
	 * @var \System\IO\StreamReader
	 * @field
	 */
	public readonly $Null;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $CurrentEncoding;
	/**
	 * @var \System\IO\Stream
	 * @property
	 */
	public readonly $BaseStream;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $EndOfStream;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckAsyncTaskInProgress(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowAsyncIOInProgress(){}
	/**
	 * @uses StreamReaderMethodsOverride::ValidateArgsAndOpenPath_1 ($path, $encoding, $options)
	 * @uses StreamReaderMethodsOverride::ValidateArgsAndOpenPath_2 ($path, $encoding, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ValidateArgsAndOpenPath(mixed ...$args){}
	/**
	 * @uses StreamReaderMethodsOverride::Dispose_1 ($disposing)
	 * @uses StreamReaderMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Text\Encoding
	 */
	public  function get_CurrentEncoding(){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_BaseStream(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DiscardBufferedData(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_EndOfStream(){}
	/**
	 * @uses StreamReaderMethodsOverride::Read_1 ()
	 * @uses StreamReaderMethodsOverride::Read_2 ($buffer, $index, $count)
	 * @uses StreamReaderMethodsOverride::Read_3 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @param \System\Span_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadSpan($buffer){}
	/**
	 * @uses StreamReaderMethodsOverride::ReadBlock_1 ($buffer, $index, $count)
	 * @uses StreamReaderMethodsOverride::ReadBlock_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlock(mixed ...$args){}
	/**
	 * @param \System\Int32|int $n
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompressBuffer($n){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DetectEncoding(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsPreamble(){}
	/**
	 * @uses StreamReaderMethodsOverride::ReadBuffer_1 ()
	 * @uses StreamReaderMethodsOverride::ReadBuffer_2 ($userBuffer, $readToUserBuffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBuffer(mixed ...$args){}
	/**
	 * @uses StreamReaderMethodsOverride::ReadLineAsync_1 ()
	 * @uses StreamReaderMethodsOverride::ReadLineAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadLineAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadLineAsyncInternal($cancellationToken){}
	/**
	 * @uses StreamReaderMethodsOverride::ReadToEndAsync_1 ()
	 * @uses StreamReaderMethodsOverride::ReadToEndAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadToEndAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadToEndAsyncInternal($cancellationToken){}
	/**
	 * @uses StreamReaderMethodsOverride::ReadAsync_1 ($buffer, $index, $count)
	 * @uses StreamReaderMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses StreamReaderMethodsOverride::ReadBlockAsync_1 ($buffer, $index, $count)
	 * @uses StreamReaderMethodsOverride::ReadBlockAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlockAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadBufferAsync($cancellationToken){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfDisposed(){}
	/**
	 * @uses StreamReaderMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses StreamReaderMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
