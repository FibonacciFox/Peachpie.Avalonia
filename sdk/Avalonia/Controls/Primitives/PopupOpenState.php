<?php
namespace Avalonia\Controls\Primitives;
/**
 */
class PopupOpenState extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Controls\TopLevel
	 */
	public  function get_TopLevel(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_PlacementTarget(){}
	/**
	 * @param \Avalonia\Controls\Control $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementTarget($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\IPopupHost
	 */
	public  function get_PopupHost(){}
	/**
	 * @param \System\IDisposable $presenterCleanup
	 * @return \System\Void|void
	 */
	public  function SetPresenterSubscription($presenterCleanup){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
