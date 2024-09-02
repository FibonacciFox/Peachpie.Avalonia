<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueListOverride {
	/**
	 * @deprecated
	 * @param \TValue $array
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
final class ValueList extends \System\Object implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection
{
	use ValueListOverride;
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
	 * @var \TValue
	 */
	public $Item;
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @param \TValue $key
	 * @return \System\Void|void
	 */
	public function Add($key){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \TValue $value
	 * @return \System\Boolean|bool
	 */
	public function Contains($value){}
	/**
	 * @uses ValueListOverride::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses ValueListOverride::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Insert($index, $value){}
	/**
	 * @uses ValueListOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ValueListOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \TValue $value
	 * @return \System\Int32|int
	 */
	public function IndexOf($value){}
	/**
	 * @param \TValue $value
	 * @return \System\Boolean|bool
	 */
	public function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
}