<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaNativeMenuExporterMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetMenu_1($menu){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetMenu_2($avnWindow, $menu){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetMenu_3($trayIcon, $menu){}
}
/**
 */
class AvaloniaNativeMenuExporter extends \System\Object implements 
	\Avalonia\Controls\Platform\ITopLevelNativeMenuExporter,
	\Avalonia\Controls\Platform\INativeMenuExporter
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNativeMenuExported(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_OnIsNativeMenuExportedChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_OnIsNativeMenuExportedChanged($value){}
	/**
	 * @param \Avalonia\Controls\NativeMenu $menu
	 * @return \System\Void|void
	 */
	public  function SetNativeMenu($menu){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateIfNeeded(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDefaultAppMenu(){}
	/**
	 * @param \Avalonia\Controls\NativeMenu $appMenu
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateStandardOSXMenuItems($appMenu){}
	/**
	 * @param \System\Boolean $forceUpdate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DoLayoutReset($forceUpdate){}
	/**
	 * @return \System\Void|void
	 */
	protected  function QueueReset(){}
	/**
	 * @uses AvaloniaNativeMenuExporterMethodsOverride::SetMenu_1 ($menu)
	 * @uses AvaloniaNativeMenuExporterMethodsOverride::SetMenu_2 ($avnWindow, $menu)
	 * @uses AvaloniaNativeMenuExporterMethodsOverride::SetMenu_3 ($trayIcon, $menu)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetMenu(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
