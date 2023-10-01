<?php
namespace Avalonia\Controls\Platform;
/**
 */
class PlatformManager extends \System\Object
{
	/**
	 * @return \System\IDisposable
	 */
	public static function DesignerMode(){}
	/**
	 * @param \System\Double|double $factor
	 * @return \System\Void|void
	 */
	public static function SetDesignerScalingFactor($factor){}
	/**
	 * @return \Avalonia\Platform\ITrayIconImpl
	 */
	public static function CreateTrayIcon(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public static function CreateWindow(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public static function CreateEmbeddableWindow(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
