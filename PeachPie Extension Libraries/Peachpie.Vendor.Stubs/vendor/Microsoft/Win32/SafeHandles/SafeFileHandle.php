<?php
namespace Microsoft\Win32\SafeHandles;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SafeFileHandleOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \Interop+Sys+OpenFlags $flags
	 * @param \System\Int32|int $mode
	 * @param \System\Func_4 $createOpenException [generic: Interop+ErrorInfo,Interop+Sys+OpenFlags,System\String,System\Exception]
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	#[MethodOverride]private static function Open_1 ($path, $flags, $mode, $createOpenException){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64|int $preallocationSize
	 * @param \System\Nullable_1 $unixCreateMode [generic: System\IO\UnixFileMode]
	 * @param \System\Func_4 $createOpenException [generic: Interop+ErrorInfo,Interop+Sys+OpenFlags,System\String,System\Exception]
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	#[MethodOverride]protected static function Open_2 ($fullPath, $mode, $access, $share, $options, $preallocationSize, $unixCreateMode, $createOpenException){}
	/**
	 * @deprecated
	 * @param \System\String|string $fullPath
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64|int $preallocationSize
	 * @param \System\IO\UnixFileMode $openPermissions
	 * @param \System\Int64& &$fileLength
	 * @param \System\IO\UnixFileMode& &$filePermissions
	 * @param \System\Func_4 $createOpenException [generic: Interop+ErrorInfo,Interop+Sys+OpenFlags,System\String,System\Exception]
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	#[MethodOverride]private static function Open_3 ($fullPath, $mode, $access, $share, $options, $preallocationSize, $openPermissions, &$fileLength, &$filePermissions, $createOpenException){}
	/**
	 * @param \System\IntPtr $preexistingHandle
	 * @param \System\Boolean|bool $ownsHandle
	 */
	#[MethodOverride]public function __construct_1 ($preexistingHandle, $ownsHandle){}
	/**
	 */
	#[MethodOverride]public function __construct_2 (){}
}
final class SafeFileHandle extends \Microsoft\Win32\SafeHandles\SafeHandleZeroOrMinusOneIsInvalid implements
	\System\IDisposable
{
	use SafeFileHandleOverride;
	/**
	 * @field
	 * @var \System\Nullable_1[Interop+ErrorInfo]
	 */
	protected static $t_lastCloseErrorInfo;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $handle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsAsync;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInvalid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClosed;
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle+ThreadPoolValueTaskSource
	 */
	protected function GetThreadPoolValueTaskSource(){}
	/**
	 * @return \System\Void|void
	 */
	protected function EnsureThreadPoolBindingInitialized(){}
	/**
	 * @param \System\Int64& &$cachedLength
	 * @return \System\Boolean|bool
	 */
	protected function TryGetCachedLength(&$cachedLength){}
	/**
	 * @uses SafeFileHandleOverride::Open_1 <br>private , args: ($path, $flags, $mode, $createOpenException)<br>
	 * @uses SafeFileHandleOverride::Open_2 <br>protected , args: ($fullPath, $mode, $access, $share, $options, $preallocationSize, $unixCreateMode, $createOpenException)<br>
	 * @uses SafeFileHandleOverride::Open_3 <br>private , args: ($fullPath, $mode, $access, $share, $options, $preallocationSize, $openPermissions, &$fileLength, &$filePermissions, $createOpenException)<br>
	 * @var mixed|\override ...$args
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle|mixed|\override
	 */
	#[MethodOverrideProtected]function Open (\override ...$args){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\IO\FileOptions $options
	 * @param \System\Int64& &$fileLength
	 * @param \System\IO\UnixFileMode& &$filePermissions
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	protected static function OpenReadOnly($fullPath, $options, &$fileLength, &$filePermissions){}
	private static function PreOpenConfigurationFromOptions($mode, $access, $share, $options){}
	private function Init($path, $mode, $access, $share, $options, $preallocationSize, &$fileLength, &$filePermissions){}
	private function CanLockTheFile($lockOperation, $access){}
	private function FStatCheckIO($path, $status, $statusHasValue){}
	private function GetCanSeek(){}
	/**
	 * @return \System\Int64|int
	 */
	protected function GetFileLength(){}
	/**
	 * @uses SafeFileHandleOverride::__construct_1 <br>public , args: ($preexistingHandle, $ownsHandle)<br>
	 * @uses SafeFileHandleOverride::__construct_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}