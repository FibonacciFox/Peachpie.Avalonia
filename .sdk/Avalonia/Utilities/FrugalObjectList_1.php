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
}
class FrugalObjectList_1 extends \System\Object
{
	use ArrayItemList_1Override;

	/**
	 * @field
	 * @var \Avalonia\Utilities\FrugalListBase_1[T]
	 */
	protected $_listStore;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	public function Add($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	public function Contains($value){}
	/**
	 * @param \T|object $value
	 * @return \System\Int32|int
	 */
	public function IndexOf($value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function Insert($index, $value){}
	/**
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	public function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function EnsureIndex($index){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @return \Avalonia\Utilities\FrugalObjectList_1[T]
	 */
	public function Clone(){}
	/**
	 * @uses FrugalObjectList_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses FrugalObjectList_1Override::__construct_2 <br>public , args: ($size)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}