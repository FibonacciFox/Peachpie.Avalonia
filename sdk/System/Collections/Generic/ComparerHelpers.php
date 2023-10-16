<?php
namespace System\Collections\Generic;
/**
 */
class ComparerHelpers extends \System\Object
{
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	protected static function CreateDefaultComparer($type){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateEnumComparer($enumType){}
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	protected static function CreateDefaultEqualityComparer($type){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateEnumEqualityComparer($enumType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
