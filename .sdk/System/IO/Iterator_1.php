<?php
namespace System\IO;
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
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
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
	protected $state;
	/**
	 * @field
	 * @var \TSource
	 */
	protected $current;
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
	 * @return \System\IO\Iterator_1[TSource]
	 */
	abstract protected function Clone();
	/**
	 * @uses Iterator_1Override::Dispose_1 <br>public , args: ()<br>
	 * @uses Iterator_1Override::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
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
	private function Reset(){}
	/**
	 */
	public function __construct(){}
}