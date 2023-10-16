<?php
namespace System\Reflection\Metadata;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MetadataUpdaterMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ApplyUpdate_1($assembly, $metadataDelta, $metadataDeltaLength, $ilDelta, $ilDeltaLength, $pdbDelta, $pdbDeltaLength){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ApplyUpdate_2($assembly, $metadataDelta, $ilDelta, $pdbDelta){}
}
/**
 */
class MetadataUpdater extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses MetadataUpdaterMethodsOverride::ApplyUpdate_1 ($assembly, $metadataDelta, $metadataDeltaLength, $ilDelta, $ilDeltaLength, $pdbDelta, $pdbDeltaLength)
	 * @uses MetadataUpdaterMethodsOverride::ApplyUpdate_2 ($assembly, $metadataDelta, $ilDelta, $pdbDelta)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ApplyUpdate(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsApplyUpdateSupported(){}
	/**
	 * @return \System\String|string
	 */
	protected static function GetCapabilities(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsSupported(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
