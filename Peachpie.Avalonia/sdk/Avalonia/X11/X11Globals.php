<?php
namespace Avalonia\X11;
/**
 */
class X11Globals extends \System\Object
{
	/**
	 * @return \System\String|string
	 */
	public  function get_WmName(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_WmName($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CompositionAtomOwner(){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CompositionAtomOwner($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompositionEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsCompositionEnabled($value){}
	/**
	 * @param \System\IntPtr $window
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSupportingWmCheck($window){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateCompositingAtomOwner(){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleCompositionAtomOwnerEvents($ev){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWmName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetWmName(){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootWindowEvent($ev){}
	/**
	 * @param \Avalonia\X11\IGlobalsSubscriber $subscriber
	 * @return \System\Void|void
	 */
	public  function AddSubscriber($subscriber){}
	/**
	 * @param \Avalonia\X11\IGlobalsSubscriber $subscriber
	 * @return \System\Void|void
	 */
	public  function RemoveSubscriber($subscriber){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
