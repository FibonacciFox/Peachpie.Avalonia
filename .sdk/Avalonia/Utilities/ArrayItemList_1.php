<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayItemList_1Override {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $size
	 */
	#[MethodOverride]public function __construct_2 ($size){}
	/**
	 * @param \System\Collections\ICollection $collection
	 */
	#[MethodOverride]public function __construct_3 ($collection){}
	/**
	 * @param \System\Collections\Generic\ICollection_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_4 ($collection){}
}
final class ArrayItemList_1 extends \Avalonia\Utilities\FrugalListBase_1
{
	use ArrayItemList_1Override;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_count;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function SetCount($value){}
	/**
	 * @uses ArrayItemList_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses ArrayItemList_1Override::__construct_2 <br>public , args: ($size)<br>
	 * @uses ArrayItemList_1Override::__construct_3 <br>public , args: ($collection)<br>
	 * @uses ArrayItemList_1Override::__construct_4 <br>public , args: ($collection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}