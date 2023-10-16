<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ActivatorMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateInstance_1($type, $bindingAttr, $binder, $args, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateInstance_2($type, $args){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateInstance_3($type, $args, $activationAttributes){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateInstance_4($type){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateInstance_5($type, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public static function CreateInstance_6($assemblyName, $typeName){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public static function CreateInstance_7($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public static function CreateInstance_8($assemblyName, $typeName, $activationAttributes){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateInstance_9($type, $nonPublic){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected static function CreateInstance_10($type, $nonPublic, $wrapExceptions){}
	/**
	 * @return \System\T
	 */
	#[MethodOverride] public static function CreateInstance_11(){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public static function CreateInstanceFrom_1($assemblyFile, $typeName){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public static function CreateInstanceFrom_2($assemblyFile, $typeName, $activationAttributes){}
	/**
	 * @return \System\Runtime\Remoting\ObjectHandle
	 */
	#[MethodOverride] public static function CreateInstanceFrom_3($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes){}
}
/**
 */
class Activator extends \System\Object
{
	/**
	 * @uses ActivatorMethodsOverride::CreateInstance_1 ($type, $bindingAttr, $binder, $args, $culture)
	 * @uses ActivatorMethodsOverride::CreateInstance_2 ($type, $args)
	 * @uses ActivatorMethodsOverride::CreateInstance_3 ($type, $args, $activationAttributes)
	 * @uses ActivatorMethodsOverride::CreateInstance_4 ($type)
	 * @uses ActivatorMethodsOverride::CreateInstance_5 ($type, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @uses ActivatorMethodsOverride::CreateInstance_6 ($assemblyName, $typeName)
	 * @uses ActivatorMethodsOverride::CreateInstance_7 ($assemblyName, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @uses ActivatorMethodsOverride::CreateInstance_8 ($assemblyName, $typeName, $activationAttributes)
	 * @uses ActivatorMethodsOverride::CreateInstance_9 ($type, $nonPublic)
	 * @uses ActivatorMethodsOverride::CreateInstance_10 ($type, $nonPublic, $wrapExceptions)
	 * @uses ActivatorMethodsOverride::CreateInstance_11 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateInstance(mixed ...$args){}
	/**
	 * @uses ActivatorMethodsOverride::CreateInstanceFrom_1 ($assemblyFile, $typeName)
	 * @uses ActivatorMethodsOverride::CreateInstanceFrom_2 ($assemblyFile, $typeName, $activationAttributes)
	 * @uses ActivatorMethodsOverride::CreateInstanceFrom_3 ($assemblyFile, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateInstanceFrom(mixed ...$args){}
	/**
	 * @param \System\String|string $assemblyString
	 * @param \System\String|string $typeName
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object[] $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object[] $activationAttributes
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateInstanceInternal($assemblyString, $typeName, $ignoreCase, $bindingAttr, $binder, $args, $culture, $activationAttributes, $stackMark){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDefaultInstance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
