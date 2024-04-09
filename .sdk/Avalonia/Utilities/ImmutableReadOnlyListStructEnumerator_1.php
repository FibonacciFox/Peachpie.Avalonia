<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmutableReadOnlyListStructEnumerator_1Override {
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
final class ImmutableReadOnlyListStructEnumerator_1 extends \System\ValueType implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use ImmutableReadOnlyListStructEnumerator_1Override;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses ImmutableReadOnlyListStructEnumerator_1Override::get_Current_1 <br>public , args: ()<br>
	 * @uses ImmutableReadOnlyListStructEnumerator_1Override::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
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
	 * @param \System\Collections\Generic\IReadOnlyList_1 $readOnlyList [generic: T]
	 */
	public function __construct($readOnlyList){}
}