<?php
namespace Avalonia\Win32;
/**
 */
class Win32NativeToManagedMenuExporter extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeMenuExporter
{
	/**
	 * @param \Avalonia\Controls\NativeMenu $nativeMenu
	 * @return \System\Void|void
	 */
	public  function SetNativeMenu($nativeMenu){}
	/**
	 * @param \Avalonia\Controls\NativeMenu $nativeMenu
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Populate($nativeMenu){}
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function GetMenu(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
