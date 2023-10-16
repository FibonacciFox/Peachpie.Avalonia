<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextReaderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
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
class TextReader extends \System\MarshalByRefObject implements 
	\System\IDisposable
{
	/**
	 * @var \System\IO\TextReader
	 * @field
	 */
	public readonly $Null;
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses TextReaderMethodsOverride::Dispose_1 ()
	 * @uses TextReaderMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function Peek(){}
	/**
	 * @uses TextReaderMethodsOverride::Read_1 ()
	 * @uses TextReaderMethodsOverride::Read_2 ($buffer, $index, $count)
	 * @uses TextReaderMethodsOverride::Read_3 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function ReadToEnd(){}
	/**
	 * @uses TextReaderMethodsOverride::ReadBlock_1 ($buffer, $index, $count)
	 * @uses TextReaderMethodsOverride::ReadBlock_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlock(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function ReadLine(){}
	/**
	 * @uses TextReaderMethodsOverride::ReadLineAsync_1 ()
	 * @uses TextReaderMethodsOverride::ReadLineAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadLineAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadLineCoreAsync($cancellationToken){}
	/**
	 * @uses TextReaderMethodsOverride::ReadToEndAsync_1 ()
	 * @uses TextReaderMethodsOverride::ReadToEndAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadToEndAsync(mixed ...$args){}
	/**
	 * @uses TextReaderMethodsOverride::ReadAsync_1 ($buffer, $index, $count)
	 * @uses TextReaderMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function ReadAsyncInternal($buffer, $cancellationToken){}
	/**
	 * @uses TextReaderMethodsOverride::ReadBlockAsync_1 ($buffer, $index, $count)
	 * @uses TextReaderMethodsOverride::ReadBlockAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlockAsync(mixed ...$args){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	protected  function ReadBlockAsyncInternal($buffer, $cancellationToken){}
	/**
	 * @param \System\IO\TextReader $reader
	 * @return \System\IO\TextReader
	 */
	public static function Synchronized($reader){}
	/**
	 * @uses TextReaderMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses TextReaderMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
