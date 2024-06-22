<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeyListOverride {
	/**
	 * @deprecated
	 * @param \TKey $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
final class KeyList extends \System\Object implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection
{
	use KeyListOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \TKey
	 */
	public $Item;
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @param \TKey $key
	 * @return \System\Void|void
	 */
	public function Add($key){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Contains($key){}
	/**
	 * @uses KeyListOverride::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses KeyListOverride::CopyTo_2 <br>private , args: ($array, $arrayIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \TKey $value
	 * @return \System\Void|void
	 */
	public function Insert($index, $value){}
	/**
	 * @uses KeyListOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses KeyListOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \TKey $key
	 * @return \System\Int32|int
	 */
	public function IndexOf($key){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Remove($key){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
}