<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SZGenericArrayEnumerator_1Override {
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
}
final class SZGenericArrayEnumerator_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use SZGenericArrayEnumerator_1Override;
	/**
	 * @field
	 * @since readonly
	 * @var \System\SZGenericArrayEnumerator_1[T]
	 */
	protected static $Empty;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @uses SZGenericArrayEnumerator_1Override::get_Current_1 <br>public , args: ()<br>
	 * @uses SZGenericArrayEnumerator_1Override::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	private function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
}