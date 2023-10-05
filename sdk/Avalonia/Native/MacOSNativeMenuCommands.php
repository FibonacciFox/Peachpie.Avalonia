<?php
namespace Avalonia\Native;
/**
 */
class MacOSNativeMenuCommands extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeApplicationCommands
{
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsServicesSubmenuProperty;
	/**
	 * @return \System\Void|void
	 */
	public  function HideApp(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ShowAll(){}
	/**
	 * @return \System\Void|void
	 */
	public  function HideOthers(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
