<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileStatusOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $fileName [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]protected function GetAttributes_1 ($path, $fileName, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]protected function GetAttributes_2 ($handle, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $fileName [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\IO\FileAttributes
	 */
	#[MethodOverride]private function GetAttributes_3 ($handle, $path, $fileName, $continueOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\FileAttributes $attributes
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetAttributes_1 ($path, $attributes, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAttributes $attributes
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetAttributes_2 ($handle, $attributes, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\String|string $path
	 * @param \System\IO\FileAttributes $attributes
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetAttributes_3 ($handle, $path, $attributes, $asDirectory){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function GetCreationTime_1 ($path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function GetCreationTime_2 ($handle, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]private function GetCreationTime_3 ($handle, $path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function GetLastAccessTime_1 ($path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function GetLastAccessTime_2 ($handle, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]private function GetLastAccessTime_3 ($handle, $path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetLastAccessTime_1 ($path, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetLastAccessTime_2 ($handle, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\String|string $path
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetLastAccessTime_3 ($handle, $path, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function GetLastWriteTime_1 ($path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function GetLastWriteTime_2 ($handle, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]private function GetLastWriteTime_3 ($handle, $path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetLastWriteTime_1 ($path, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetLastWriteTime_2 ($handle, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\String|string $path
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetLastWriteTime_3 ($handle, $path, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]protected function GetUnixFileMode_1 ($path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]protected function GetUnixFileMode_2 ($handle, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\IO\UnixFileMode
	 */
	#[MethodOverride]private function GetUnixFileMode_3 ($handle, $path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetUnixFileMode_1 ($path, $mode){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetUnixFileMode_2 ($handle, $mode){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\String|string $path
	 * @param \System\IO\UnixFileMode $mode
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetUnixFileMode_3 ($handle, $path, $mode){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RefreshCaches_1 ($path){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RefreshCaches_2 ($handle, $path){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function EnsureCachesInitialized_1 ($path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function EnsureCachesInitialized_2 ($handle, $path, $continueOnError){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetCreationTime_1 ($path, $time, $asDirectory){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\DateTimeOffset $time
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetCreationTime_2 ($handle, $time, $asDirectory){}
}
final class FileStatus extends \System\ValueType
{
	use FileStatusOverride;

	private function IsModeReadOnlyCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateCaches(){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\Boolean|bool
	 */
	protected function IsReadOnly($path, $continueOnError){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $fileName [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected function IsFileSystemEntryHidden($path, $fileName){}
	/**
	 * @param \System\ReadOnlySpan_1 $fileName [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function IsNameHidden($fileName){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\Boolean|bool
	 */
	protected function IsDirectory($path, $continueOnError){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\Boolean|bool
	 */
	protected function IsSymbolicLink($path, $continueOnError){}
	/**
	 * @uses FileStatusOverride::GetAttributes_1 <br>protected , args: ($path, $fileName, $continueOnError)<br>
	 * @uses FileStatusOverride::GetAttributes_2 <br>protected , args: ($handle, $continueOnError)<br>
	 * @uses FileStatusOverride::GetAttributes_3 <br>private , args: ($handle, $path, $fileName, $continueOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileAttributes|mixed|\override
	 */
	#[MethodOverrideProtected]function GetAttributes (\override ...$args){}
	/**
	 * @uses FileStatusOverride::SetAttributes_1 <br>protected , args: ($path, $attributes, $asDirectory)<br>
	 * @uses FileStatusOverride::SetAttributes_2 <br>protected , args: ($handle, $attributes, $asDirectory)<br>
	 * @uses FileStatusOverride::SetAttributes_3 <br>private , args: ($handle, $path, $attributes, $asDirectory)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetAttributes (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $asDirectory
	 * @return \System\Boolean|bool
	 */
	protected function GetExists($path, $asDirectory){}
	/**
	 * @uses FileStatusOverride::GetCreationTime_1 <br>protected , args: ($path, $continueOnError)<br>
	 * @uses FileStatusOverride::GetCreationTime_2 <br>protected , args: ($handle, $continueOnError)<br>
	 * @uses FileStatusOverride::GetCreationTime_3 <br>private , args: ($handle, $path, $continueOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCreationTime (\override ...$args){}
	/**
	 * @uses FileStatusOverride::GetLastAccessTime_1 <br>protected , args: ($path, $continueOnError)<br>
	 * @uses FileStatusOverride::GetLastAccessTime_2 <br>protected , args: ($handle, $continueOnError)<br>
	 * @uses FileStatusOverride::GetLastAccessTime_3 <br>private , args: ($handle, $path, $continueOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverrideProtected]function GetLastAccessTime (\override ...$args){}
	/**
	 * @uses FileStatusOverride::SetLastAccessTime_1 <br>protected , args: ($path, $time, $asDirectory)<br>
	 * @uses FileStatusOverride::SetLastAccessTime_2 <br>protected , args: ($handle, $time, $asDirectory)<br>
	 * @uses FileStatusOverride::SetLastAccessTime_3 <br>private , args: ($handle, $path, $time, $asDirectory)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetLastAccessTime (\override ...$args){}
	/**
	 * @uses FileStatusOverride::GetLastWriteTime_1 <br>protected , args: ($path, $continueOnError)<br>
	 * @uses FileStatusOverride::GetLastWriteTime_2 <br>protected , args: ($handle, $continueOnError)<br>
	 * @uses FileStatusOverride::GetLastWriteTime_3 <br>private , args: ($handle, $path, $continueOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverrideProtected]function GetLastWriteTime (\override ...$args){}
	/**
	 * @uses FileStatusOverride::SetLastWriteTime_1 <br>protected , args: ($path, $time, $asDirectory)<br>
	 * @uses FileStatusOverride::SetLastWriteTime_2 <br>protected , args: ($handle, $time, $asDirectory)<br>
	 * @uses FileStatusOverride::SetLastWriteTime_3 <br>protected , args: ($handle, $path, $time, $asDirectory)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetLastWriteTime (\override ...$args){}
	private static function UnixTimeToDateTimeOffset($seconds, $nanoseconds){}
	private function SetAccessOrWriteTimeCore($handle, $path, $time, $isAccessTime, $checkCreationTime, $asDirectory){}
	/**
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Boolean|bool $continueOnError
	 * @return \System\Int64|int
	 */
	protected function GetLength($path, $continueOnError){}
	/**
	 * @uses FileStatusOverride::GetUnixFileMode_1 <br>protected , args: ($path, $continueOnError)<br>
	 * @uses FileStatusOverride::GetUnixFileMode_2 <br>protected , args: ($handle, $continueOnError)<br>
	 * @uses FileStatusOverride::GetUnixFileMode_3 <br>private , args: ($handle, $path, $continueOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\UnixFileMode|mixed|\override
	 */
	#[MethodOverrideProtected]function GetUnixFileMode (\override ...$args){}
	/**
	 * @uses FileStatusOverride::SetUnixFileMode_1 <br>protected , args: ($path, $mode)<br>
	 * @uses FileStatusOverride::SetUnixFileMode_2 <br>protected , args: ($handle, $mode)<br>
	 * @uses FileStatusOverride::SetUnixFileMode_3 <br>private , args: ($handle, $path, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetUnixFileMode (\override ...$args){}
	/**
	 * @uses FileStatusOverride::RefreshCaches_1 <br>protected , args: ($path)<br>
	 * @uses FileStatusOverride::RefreshCaches_2 <br>protected , args: ($handle, $path)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function RefreshCaches (\override ...$args){}
	/**
	 * @uses FileStatusOverride::EnsureCachesInitialized_1 <br>protected , args: ($path, $continueOnError)<br>
	 * @uses FileStatusOverride::EnsureCachesInitialized_2 <br>protected , args: ($handle, $path, $continueOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function EnsureCachesInitialized (\override ...$args){}
	private function ThrowOnCacheInitializationError($path){}
	private static function UnixTimeSecondsToNanoseconds($time, $seconds){}
	private function ThrowNotFound($path){}
	/**
	 * @uses FileStatusOverride::SetCreationTime_1 <br>protected , args: ($path, $time, $asDirectory)<br>
	 * @uses FileStatusOverride::SetCreationTime_2 <br>protected , args: ($handle, $time, $asDirectory)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetCreationTime (\override ...$args){}
	private function SetAccessOrWriteTime($handle, $path, $time, $isAccessTime, $asDirectory){}
	private static function SetCreationTimeCore($handle, $path, $seconds, $nanoseconds){}
}