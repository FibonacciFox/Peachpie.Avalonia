<?php
namespace System\Buffers;
final class ReadOnlySequenceDebugView_1 extends \System\Object
{
	/**
	 * @property
	 * @var \System\Buffers\ReadOnlySequenceDebugView_1+ReadOnlySequenceDebugViewSegments[T]
	 * @since readonly
	 */
	public $BufferSegments;
	/**
	 * @property
	 * @var \T[]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 $sequence [generic: T]
	 */
	public function __construct($sequence){}
}