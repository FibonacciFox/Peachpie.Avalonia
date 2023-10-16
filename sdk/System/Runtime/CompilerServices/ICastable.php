<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface ICastable
{
	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 * @param \System\Exception& $castError
	 */
	public function IsInstanceOfInterface($interfaceType, $castError);
	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 */
	public function GetImplType($interfaceType);
}
