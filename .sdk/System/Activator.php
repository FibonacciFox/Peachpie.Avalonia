<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ActivatorOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateInstance_1 ($type, $bindingAttr, $binder, $args, $culture){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object ...$args
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateInstance_2 ($type, ...$args){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Object $args
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateInstance_3 ($type, $args, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateInstance_4 ($type){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateInstance_5 ($type, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public static function CreateInstance_6 ($assemblyName, $typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public static function CreateInstance_7 ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyName
	 * @param \System\String|string $typeName
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public static function CreateInstance_8 ($assemblyName, $typeName, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateInstance_9 ($type, $nonPublic){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Boolean|bool $nonPublic
	 * @param \System\Boolean|bool $wrapExceptions
	 * @return \System\Object|object
	 */
	#[MethodOverride]protected static function CreateInstance_10 ($type, $nonPublic, $wrapExceptions){}
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public static function CreateInstance_11 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public static function CreateInstanceFrom_1 ($assemblyFile, $typeName){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public static function CreateInstanceFrom_2 ($assemblyFile, $typeName, $activationAttributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $assemblyFile
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object $activationAttributes
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride]public static function CreateInstanceFrom_3 ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
}
class Activator extends \System\Object
{
	use ActivatorOverride;

	/**
	 * @uses ActivatorOverride::CreateInstance_1 <br>public , args: ($type, $bindingAttr, $binder, $args, $culture)<br>
	 * @uses ActivatorOverride::CreateInstance_2 <br>public , args: ($type, ...$args)<br>
	 * @uses ActivatorOverride::CreateInstance_3 <br>public , args: ($type, $args, $activationAttributes)<br>
	 * @uses ActivatorOverride::CreateInstance_4 <br>public , args: ($type)<br>
	 * @uses ActivatorOverride::CreateInstance_5 <br>public , args: ($type, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @uses ActivatorOverride::CreateInstance_6 <br>public , args: ($assemblyName, $typeName)<br>
	 * @uses ActivatorOverride::CreateInstance_7 <br>public , args: ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @uses ActivatorOverride::CreateInstance_8 <br>public , args: ($assemblyName, $typeName, $activationAttributes)<br>
	 * @uses ActivatorOverride::CreateInstance_9 <br>public , args: ($type, $nonPublic)<br>
	 * @uses ActivatorOverride::CreateInstance_10 <br>protected , args: ($type, $nonPublic, $wrapExceptions)<br>
	 * @uses ActivatorOverride::CreateInstance_11 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\System\Runtime\Remoting\ObjectHandle|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstance (\override ...$args){}
	/**
	 * @uses ActivatorOverride::CreateInstanceFrom_1 <br>public , args: ($assemblyFile, $typeName)<br>
	 * @uses ActivatorOverride::CreateInstanceFrom_2 <br>public , args: ($assemblyFile, $typeName, $activationAttributes)<br>
	 * @uses ActivatorOverride::CreateInstanceFrom_3 <br>public , args: ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Remoting\ObjectHandle|mixed|\override
	 */
	#[MethodOverridePublic]function CreateInstanceFrom (\override ...$args){}
	private static function CreateInstanceInternal($assemblyString, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes, $stackMark){}
	private static function CreateDefaultInstance(){}
}