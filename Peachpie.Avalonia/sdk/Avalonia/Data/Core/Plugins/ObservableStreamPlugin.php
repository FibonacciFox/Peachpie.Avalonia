<?php
namespace Avalonia\Data\Core\Plugins;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObservableStreamPluginMethodsOverride
{
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] private static function GetBoxObservable_1($source){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] private static function GetBoxObservable_2(){}
}
/**
 */
class ObservableStreamPlugin extends \System\Object implements 
	\Avalonia\Data\Core\Plugins\IStreamPlugin
{
	/**
	 * @param \System\WeakReference_1 $reference
	 * @return \System\Boolean
	 */
	public  function Match($reference){}
	/**
	 * @param \System\WeakReference_1 $reference
	 * @return \System\IObservable_1
	 */
	public  function Start($reference){}
	/**
	 * @uses ObservableStreamPluginMethodsOverride::GetBoxObservable_1 ($source)
	 * @uses ObservableStreamPluginMethodsOverride::GetBoxObservable_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBoxObservable(mixed ...$args){}
	/**
	 * @param \System\IObservable_1 $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BoxObservable($source){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
