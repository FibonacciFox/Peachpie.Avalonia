<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FastResourceComparerOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $a
	 * @param \System\Object|object $b
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \System\String|string $a
	 * @param \System\String|string $b
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_2 ($a, $b){}
	/**
	 * @deprecated
	 * @param \System\String|string $a
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $bCharLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CompareOrdinal_1 ($a, $bytes, $bCharLength){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $aCharLength
	 * @param \System\String|string $b
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CompareOrdinal_2 ($bytes, $aCharLength, $b){}
	/**
	 * @deprecated
	 * @param \System\Byte* $a
	 * @param \System\Int32|int $byteLen
	 * @param \System\String|string $b
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CompareOrdinal_3 ($a, $byteLen, $b){}
}
final class FastResourceComparer extends \System\Object implements
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1
{
	use FastResourceComparerOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Resources\FastResourceComparer
	 */
	protected static $Default;
	/**
	 * @param \System\String|string $key
	 * @return \System\Int32|int
	 */
	protected static function HashFunction($key){}
	/**
	 * @uses FastResourceComparerOverride::Compare_1 <br>public , args: ($a, $b)<br>
	 * @uses FastResourceComparerOverride::Compare_2 <br>public , args: ($a, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
	/**
	 * @uses FastResourceComparerOverride::CompareOrdinal_1 <br>public , args: ($a, $bytes, $bCharLength)<br>
	 * @uses FastResourceComparerOverride::CompareOrdinal_2 <br>public , args: ($bytes, $aCharLength, $b)<br>
	 * @uses FastResourceComparerOverride::CompareOrdinal_3 <br>protected , args: ($a, $byteLen, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareOrdinal (\override ...$args){}
	/**
	 */
	public function __construct(){}
}