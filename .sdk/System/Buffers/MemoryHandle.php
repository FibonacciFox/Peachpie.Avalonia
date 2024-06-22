<?php
namespace System\Buffers;
final class MemoryHandle extends \System\ValueType implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Void*
	 * @since readonly
	 */
	public $Pointer;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Void* $pointer
	 * @param \System\Runtime\InteropServices\GCHandle $handle
	 * @param \System\Buffers\IPinnable $pinnable
	 */
	public function __construct($pointer, $handle, $pinnable){}
}