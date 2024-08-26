<?php

/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Kernel32Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $errorCode
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetMessage_1 ($errorCode){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $errorCode
	 * @param \System\IntPtr $moduleHandle
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetMessage_2 ($errorCode, $moduleHandle){}
}
class Kernel32 extends \System\Object
{
	use Kernel32Override;

	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Boolean|bool
	 */
	protected static function CloseHandle($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $handle
	 * @return \System\Boolean|bool
	 */
	protected static function SetEvent($handle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $handle
	 * @return \System\Boolean|bool
	 */
	protected static function ResetEvent($handle){}
	/**
	 * @param \System\IntPtr $lpSecurityAttributes
	 * @param \System\String|string $name
	 * @param \System\UInt32 $flags
	 * @param \System\UInt32 $desiredAccess
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	protected static function CreateEventEx($lpSecurityAttributes, $name, $flags, $desiredAccess){}
	/**
	 * @param \System\String|string $lpName
	 * @param \System\Char& $lpBuffer
	 * @param \System\UInt32 $nSize
	 * @return \System\UInt32
	 */
	protected static function GetEnvironmentVariable($lpName, $lpBuffer, $nSize){}
	/**
	 * @return \System\Char*
	 */
	protected static function GetEnvironmentStringsW(){}
	/**
	 * @param \System\Char* $lpszEnvironmentBlock
	 * @return \Interop+BOOL
	 */
	protected static function FreeEnvironmentStringsW($lpszEnvironmentBlock){}
	private static function FormatMessage($dwFlags, $lpSource, $dwMessageId, $dwLanguageId, $lpBuffer, $nSize, $arguments){}
	/**
	 * @uses Kernel32Override::GetMessage_1 <br>protected , args: ($errorCode)<br>
	 * @uses Kernel32Override::GetMessage_2 <br>protected , args: ($errorCode, $moduleHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMessage (\override ...$args){}
	private static function GetAndTrimString($buffer){}
	/**
	 * @param \System\UInt32 $desiredAccess
	 * @param \System\Boolean|bool $inheritHandle
	 * @param \System\String|string $name
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	protected static function OpenMutex($desiredAccess, $inheritHandle, $name){}
	/**
	 * @param \System\IntPtr $lpMutexAttributes
	 * @param \System\String|string $name
	 * @param \System\UInt32 $flags
	 * @param \System\UInt32 $desiredAccess
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	protected static function CreateMutexEx($lpMutexAttributes, $name, $flags, $desiredAccess){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $handle
	 * @return \System\Boolean|bool
	 */
	protected static function ReleaseMutex($handle){}
	/**
	 * @param \System\IntPtr $lpSecurityAttributes
	 * @param \System\Int32|int $initialCount
	 * @param \System\Int32|int $maximumCount
	 * @param \System\String|string $name
	 * @param \System\UInt32 $flags
	 * @param \System\UInt32 $desiredAccess
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	protected static function CreateSemaphoreEx($lpSecurityAttributes, $initialCount, $maximumCount, $name, $flags, $desiredAccess){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $handle
	 * @param \System\Int32|int $releaseCount
	 * @param \System\Int32& &$previousCount
	 * @return \System\Boolean|bool
	 */
	protected static function ReleaseSemaphore($handle, $releaseCount, &$previousCount){}
	/**
	 * @param \System\String|string $lpName
	 * @param \System\String|string $lpValue
	 * @return \System\Boolean|bool
	 */
	protected static function SetEnvironmentVariable($lpName, $lpValue){}
}