<?php
namespace Avalonia\Platform;
class DefaultPlatformSettings extends \System\Object implements
	\Avalonia\Platform\IPlatformSettings
{

	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $HoldWaitDuration;
	/**
	 * @property
	 * @var \Avalonia\Input\Platform\PlatformHotkeyConfiguration
	 * @since readonly
	 */
	public $HotkeyConfiguration;
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \Avalonia\Size
	 */
	public function GetTapSize($type){}
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \Avalonia\Size
	 */
	public function GetDoubleTapSize($type){}
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \System\TimeSpan
	 */
	public function GetDoubleTapTime($type){}
	/**
	 * @return \Avalonia\Platform\PlatformColorValues
	 */
	public function GetColorValues(){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Platform\PlatformColorValues]
	 * @return \System\Void|void
	 */
	public function add_ColorValuesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Platform\PlatformColorValues]
	 * @return \System\Void|void
	 */
	public function remove_ColorValuesChanged($value){}
	/**
	 * @param \Avalonia\Platform\PlatformColorValues $colorValues
	 * @return \System\Void|void
	 */
	protected function OnColorValuesChanged($colorValues){}
	/**
	 */
	public function __construct(){}
}