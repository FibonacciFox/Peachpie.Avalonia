<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositeEnumeratorOverride {
	/**
	 * @deprecated
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
}
final class CompositeEnumerator extends \System\Object implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use CompositeEnumeratorOverride;

	/**
	 * @property
	 * @var \System\IDisposable
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses CompositeEnumeratorOverride::get_Current_1 <br>public , args: ()<br>
	 * @uses CompositeEnumeratorOverride::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \System\IDisposable $disposables
	 */
	public function __construct($disposables){}
}