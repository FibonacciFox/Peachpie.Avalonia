<?php
namespace Avalonia\Data\Core;
/**
 */
class ReflectionClrPropertyInfo extends \Avalonia\Data\Core\ClrPropertyInfo implements 
	\Avalonia\Data\Core\IPropertyInfo
{
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
