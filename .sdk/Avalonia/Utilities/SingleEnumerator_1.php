<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SingleEnumerator_1Override {
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
class SingleEnumerator_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use SingleEnumerator_1Override;

	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses SingleEnumerator_1Override::get_Current_1 <br>public , args: ()<br>
	 * @uses SingleEnumerator_1Override::get_Current_2 <br>private , args: ()<br>
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
	 * @param \T|object $value
	 */
	public function __construct($value){}
}