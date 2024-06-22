<?php
namespace System\Runtime\CompilerServices;
interface ICastable
{


	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 * @param \System\Exception& &$castError
	 * @return \System\Boolean|bool
	 */
	public function IsInstanceOfInterface($interfaceType, &$castError);
	/**
	 * @param \System\RuntimeTypeHandle $interfaceType
	 * @return \System\RuntimeTypeHandle
	 */
	public function GetImplType($interfaceType);
}