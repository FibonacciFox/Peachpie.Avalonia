<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ListDictionaryInternalOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class ListDictionaryInternal extends \System\Object implements
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	use ListDictionaryInternalOverride;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\ICollection
	 * @since readonly
	 */
	public $Keys;
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
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Collections\ICollection
	 * @since readonly
	 */
	public $Values;
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
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function Contains($key){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @uses ListDictionaryInternalOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ListDictionaryInternalOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IDictionaryEnumerator|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public function Remove($key){}
	/**
	 */
	public function __construct(){}
}