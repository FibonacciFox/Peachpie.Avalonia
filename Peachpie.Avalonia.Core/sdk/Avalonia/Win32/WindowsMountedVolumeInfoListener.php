<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowsMountedVolumeInfoListenerMethodsOverride
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
class WindowsMountedVolumeInfoListener extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Poll(){}
	/**
	 * @uses WindowsMountedVolumeInfoListenerMethodsOverride::Dispose_1 ($disposing)
	 * @uses WindowsMountedVolumeInfoListenerMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
