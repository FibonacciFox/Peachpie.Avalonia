<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
class BindingPlugins extends \System\Object
{
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public static function get_PropertyAccessors(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public static function get_DataValidators(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public static function get_StreamHandlers(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
