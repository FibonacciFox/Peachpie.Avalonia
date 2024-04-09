<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PooledInlineList_1Override {
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\PooledInlineList_1
	 */
	#[MethodOverride]public function GetEnumerator_3 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Object|object $rawState
	 */
	#[MethodOverride]public function __construct_2 ($rawState){}
}
final class PooledInlineList_1 extends \System\ValueType implements
	\System\IDisposable,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use PooledInlineList_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	private function ConvertToList(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function EnsureCapacity($count){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses PooledInlineList_1Override::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses PooledInlineList_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses PooledInlineList_1Override::GetEnumerator_3 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\Generic\IEnumerator_1|\Avalonia\Utilities\PooledInlineList_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Object|object
	 */
	public function TransferRawState(){}
	/**
	 * @uses PooledInlineList_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses PooledInlineList_1Override::__construct_2 <br>public , args: ($rawState)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}