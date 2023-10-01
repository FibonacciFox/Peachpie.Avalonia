<?php
namespace Avalonia\Dialogs\Internal;
/**
 */
class ManagedFileChooserSources extends \System\Object
{
	/**
	 * @return \System\Func_1
	 */
	public  function get_GetUserDirectories(){}
	/**
	 * @param \System\Func_1 $value
	 * @return \System\Void|void
	 */
	public  function set_GetUserDirectories($value){}
	/**
	 * @return \System\Func_1
	 */
	public  function get_GetFileSystemRoots(){}
	/**
	 * @param \System\Func_1 $value
	 * @return \System\Void|void
	 */
	public  function set_GetFileSystemRoots($value){}
	/**
	 * @return \System\Func_2
	 */
	public  function get_GetAllItemsDelegate(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public  function set_GetAllItemsDelegate($value){}
	/**
	 * @return \Avalonia\Dialogs\Internal\ManagedFileChooserNavigationItem[]
	 */
	public  function GetAllItems(){}
	/**
	 * @param \Avalonia\Dialogs\Internal\ManagedFileChooserSources $sources
	 * @return \Avalonia\Dialogs\Internal\ManagedFileChooserNavigationItem[]
	 */
	public static function DefaultGetAllItems($sources){}
	/**
	 * @return \Avalonia\Dialogs\Internal\ManagedFileChooserNavigationItem[]
	 */
	public static function DefaultGetUserDirectories(){}
	/**
	 * @return \Avalonia\Dialogs\Internal\ManagedFileChooserNavigationItem[]
	 */
	public static function DefaultGetFileSystemRoots(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
