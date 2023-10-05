<?php
namespace Avalonia\Platform;
/**
 */
class DefaultPlatformSettings extends \System\Object implements 
	\Avalonia\Platform\IPlatformSettings
{
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $HoldWaitDuration;
	/**
	 * @var \Avalonia\Input\Platform\PlatformHotkeyConfiguration
	 * @property
	 */
	public readonly $HotkeyConfiguration;
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \Avalonia\Size
	 */
	public  function GetTapSize($type){}
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \Avalonia\Size
	 */
	public  function GetDoubleTapSize($type){}
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \System\TimeSpan
	 */
	public  function GetDoubleTapTime($type){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_HoldWaitDuration(){}
	/**
	 * @return \Avalonia\Input\Platform\PlatformHotkeyConfiguration
	 */
	public  function get_HotkeyConfiguration(){}
	/**
	 * @return \Avalonia\Platform\PlatformColorValues
	 */
	public  function GetColorValues(){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ColorValuesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ColorValuesChanged($value){}
	/**
	 * @param \Avalonia\Platform\PlatformColorValues $colorValues
	 * @return \System\Void|void
	 */
	protected  function OnColorValuesChanged($colorValues){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
