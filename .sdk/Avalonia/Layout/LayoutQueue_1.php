<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LayoutQueue_1Override {
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
class LayoutQueue_1 extends \System\Object implements
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	use LayoutQueue_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @uses LayoutQueue_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses LayoutQueue_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \T|object
	 */
	public function Dequeue(){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Enqueue($item){}
	/**
	 * @param \System\Int32|int $maxEnqueueCountPerLoop
	 * @return \System\Void|void
	 */
	public function BeginLoop($maxEnqueueCountPerLoop){}
	/**
	 * @return \System\Void|void
	 */
	public function EndLoop(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Func_2 $shouldEnqueue [generic: T,System\Boolean]
	 */
	public function __construct($shouldEnqueue){}
}