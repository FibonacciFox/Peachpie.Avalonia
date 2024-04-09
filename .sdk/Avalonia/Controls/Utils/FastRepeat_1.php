<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FastRepeat_1Override {
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_2 (){}
}
class FastRepeat_1 extends \System\Object implements
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use FastRepeat_1Override;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Controls\Utils\CollectionUtils+FastRepeat_1[T]
	 */
	public static $Instance;
	/**
	 * @property
	 * @var \System\Int32|int
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
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @uses FastRepeat_1Override::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses FastRepeat_1Override::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\Generic\IEnumerator_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex){}
	/**
	 */
	public function __construct(){}
}