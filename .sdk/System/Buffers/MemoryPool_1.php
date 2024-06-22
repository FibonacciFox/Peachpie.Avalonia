<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MemoryPool_1Override {
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
}
class MemoryPool_1 extends \System\Object implements
	\System\IDisposable
{
	use MemoryPool_1Override;

	/**
	 * @property
	 * @var \System\Buffers\MemoryPool_1[T]
	 * @since readonly
	 */
	public $Shared;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxBufferSize;
	/**
	 * @param \System\Int32|int $minBufferSize
	 * @return \System\Buffers\IMemoryOwner_1[T]
	 */
	abstract public function Rent($minBufferSize);
	/**
	 * @uses MemoryPool_1Override::Dispose_1 <br>public , args: ()<br>
	 * @uses MemoryPool_1Override::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
}