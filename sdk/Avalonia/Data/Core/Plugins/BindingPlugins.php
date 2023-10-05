<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
class BindingPlugins extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin]
	 * @property
	 */
	public readonly $PropertyAccessors;
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\Core\Plugins\IDataValidationPlugin]
	 * @property
	 */
	public readonly $DataValidators;
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\Core\Plugins\IStreamPlugin]
	 * @property
	 */
	public readonly $StreamHandlers;
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
