<?php
namespace System\Collections\Generic;
class ComparerHelpers extends \System\Object
{


	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	protected static function CreateDefaultComparer($type){}
	private static function TryCreateEnumComparer($enumType){}
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	protected static function CreateDefaultEqualityComparer($type){}
	private static function TryCreateEnumEqualityComparer($enumType){}
}