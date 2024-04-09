<?php
namespace Avalonia\Platform;
/**
 * @method \System\Void|void add_ColorValuesChanged($value) [modifier: public]
 * @method \System\Void|void remove_ColorValuesChanged($value) [modifier: public]
*/
interface IPlatformSettings
{

	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \Avalonia\Size
	 */
	public function GetTapSize($type);
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \Avalonia\Size
	 */
	public function GetDoubleTapSize($type);
	/**
	 * @param \Avalonia\Input\PointerType $type
	 * @return \System\TimeSpan
	 */
	public function GetDoubleTapTime($type);
	/**
	 * @return \Avalonia\Platform\PlatformColorValues
	 */
	public function GetColorValues();
}