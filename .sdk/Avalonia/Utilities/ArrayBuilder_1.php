<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayBuilder_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $clear
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride]public function Add_1 ($length, $clear){}
	/**
	 * @deprecated
	 * @param \Avalonia\Utilities\ArraySlice_1 &$value [generic: T]
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride]public function Add_2 (&$value){}
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride]public function AsSlice_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride]public function AsSlice_2 ($length){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride]public function AsSlice_3 ($start, $length){}
}
final class ArrayBuilder_1 extends \System\ValueType
{
	use ArrayBuilder_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \T&
	 * @since readonly
	 */
	public $Item;
	/**
	 * @uses ArrayBuilder_1Override::Add_1 <br>public , args: ($length, $clear)<br>
	 * @uses ArrayBuilder_1Override::Add_2 <br>public , args: (&$value)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\ArraySlice_1|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function AddItem($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	private function ClearArray(){}
	private function EnsureCapacity($min){}
	/**
	 * @uses ArrayBuilder_1Override::AsSlice_1 <br>public , args: ()<br>
	 * @uses ArrayBuilder_1Override::AsSlice_2 <br>public , args: ($length)<br>
	 * @uses ArrayBuilder_1Override::AsSlice_3 <br>public , args: ($start, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\ArraySlice_1|mixed|\override
	 */
	#[MethodOverridePublic]function AsSlice (\override ...$args){}
	/**
	 * @return \System\Span_1[T]
	 */
	public function AsSpan(){}
}