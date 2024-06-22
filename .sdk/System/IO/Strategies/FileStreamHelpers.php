<?php
namespace System\IO\Strategies;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileStreamHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\IO\FileStream $fileStream
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $isAsync
	 * @return \System\IO\Strategies\FileStreamStrategy
	 */
	#[MethodOverride]protected static function ChooseStrategy_1 ($fileStream, $handle, $access, $bufferSize, $isAsync){}
	/**
	 * @deprecated
	 * @param \System\IO\FileStream $fileStream
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\Int32|int $bufferSize
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64|int $preallocationSize
	 * @param \System\Nullable_1 $unixCreateMode [generic: System\IO\UnixFileMode]
	 * @return \System\IO\Strategies\FileStreamStrategy
	 */
	#[MethodOverride]protected static function ChooseStrategy_2 ($fileStream, $path, $mode, $access, $share, $bufferSize, $options, $preallocationSize, $unixCreateMode){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Boolean|bool $isAsync
	 * @return \System\IO\Strategies\OSFileStreamStrategy
	 */
	#[MethodOverride]private static function ChooseStrategyCore_1 ($handle, $access, $isAsync){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64|int $preallocationSize
	 * @param \System\Nullable_1 $unixCreateMode [generic: System\IO\UnixFileMode]
	 * @return \System\IO\Strategies\FileStreamStrategy
	 */
	#[MethodOverride]private static function ChooseStrategyCore_2 ($path, $mode, $access, $share, $options, $preallocationSize, $unixCreateMode){}
}
class FileStreamHelpers extends \System\Object
{
	use FileStreamHelpersOverride;


	/**
	 * @uses FileStreamHelpersOverride::ChooseStrategy_1 <br>protected , args: ($fileStream, $handle, $access, $bufferSize, $isAsync)<br>
	 * @uses FileStreamHelpersOverride::ChooseStrategy_2 <br>protected , args: ($fileStream, $path, $mode, $access, $share, $bufferSize, $options, $preallocationSize, $unixCreateMode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\Strategies\FileStreamStrategy|mixed|\override
	 */
	#[MethodOverrideProtected]function ChooseStrategy (\override ...$args){}
	private static function EnableBufferingIfNeeded($strategy, $bufferSize){}
	private static function WrapIfDerivedType($fileStream, $strategy){}
	/**
	 * @param \System\Exception $e
	 * @return \System\Boolean|bool
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
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FileStreamHelpersOverride::ChooseStrategyCore_1 <br>private , args: ($handle, $access, $isAsync)<br>
	 * @uses FileStreamHelpersOverride::ChooseStrategyCore_2 <br>private , args: ($path, $mode, $access, $share, $options, $preallocationSize, $unixCreateMode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\Strategies\OSFileStreamStrategy|\System\IO\Strategies\FileStreamStrategy|mixed|\override
	 */
	#[MethodOverridePrivate]function ChooseStrategyCore (\override ...$args){}
	/**
	 * @param \System\Int64|int $result
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $ignoreNotSupported
	 * @return \System\Int64|int
	 */
	protected static function CheckFileCall($result, $path, $ignoreNotSupported){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Int64|int $offset
	 * @param \System\IO\SeekOrigin $origin
	 * @return \System\Int64|int
	 */
	protected static function Seek($handle, $offset, $origin){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidArgument($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @return \System\Void|void
	 */
	protected static function FlushToDisk($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean|bool $canWrite
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
}