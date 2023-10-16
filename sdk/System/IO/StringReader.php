<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringReaderMethodsOverride
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
	#[MethodOverride] public  function ReadBlock_1($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function ReadBlock_2($buffer, $index, $count){}
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
class StringReader extends \System\IO\TextReader implements 
	\System\IDisposable
{
	/**
	 * @uses StringReaderMethodsOverride::Dispose_1 ($disposing)
	 * @uses StringReaderMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses StringReaderMethodsOverride::Read_1 ()
	 * @uses StringReaderMethodsOverride::Read_2 ($buffer, $index, $count)
	 * @uses StringReaderMethodsOverride::Read_3 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses StringReaderMethodsOverride::ReadBlock_1 ($buffer)
	 * @uses StringReaderMethodsOverride::ReadBlock_2 ($buffer, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlock(mixed ...$args){}
	/**
	 * @uses StringReaderMethodsOverride::ReadLineAsync_1 ()
	 * @uses StringReaderMethodsOverride::ReadLineAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadLineAsync(mixed ...$args){}
	/**
	 * @uses StringReaderMethodsOverride::ReadToEndAsync_1 ()
	 * @uses StringReaderMethodsOverride::ReadToEndAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadToEndAsync(mixed ...$args){}
	/**
	 * @uses StringReaderMethodsOverride::ReadBlockAsync_1 ($buffer, $index, $count)
	 * @uses StringReaderMethodsOverride::ReadBlockAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadBlockAsync(mixed ...$args){}
	/**
	 * @uses StringReaderMethodsOverride::ReadAsync_1 ($buffer, $index, $count)
	 * @uses StringReaderMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowObjectDisposedException_ReaderClosed(){}
	/**
	 * @uses StringReaderMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses StringReaderMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
