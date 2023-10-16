<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VersioningHelperMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function MakeVersionSafeName_1($name, $from, $to){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function MakeVersionSafeName_2($name, $from, $to, $type){}
}
/**
 */
class VersioningHelper extends \System\Object
{
	/**
	 * @uses VersioningHelperMethodsOverride::MakeVersionSafeName_1 ($name, $from, $to)
	 * @uses VersioningHelperMethodsOverride::MakeVersionSafeName_2 ($name, $from, $to, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MakeVersionSafeName(mixed ...$args){}
	/**
	 * @param \System\Runtime\Versioning\ResourceScope $consumeAsScope
	 * @param \System\Runtime\Versioning\ResourceScope $calleeScope
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRequirements($consumeAsScope, $calleeScope){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
