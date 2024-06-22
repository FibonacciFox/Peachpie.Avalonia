<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeyCollectionOverride {
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
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $index){}
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
final class KeyCollection extends \System\Object implements
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	use KeyCollectionOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function Add($item){}
	private function Clear(){}
	private function Contains($item){}
	/**
	 * @uses KeyCollectionOverride::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses KeyCollectionOverride::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	private function get_IsReadOnly(){}
	private function Remove($item){}
	/**
	 * @uses KeyCollectionOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses KeyCollectionOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
}