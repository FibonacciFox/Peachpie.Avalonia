<?php
namespace System\IO\Strategies;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileStreamHelpersMethodsOverride
{
	/**
	 * @return \System\IO\Strategies\FileStreamStrategy
	 */
	#[MethodOverride] protected static function ChooseStrategy_1($fileStream, $handle, $access, $bufferSize, $isAsync){}
	/**
	 * @return \System\IO\Strategies\FileStreamStrategy
	 */
	#[MethodOverride] protected static function ChooseStrategy_2($fileStream, $path, $mode, $access, $share, $bufferSize, $options, $preallocationSize, $unixCreateMode){}
	/**
	 * @return \System\IO\Strategies\OSFileStreamStrategy
	 */
	#[MethodOverride] private static function ChooseStrategyCore_1($handle, $access, $isAsync){}
	/**
	 * @return \System\IO\Strategies\FileStreamStrategy
	 */
	#[MethodOverride] private static function ChooseStrategyCore_2($path, $mode, $access, $share, $options, $preallocationSize, $unixCreateMode){}
}
/**
 */
class FileStreamHelpers extends \System\Object
{
	/**
	 * @uses FileStreamHelpersMethodsOverride::ChooseStrategy_1 ($fileStream, $handle, $access, $bufferSize, $isAsync)
	 * @uses FileStreamHelpersMethodsOverride::ChooseStrategy_2 ($fileStream, $path, $mode, $access, $share, $bufferSize, $options, $preallocationSize, $unixCreateMode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ChooseStrategy(mixed ...$args){}
	/**
	 * @param \System\IO\Strategies\FileStreamStrategy $strategy
	 * @param \System\Int32|int $bufferSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnableBufferingIfNeeded($strategy, $bufferSize){}
	/**
	 * @param \System\IO\FileStream $fileStream
	 * @param \System\IO\Strategies\FileStreamStrategy $strategy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WrapIfDerivedType($fileStream, $strategy){}
	/**
	 * @param \System\Exception $e
	 * @return \System\Boolean
	 */
	protected static function IsIoRelatedException($e){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\Int32|int $bufferSize
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64|int $preallocationSize
	 * @return \System\Void|void
	 */
	protected static function ValidateArguments($path, $mode, $access, $share, $bufferSize, $options, $preallocationSize){}
	/**
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @return \System\Void|void
	 */
	protected static function ValidateArgumentsForPreallocation($mode, $access){}
	/**
	 * @param \System\IO\FileAccess $access
	 * @return \System\Void|void
	 */
	protected static function SerializationGuard($access){}
	/**
	 * @uses FileStreamHelpersMethodsOverride::ChooseStrategyCore_1 ($handle, $access, $isAsync)
	 * @uses FileStreamHelpersMethodsOverride::ChooseStrategyCore_2 ($path, $mode, $access, $share, $options, $preallocationSize, $unixCreateMode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ChooseStrategyCore(mixed ...$args){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @return \System\Void|void
	 */
	protected static function FlushToDisk($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $offset
	 * @param \System\IO\SeekOrigin $origin
	 * @param \System\Boolean $closeInvalidHandle
	 * @return \System\Int64|int
	 */
	protected static function Seek($handle, $offset, $origin, $closeInvalidHandle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidArgument($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @return \System\Int32|int
	 */
	protected static function GetLastWin32ErrorAndDisposeHandleIfInvalid($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean $canWrite
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	protected static function Lock($handle, $canWrite, $position, $length){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	protected static function Unlock($handle, $position, $length){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Span_1 $bytes
	 * @param \System\Threading\NativeOverlapped* $overlapped
	 * @param \System\Int32& $errorCode
	 * @return \System\Int32|int
	 */
	protected static function ReadFileNative($handle, $bytes, $overlapped, $errorCode){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean $canSeek
	 * @param \System\Int64|int $filePosition
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function AsyncModeCopyToAsync($handle, $canSeek, $filePosition, $destination, $bufferSize, $cancellationToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
