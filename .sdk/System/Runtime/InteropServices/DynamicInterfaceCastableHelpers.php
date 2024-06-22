<?php
namespace System\Runtime\InteropServices;
class DynamicInterfaceCastableHelpers extends \System\Object
{


	/**
	 * @param \System\Runtime\InteropServices\IDynamicInterfaceCastable $castable
	 * @param \System\RuntimeType $interfaceType
	 * @param \System\Boolean|bool $throwIfNotImplemented
	 * @return \System\Boolean|bool
	 */
	protected static function IsInterfaceImplemented($castable, $interfaceType, $throwIfNotImplemented){}
	/**
	 * @param \System\Runtime\InteropServices\IDynamicInterfaceCastable $castable
	 * @param \System\RuntimeType $interfaceType
	 * @return \System\RuntimeType
	 */
	protected static function GetInterfaceImplementation($castable, $interfaceType){}
}