<?php
namespace System\Runtime\InteropServices;
/**
 */
interface IDynamicInterfaceCastable
{
	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 * @param \System\Boolean $throwIfNotImplemented
	 */
	public function IsInterfaceImplemented($interfaceType, $throwIfNotImplemented);
	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 */
	public function GetInterfaceImplementation($interfaceType);
}
