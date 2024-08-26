<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArraySlice_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T&
	 */
	#[MethodOverride]public function get_Item_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	#[MethodOverride]private function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\ImmutableReadOnlyListStructEnumerator_1
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
	/**
	 * @param \T $data
	 */
	#[MethodOverride]public function __construct_1 ($data){}
	/**
	 * @param \T $data
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_2 ($data, $start, $length){}
}
final class ArraySlice_1 extends \System\ValueType implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use ArraySlice_1Override;
	/**
	 * @property
	 * @var \Avalonia\Utilities\ArraySlice_1[T]
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEmpty;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Span_1[T]
	 * @since readonly
	 */
	public $Span;
	/**
	 * @property
	 * @var \T&
	 * @since readonly
	 */
	public $Item;
	/**
	 * @uses ArraySlice_1Override::get_Item_1 <br>public , args: ($index)<br>
	 * @uses ArraySlice_1Override::get_Item_2 <br>private , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @param \T $array
	 * @return \Avalonia\Utilities\ArraySlice_1[T]
	 */
	public static function op_Implicit($array){}
	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function Fill($value){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1[T]
	 */
	public function Slice($start, $length){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1[T]
	 */
	public function Take($length){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1[T]
	 */
	public function Skip($length){}
	/**
	 * @uses ArraySlice_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ArraySlice_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses ArraySlice_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\ImmutableReadOnlyListStructEnumerator_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function get_Count(){}
	/**
	 * @uses ArraySlice_1Override::__construct_1 <br>public , args: ($data)<br>
	 * @uses ArraySlice_1Override::__construct_2 <br>public , args: ($data, $start, $length)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}