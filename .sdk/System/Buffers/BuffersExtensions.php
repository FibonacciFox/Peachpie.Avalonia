<?php
namespace System\Buffers;
class BuffersExtensions extends \System\Object
{

	/**
	 * @param \System\Buffers\ReadOnlySequence_1 &$source [generic: T]
	 * @param \T|object $value
	 * @return \System\Nullable_1[System\SequencePosition]
	 */
	public static function PositionOf(&$source, $value){}
	private static function PositionOfMultiSegment(&$source, $value){}
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 &$source [generic: T]
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Void|void
	 */
	public static function CopyTo(&$source, $destination){}
	private static function CopyToMultiSegment(&$sequence, $destination){}
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @return \T[]
	 */
	public static function ToArray(&$sequence){}
	/**
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: T]
	 * @param \System\ReadOnlySpan_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	public static function Write($writer, $value){}
	private static function WriteMultiSegment($writer, &$source, $destination){}
}