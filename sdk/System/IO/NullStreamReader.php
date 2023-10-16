<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NullStreamReaderMethodsOverride
{
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
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_1($buffer, $index, $count){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ReadBlock_1($buffer, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ReadBlock_2($buffer){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadBlockAsync_1($buffer, $index, $count){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadBlockAsync_2($buffer, $cancellationToken){}
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
class NullStreamReader extends \System\IO\StreamReader implements 
	\System\IDisposable
{
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
	 * @uses NullStreamReaderMethodsOverride::Dispose_1 ($disposing)
	 * @uses NullStreamReaderMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses NullStreamReaderMethodsOverride::Read_1 ()
	 * @uses NullStreamReaderMethodsOverride::Read_2 ($buffer, $index, $count)
	 * @uses NullStreamReaderMethodsOverride::Read_3 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses NullStreamReaderMethodsOverride::ReadAsync_1 ($buffer, $index, $count)
	 * @uses NullStreamReaderMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses NullStreamReaderMethodsOverride::ReadBlock_1 ($buffer, $index, $count)
	 * @uses NullStreamReaderMethodsOverride::ReadBlock_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlock(mixed ...$args){}
	/**
	 * @uses NullStreamReaderMethodsOverride::ReadBlockAsync_1 ($buffer, $index, $count)
	 * @uses NullStreamReaderMethodsOverride::ReadBlockAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlockAsync(mixed ...$args){}
	/**
	 * @uses NullStreamReaderMethodsOverride::ReadLineAsync_1 ()
	 * @uses NullStreamReaderMethodsOverride::ReadLineAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadLineAsync(mixed ...$args){}
	/**
	 * @uses NullStreamReaderMethodsOverride::ReadToEndAsync_1 ()
	 * @uses NullStreamReaderMethodsOverride::ReadToEndAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadToEndAsync(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function ReadBuffer(){}
	/**
	 * @uses NullStreamReaderMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses NullStreamReaderMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
