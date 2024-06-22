<?php
namespace System\Runtime\InteropServices;
class SequenceMarshal extends \System\Object
{


	/**
	 * @param \System\Buffers\ReadOnlySequence_1 $sequence [generic: T]
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 &$startSegment [generic: T]
	 * @param \System\Int32& &$startIndex
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 &$endSegment [generic: T]
	 * @param \System\Int32& &$endIndex
	 * @return \System\Boolean|bool
	 */
	public static function TryGetReadOnlySequenceSegment($sequence, &$startSegment, &$startIndex, &$endSegment, &$endIndex){}
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 $sequence [generic: T]
	 * @param \System\ArraySegment_1 &$segment [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function TryGetArray($sequence, &$segment){}
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 $sequence [generic: T]
	 * @param \System\ReadOnlyMemory_1 &$memory [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function TryGetReadOnlyMemory($sequence, &$memory){}
	/**
	 * @param \System\Buffers\SequenceReader_1 $reader [generic: System\Byte]
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryRead($reader, &$value){}
}