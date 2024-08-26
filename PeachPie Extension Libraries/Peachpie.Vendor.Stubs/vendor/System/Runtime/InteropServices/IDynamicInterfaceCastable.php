<?php
namespace System\Runtime\InteropServices;
interface IDynamicInterfaceCastable
{

	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 * @param \System\Boolean|bool $throwIfNotImplemented
	 * @return \System\Boolean|bool
	 */
	public function IsInterfaceImplemented($interfaceType, $throwIfNotImplemented);
	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 * @return \System\RuntimeTypeHandle
	 */
	public function GetInterfaceImplementation($interfaceType);
}