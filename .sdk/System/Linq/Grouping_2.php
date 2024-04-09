<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Grouping_2Override {
	/**
	 * @deprecated
	 * @param \TElement $element
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Add_1 ($element){}
	/**
	 * @deprecated
	 * @param \TElement $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_2 ($item){}
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
class Grouping_2 extends \System\Object implements
	\System\Linq\IGrouping_2,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1
{
	use Grouping_2Override;
	/**
	 * @field
	 * @since readonly
	 * @var \TKey
	 */
	protected $_key;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $_hashCode;
	/**
	 * @field
	 * @var \TElement[]
	 */
	protected $_elements;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_count;
	/**
	 * @field
	 * @var \System\Linq\Grouping_2[TKey,TElement]
	 */
	protected $_hashNext;
	/**
	 * @field
	 * @var \System\Linq\Grouping_2[TKey,TElement]
	 */
	protected $_next;
	/**
	 * @property
	 * @var \TKey
	 * @since readonly
	 */
	public $Key;
	/**
	 * @uses Grouping_2Override::Add_1 <br>protected , args: ($element)<br>
	 * @uses Grouping_2Override::Add_2 <br>private , args: ($item)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Add (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function Trim(){}
	/**
	 * @uses Grouping_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses Grouping_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function get_Count(){}
	private function get_IsReadOnly(){}
	private function Clear(){}
	private function Contains($item){}
	private function CopyTo($array, $arrayIndex){}
	private function Remove($item){}
	private function IndexOf($item){}
	private function Insert($index, $item){}
	private function RemoveAt($index){}
	private function get_Item($index){}
	private function set_Item($index, $value){}
}