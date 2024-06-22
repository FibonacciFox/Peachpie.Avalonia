<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SafeEnumerableList_1Override {
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\SafeEnumerableList_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
class SafeEnumerableList_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use SafeEnumerableList_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @uses SafeEnumerableList_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SafeEnumerableList_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses SafeEnumerableList_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\SafeEnumerableList_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function GetList(){}
	/**
	 */
	public function __construct(){}
}