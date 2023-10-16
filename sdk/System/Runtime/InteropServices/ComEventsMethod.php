<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComEventsMethod extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @param \System\Runtime\InteropServices\ComEventsMethod $methods
	 * @param \System\Int32|int $dispid
	 * @return \System\Runtime\InteropServices\ComEventsMethod
	 */
	public static function Find($methods, $dispid){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsMethod $methods
	 * @param \System\Runtime\InteropServices\ComEventsMethod $method
	 * @return \System\Runtime\InteropServices\ComEventsMethod
	 */
	public static function Add($methods, $method){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsMethod $methods
	 * @param \System\Runtime\InteropServices\ComEventsMethod $method
	 * @return \System\Runtime\InteropServices\ComEventsMethod
	 */
	public static function Remove($methods, $method){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Empty(){}
	/**
	 * @param \System\Delegate $d
	 * @param \System\Boolean $wrapArgs
	 * @return \System\Void|void
	 */
	public  function AddDelegate($d, $wrapArgs){}
	/**
	 * @param \System\Delegate $d
	 * @param \System\Boolean $wrapArgs
	 * @return \System\Void|void
	 */
	public  function RemoveDelegate($d, $wrapArgs){}
	/**
	 * @param \System\Object[] $args
	 * @return \System\Object|object
	 */
	public  function Invoke($args){}
	/**
	 * @param \System\Runtime\InteropServices\DelegateWrapper[] $newWrappers
	 * @param \System\Runtime\InteropServices\DelegateWrapper[] $currentMaybe
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublishNewWrappers($newWrappers, $currentMaybe){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
