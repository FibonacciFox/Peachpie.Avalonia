<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UntypedOverride {
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
class Untyped extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use UntypedOverride;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @uses UntypedOverride::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses UntypedOverride::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\Generic\IEnumerator_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $source [generic: T]
	 */
	public function __construct($source){}
}