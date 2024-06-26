<?php
namespace System\Runtime\CompilerServices;
class ICastableHelpers extends \System\Object
{

	/**
	 * @param \System\Runtime\CompilerServices\ICastable $castable
	 * @param \System\RuntimeType $type
	 * @param \System\Exception& &$castError
	 * @return \System\Boolean|bool
	 */
	protected static function IsInstanceOfInterface($castable, $type, &$castError){}
	/**
	 * @param \System\Runtime\CompilerServices\ICastable $castable
	 * @param \System\RuntimeType $interfaceType
	 * @return \System\RuntimeType
	 */
	protected static function GetImplType($castable, $interfaceType){}
}