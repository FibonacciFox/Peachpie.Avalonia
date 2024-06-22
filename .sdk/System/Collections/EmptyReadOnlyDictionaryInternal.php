<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EmptyReadOnlyDictionaryInternalOverride {
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
}
final class EmptyReadOnlyDictionaryInternal extends \System\Object implements
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	use EmptyReadOnlyDictionaryInternalOverride;

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
	 * @var \System\Object|object
	 */
	public $Item;
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
	 * @uses EmptyReadOnlyDictionaryInternalOverride::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses EmptyReadOnlyDictionaryInternalOverride::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\IDictionaryEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function Contains($key){}
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
	 * @return \System\Void|void
	 */
	public function Remove($key){}
	/**
	 */
	public function __construct(){}
}