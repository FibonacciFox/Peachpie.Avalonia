<?php
namespace Avalonia\FreeDesktop;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LinuxMountedVolumeInfoListenerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class LinuxMountedVolumeInfoListener extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \System\String|string $x
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSymlinkTarget($x){}
	/**
	 * @param \System\String|string $input
	 * @param \System\String|string $regexText
	 * @param \System\Int32|int $escapeBase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnescapeString($input, $regexText, $escapeBase){}
	/**
	 * @param \System\String|string $input
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnescapePathFromProcMounts($input){}
	/**
	 * @param \System\String|string $input
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnescapeDeviceLabel($input){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Poll(){}
	/**
	 * @uses LinuxMountedVolumeInfoListenerMethodsOverride::Dispose_1 ($disposing)
	 * @uses LinuxMountedVolumeInfoListenerMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
