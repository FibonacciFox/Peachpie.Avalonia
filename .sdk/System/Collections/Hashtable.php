<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait HashtableOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function rehash_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $newsize
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function rehash_2 ($newsize){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_2 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Single $loadFactor
	 */
	#[MethodOverride]public function __construct_3 ($capacity, $loadFactor){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Single $loadFactor
	 * @param \System\Collections\IEqualityComparer $equalityComparer
	 */
	#[MethodOverride]public function __construct_4 ($capacity, $loadFactor, $equalityComparer){}
	/**
	 * @param \System\Collections\IHashCodeProvider $hcp
	 * @param \System\Collections\IComparer $comparer
	 */
	#[MethodOverride]public function __construct_5 ($hcp, $comparer){}
	/**
	 * @param \System\Collections\IEqualityComparer $equalityComparer
	 */
	#[MethodOverride]public function __construct_6 ($equalityComparer){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Collections\IHashCodeProvider $hcp
	 * @param \System\Collections\IComparer $comparer
	 */
	#[MethodOverride]public function __construct_7 ($capacity, $hcp, $comparer){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Collections\IEqualityComparer $equalityComparer
	 */
	#[MethodOverride]public function __construct_8 ($capacity, $equalityComparer){}
	/**
	 * @param \System\Collections\IDictionary $d
	 */
	#[MethodOverride]public function __construct_9 ($d){}
	/**
	 * @param \System\Collections\IDictionary $d
	 * @param \System\Single $loadFactor
	 */
	#[MethodOverride]public function __construct_10 ($d, $loadFactor){}
	/**
	 * @param \System\Collections\IDictionary $d
	 * @param \System\Collections\IHashCodeProvider $hcp
	 * @param \System\Collections\IComparer $comparer
	 */
	#[MethodOverride]public function __construct_11 ($d, $hcp, $comparer){}
	/**
	 * @param \System\Collections\IDictionary $d
	 * @param \System\Collections\IEqualityComparer $equalityComparer
	 */
	#[MethodOverride]public function __construct_12 ($d, $equalityComparer){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Single $loadFactor
	 * @param \System\Collections\IHashCodeProvider $hcp
	 * @param \System\Collections\IComparer $comparer
	 */
	#[MethodOverride]public function __construct_13 ($capacity, $loadFactor, $hcp, $comparer){}
	/**
	 * @param \System\Collections\IDictionary $d
	 * @param \System\Single $loadFactor
	 * @param \System\Collections\IHashCodeProvider $hcp
	 * @param \System\Collections\IComparer $comparer
	 */
	#[MethodOverride]public function __construct_14 ($d, $loadFactor, $hcp, $comparer){}
	/**
	 * @param \System\Collections\IDictionary $d
	 * @param \System\Single $loadFactor
	 * @param \System\Collections\IEqualityComparer $equalityComparer
	 */
	#[MethodOverride]public function __construct_15 ($d, $loadFactor, $equalityComparer){}
}
class Hashtable extends \System\Object implements
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\ICloneable
{
	use HashtableOverride;
	/**
	 * @property
	 * @var \System\Collections\IHashCodeProvider
	 */
	protected $hcp;
	/**
	 * @property
	 * @var \System\Collections\IComparer
	 */
	protected $comparer;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFixedSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSynchronized;
	/**
	 * @property
	 * @var \System\Collections\ICollection
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\ICollection
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function InitHash($key, $hashsize, &$seed, &$incr){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function Contains($key){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public function ContainsValue($value){}
	private function CopyKeys($array, $arrayIndex){}
	private function CopyEntries($array, $arrayIndex){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex){}
	/**
	 * @return \System\Collections\KeyValuePairs[]
	 */
	protected function ToKeyValuePairsArray(){}
	private function CopyValues($array, $arrayIndex){}
	private function expand(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses HashtableOverride::rehash_1 <br>private , args: ()<br>
	 * @uses HashtableOverride::rehash_2 <br>private , args: ($newsize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function rehash (\override ...$args){}
	private function UpdateVersion(){}
	/**
	 * @uses HashtableOverride::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses HashtableOverride::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\IDictionaryEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Int32|int
	 */
	protected function GetHash($key){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	protected function KeyEquals($item, $key){}
	private function Insert($key, $nvalue, $add){}
	private function putEntry($newBuckets, $key, $nvalue, $hashcode){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public function Remove($key){}
	/**
	 * @param \System\Collections\Hashtable $table
	 * @return \System\Collections\Hashtable
	 */
	public static function Synchronized($table){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public function OnDeserialization($sender){}
	/**
	 * @uses HashtableOverride::__construct_1 <br>public , args: ()<br>
	 * @uses HashtableOverride::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses HashtableOverride::__construct_3 <br>public , args: ($capacity, $loadFactor)<br>
	 * @uses HashtableOverride::__construct_4 <br>public , args: ($capacity, $loadFactor, $equalityComparer)<br>
	 * @uses HashtableOverride::__construct_5 <br>public , args: ($hcp, $comparer)<br>
	 * @uses HashtableOverride::__construct_6 <br>public , args: ($equalityComparer)<br>
	 * @uses HashtableOverride::__construct_7 <br>public , args: ($capacity, $hcp, $comparer)<br>
	 * @uses HashtableOverride::__construct_8 <br>public , args: ($capacity, $equalityComparer)<br>
	 * @uses HashtableOverride::__construct_9 <br>public , args: ($d)<br>
	 * @uses HashtableOverride::__construct_10 <br>public , args: ($d, $loadFactor)<br>
	 * @uses HashtableOverride::__construct_11 <br>public , args: ($d, $hcp, $comparer)<br>
	 * @uses HashtableOverride::__construct_12 <br>public , args: ($d, $equalityComparer)<br>
	 * @uses HashtableOverride::__construct_13 <br>public , args: ($capacity, $loadFactor, $hcp, $comparer)<br>
	 * @uses HashtableOverride::__construct_14 <br>public , args: ($d, $loadFactor, $hcp, $comparer)<br>
	 * @uses HashtableOverride::__construct_15 <br>public , args: ($d, $loadFactor, $equalityComparer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}