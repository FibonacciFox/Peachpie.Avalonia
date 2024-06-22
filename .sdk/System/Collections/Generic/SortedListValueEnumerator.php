<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SortedListValueEnumeratorOverride {
	/**
	 * @deprecated
	 * @return \TValue
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
}
final class SortedListValueEnumerator extends \System\Object implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use SortedListValueEnumeratorOverride;

	/**
	 * @property
	 * @var \TValue
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @uses SortedListValueEnumeratorOverride::get_Current_1 <br>public , args: ()<br>
	 * @uses SortedListValueEnumeratorOverride::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	private function Reset(){}
}