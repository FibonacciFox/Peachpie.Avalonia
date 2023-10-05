<?php
namespace Avalonia\Data\Core;
/**
 */
class ReflectionClrPropertyInfo extends \Avalonia\Data\Core\ClrPropertyInfo implements 
	\Avalonia\Data\Core\IPropertyInfo
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSet;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanGet;
	/**
	 * @param \System\Reflection\PropertyInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSetter($info){}
	/**
	 * @param \System\Reflection\PropertyInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGetter($info){}
}
