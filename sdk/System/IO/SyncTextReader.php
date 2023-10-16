<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SyncTextReaderMethodsOverride
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
	#[MethodOverride] public  function ReadBlockAsync_1($buffer, $index, $count){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadBlockAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_1($buffer, $index, $count){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadAsync_2($buffer, $cancellationToken){}
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
class SyncTextReader extends \System\IO\TextReader implements 
	\System\IDisposable
{
	/**
	 * @var \System\IO\TextReader
	 * @field
	 */
	protected readonly $_in;
	/**
	 * @param \System\IO\TextReader $reader
	 * @return \System\IO\SyncTextReader
	 */
	public static function GetSynchronizedTextReader($reader){}
	/**
	 * @uses SyncTextReaderMethodsOverride::Dispose_1 ($disposing)
	 * @uses SyncTextReaderMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::Read_1 ()
	 * @uses SyncTextReaderMethodsOverride::Read_2 ($buffer, $index, $count)
	 * @uses SyncTextReaderMethodsOverride::Read_3 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::ReadBlock_1 ($buffer, $index, $count)
	 * @uses SyncTextReaderMethodsOverride::ReadBlock_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlock(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::ReadLineAsync_1 ()
	 * @uses SyncTextReaderMethodsOverride::ReadLineAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadLineAsync(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::ReadToEndAsync_1 ()
	 * @uses SyncTextReaderMethodsOverride::ReadToEndAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadToEndAsync(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::ReadBlockAsync_1 ($buffer, $index, $count)
	 * @uses SyncTextReaderMethodsOverride::ReadBlockAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlockAsync(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::ReadAsync_1 ($buffer, $index, $count)
	 * @uses SyncTextReaderMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses SyncTextReaderMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses SyncTextReaderMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
