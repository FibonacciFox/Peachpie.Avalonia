<?php
namespace System\Buffers;
final class ArrayMemoryPoolBuffer extends \System\Object implements
	\System\Buffers\IMemoryOwner_1,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Memory_1[T]
	 * @since readonly
	 */
	public $Memory;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Int32|int $size
	 */
	public function __construct($size){}
}