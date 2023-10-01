<?php
namespace Avalonia\X11;
/**
 */
class X11ScreensUserSettings extends \System\Object
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_GlobalScaleFactor(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_GlobalScaleFactor($value){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	public  function get_NamedScaleFactors(){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $value
	 * @return \System\Void|void
	 */
	public  function set_NamedScaleFactors($value){}
	/**
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParse($s){}
	/**
	 * @return \Avalonia\X11\X11ScreensUserSettings
	 */
	public static function DetectEnvironment(){}
	/**
	 * @return \Avalonia\X11\X11ScreensUserSettings
	 */
	public static function Detect(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
