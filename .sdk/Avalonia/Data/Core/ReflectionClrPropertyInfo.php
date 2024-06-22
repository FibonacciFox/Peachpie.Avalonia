<?php
namespace Avalonia\Data\Core;
class ReflectionClrPropertyInfo extends \Avalonia\Data\Core\ClrPropertyInfo implements
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
	private static function CreateSetter($info){}
	private static function CreateGetter($info){}
	/**
	 * @param \System\Reflection\PropertyInfo $info
	 */
	public function __construct($info){}
}