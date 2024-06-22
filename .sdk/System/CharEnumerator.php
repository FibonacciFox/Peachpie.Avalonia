<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CharEnumeratorOverride {
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Char
	 */
	#[MethodOverride]public function get_Current_2 (){}
}
final class CharEnumerator extends \System\Object implements
	\System\Collections\IEnumerator,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\ICloneable
{
	use CharEnumeratorOverride;

	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses CharEnumeratorOverride::get_Current_1 <br>private , args: ()<br>
	 * @uses CharEnumeratorOverride::get_Current_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\System\Char|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
}