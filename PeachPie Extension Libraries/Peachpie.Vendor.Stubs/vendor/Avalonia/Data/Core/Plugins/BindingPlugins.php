<?php
namespace Avalonia\Data\Core\Plugins;
class BindingPlugins extends \System\Object
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin]
	 * @since readonly
	 */
	public $PropertyAccessors;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\Core\Plugins\IDataValidationPlugin]
	 * @since readonly
	 */
	public $DataValidators;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Data\Core\Plugins\IStreamPlugin]
	 * @since readonly
	 */
	public $StreamHandlers;

}