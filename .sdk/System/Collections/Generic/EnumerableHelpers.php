<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumerableHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @param \System\Int32& &$length
	 * @return \T
	 */
	#[MethodOverride]protected static function ToArray_1 ($source, &$length){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @return \T
	 */
	#[MethodOverride]protected static function ToArray_2 ($source){}
}
class EnumerableHelpers extends \System\Object
{
	use EnumerableHelpersOverride;

	/**
	 * @uses EnumerableHelpersOverride::ToArray_1 <br>protected , args: ($source, &$length)<br>
	 * @uses EnumerableHelpersOverride::ToArray_2 <br>protected , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \T|mixed|\override
	 */
	#[MethodOverrideProtected]function ToArray (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function Copy($source, $array, $arrayIndex, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function IterativeCopy($source, $array, $arrayIndex, $count){}
}