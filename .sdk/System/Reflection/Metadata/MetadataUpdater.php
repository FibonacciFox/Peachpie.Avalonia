<?php
namespace System\Reflection\Metadata;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MetadataUpdaterOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallAssembly $assembly
	 * @param \System\Byte* $metadataDelta
	 * @param \System\Int32|int $metadataDeltaLength
	 * @param \System\Byte* $ilDelta
	 * @param \System\Int32|int $ilDeltaLength
	 * @param \System\Byte* $pdbDelta
	 * @param \System\Int32|int $pdbDeltaLength
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ApplyUpdate_1 ($assembly, $metadataDelta, $metadataDeltaLength, $ilDelta, $ilDeltaLength, $pdbDelta, $pdbDeltaLength){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\ReadOnlySpan_1 $metadataDelta [generic: System\Byte]
	 * @param \System\ReadOnlySpan_1 $ilDelta [generic: System\Byte]
	 * @param \System\ReadOnlySpan_1 $pdbDelta [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ApplyUpdate_2 ($assembly, $metadataDelta, $ilDelta, $pdbDelta){}
}
class MetadataUpdater extends \System\Object
{
	use MetadataUpdaterOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses MetadataUpdaterOverride::ApplyUpdate_1 <br>private , args: ($assembly, $metadataDelta, $metadataDeltaLength, $ilDelta, $ilDeltaLength, $pdbDelta, $pdbDeltaLength)<br>
	 * @uses MetadataUpdaterOverride::ApplyUpdate_2 <br>public , args: ($assembly, $metadataDelta, $ilDelta, $pdbDelta)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ApplyUpdate (\override ...$args){}
	private static function IsApplyUpdateSupported(){}
	/**
	 * @return \System\String|string
	 */
	protected static function GetCapabilities(){}
}