<?php
namespace System\Net;
/**
 */
class HtmlEntities extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeLookupTable(){}
	/**
	 * @param \System\ReadOnlySpan_1 $entity
	 * @return \System\Char
	 */
	public static function Lookup($entity){}
	/**
	 * @param \System\ReadOnlySpan_1 $entity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToUInt64Key($entity){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
