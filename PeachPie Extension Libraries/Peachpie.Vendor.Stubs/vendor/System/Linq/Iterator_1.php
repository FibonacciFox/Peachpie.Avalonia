<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Iterator_1Override {
	/**
	 * @deprecated
	 * @return \TSource
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class Iterator_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use Iterator_1Override;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_state;
	/**
	 * @field
	 * @var \TSource
	 */
	protected $_current;
	/**
	 * @property
	 * @var \TSource
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses Iterator_1Override::get_Current_1 <br>public , args: ()<br>
	 * @uses Iterator_1Override::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TSource|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	/**
	 * @return \System\Linq\Enumerable+Iterator_1[TSource]
	 */
	abstract public function Clone();
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses Iterator_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses Iterator_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Boolean|bool
	 */
	abstract public function MoveNext();
	/**
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 * @return \System\Collections\Generic\IEnumerable_1[TResult]
	 */
	public function Select($selector){}
	/**
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	public function Where($predicate){}
	private function Reset(){}
}