<?php
namespace Avalonia\Data\Core;
class ClrPropertyInfo extends \System\Object implements
	\Avalonia\Data\Core\IPropertyInfo
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSet;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanGet;
	/**
	 * @param \System\Object|object $target
	 * @return \System\Object|object
	 */
	public function Get($target){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Set($target, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Func_2 $getter [generic: System\Object,System\Object]
	 * @param \System\Action_2 $setter [generic: System\Object,System\Object]
	 * @param \System\Type $propertyType
	 */
	public function __construct($name, $getter, $setter, $propertyType){}
}