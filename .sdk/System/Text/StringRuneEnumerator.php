<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringRuneEnumeratorOverride {
	/**
	 * @deprecated
	 * @return \System\Text\Rune
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
	/**
	 * @deprecated
	 * @return \System\Text\StringRuneEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
final class StringRuneEnumerator extends \System\ValueType implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use StringRuneEnumeratorOverride;

	/**
	 * @property
	 * @var \System\Text\Rune
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses StringRuneEnumeratorOverride::get_Current_1 <br>public , args: ()<br>
	 * @uses StringRuneEnumeratorOverride::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\Rune|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	/**
	 * @uses StringRuneEnumeratorOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses StringRuneEnumeratorOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses StringRuneEnumeratorOverride::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringRuneEnumerator|\System\Collections\IEnumerator|\System\Collections\Generic\IEnumerator_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	private function Dispose(){}
	private function Reset(){}
}