<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SROverride {
	/**
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_1 ($length){}
	/**
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $defaultValue
	 */
	#[MethodOverride]public function __construct_2 ($length, $defaultValue){}
	/**
	 * @param \System\Byte $bytes
	 */
	#[MethodOverride]public function __construct_3 ($bytes){}
	/**
	 * @param \System\Boolean $values
	 */
	#[MethodOverride]public function __construct_4 ($values){}
	/**
	 * @param \System\Int32 $values
	 */
	#[MethodOverride]public function __construct_5 ($values){}
	/**
	 * @param \System\Collections\BitArray $bits
	 */
	#[MethodOverride]public function __construct_6 ($bits){}
}
final class BitArray extends \System\Object implements
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\ICloneable
{
	use SROverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSynchronized;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	public function Get($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function Set($index, $value){}
	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function SetAll($value){}
	/**
	 * @param \System\Collections\BitArray $value
	 * @return \System\Collections\BitArray
	 */
	public function And($value){}
	/**
	 * @param \System\Collections\BitArray $value
	 * @return \System\Collections\BitArray
	 */
	public function Or($value){}
	/**
	 * @param \System\Collections\BitArray $value
	 * @return \System\Collections\BitArray
	 */
	public function Xor($value){}
	/**
	 * @return \System\Collections\BitArray
	 */
	public function Not(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Collections\BitArray
	 */
	public function RightShift($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Collections\BitArray
	 */
	public function LeftShift($count){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator(){}
	private static function GetInt32ArrayLengthFromBitLength($n){}
	private static function GetInt32ArrayLengthFromByteLength($n){}
	private static function GetByteArrayLengthFromBitLength($n){}
	private static function Div32Rem($number, &$remainder){}
	private static function Div4Rem($number, &$remainder){}
	private static function ThrowArgumentOutOfRangeException($index){}
	/**
	 * @uses BitArrayOverride::__construct_1 <br>public , args: ($length)<br>
	 * @uses BitArrayOverride::__construct_2 <br>public , args: ($length, $defaultValue)<br>
	 * @uses BitArrayOverride::__construct_3 <br>public , args: ($bytes)<br>
	 * @uses BitArrayOverride::__construct_4 <br>public , args: ($values)<br>
	 * @uses BitArrayOverride::__construct_5 <br>public , args: ($values)<br>
	 * @uses BitArrayOverride::__construct_6 <br>public , args: ($bits)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}