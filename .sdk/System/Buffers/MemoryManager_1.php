<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MemoryManager_1Override {
	/**
	 * @deprecated
	 * @param \System\Int32|int $length
	 * @return \System\Memory_1
	 */
	#[MethodOverride]protected function CreateMemory_1 ($length){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Memory_1
	 */
	#[MethodOverride]protected function CreateMemory_2 ($start, $length){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
}
class MemoryManager_1 extends \System\Object implements
	\System\Buffers\IMemoryOwner_1,
	\System\IDisposable,
	\System\Buffers\IPinnable
{
	use MemoryManager_1Override;

	/**
	 * @property
	 * @var \System\Memory_1[T]
	 * @since readonly
	 */
	public $Memory;
	/**
	 * @return \System\Span_1[T]
	 */
	abstract public function GetSpan();
	/**
	 * @param \System\Int32|int $elementIndex
	 * @return \System\Buffers\MemoryHandle
	 */
	abstract public function Pin($elementIndex);
	/**
	 * @return \System\Void|void
	 */
	abstract public function Unpin();
	/**
	 * @uses MemoryManager_1Override::CreateMemory_1 <br>protected , args: ($length)<br>
	 * @uses MemoryManager_1Override::CreateMemory_2 <br>protected , args: ($start, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Memory_1|mixed|\override
	 */
	#[MethodOverrideProtected]function CreateMemory (\override ...$args){}
	/**
	 * @param \System\ArraySegment_1 &$segment [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected function TryGetArray(&$segment){}
	/**
	 * @uses MemoryManager_1Override::Dispose_1 <br>private , args: ()<br>
	 * @uses MemoryManager_1Override::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Dispose (\override ...$args){}
}