<?php
namespace System\Reflection\Metadata;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeTypeMetadataUpdateHandlerOverride {
	/**
	 * @deprecated
	 * @param \System\Type $types
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ClearCache_1 ($types){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ClearCache_2 ($type){}
}
class RuntimeTypeMetadataUpdateHandler extends \System\Object
{
	use RuntimeTypeMetadataUpdateHandlerOverride;


	/**
	 * @uses RuntimeTypeMetadataUpdateHandlerOverride::ClearCache_1 <br>public , args: ($types)<br>
	 * @uses RuntimeTypeMetadataUpdateHandlerOverride::ClearCache_2 <br>private , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ClearCache (\override ...$args){}
	private static function SkipAssembly($assembly){}
	private static function RequiresClearingAllTypes($types){}
}