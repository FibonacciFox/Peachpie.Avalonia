<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VersioningHelperOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Runtime\Versioning\ResourceScope $from
	 * @param \System\Runtime\Versioning\ResourceScope $to
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function MakeVersionSafeName_1 ($name, $from, $to){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Runtime\Versioning\ResourceScope $from
	 * @param \System\Runtime\Versioning\ResourceScope $to
	 * @param \System\Type $type
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function MakeVersionSafeName_2 ($name, $from, $to, $type){}
}
class VersioningHelper extends \System\Object
{
	use VersioningHelperOverride;


	/**
	 * @uses VersioningHelperOverride::MakeVersionSafeName_1 <br>public , args: ($name, $from, $to)<br>
	 * @uses VersioningHelperOverride::MakeVersionSafeName_2 <br>public , args: ($name, $from, $to, $type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function MakeVersionSafeName (\override ...$args){}
	private static function GetRequirements($consumeAsScope, $calleeScope){}
}