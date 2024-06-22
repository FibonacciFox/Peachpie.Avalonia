<?php
namespace System\Text\Unicode;
class Utf8 extends \System\Object
{


	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$charsRead
	 * @param \System\Int32& &$bytesWritten
	 * @param \System\Boolean|bool $replaceInvalidSequences
	 * @param \System\Boolean|bool $isFinalBlock
	 * @return \System\Buffers\OperationStatus
	 */
	public static function FromUtf16($source, $destination, &$charsRead, &$bytesWritten, $replaceInvalidSequences, $isFinalBlock){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$bytesRead
	 * @param \System\Int32& &$charsWritten
	 * @param \System\Boolean|bool $replaceInvalidSequences
	 * @param \System\Boolean|bool $isFinalBlock
	 * @return \System\Buffers\OperationStatus
	 */
	public static function ToUtf16($source, $destination, &$bytesRead, &$charsWritten, $replaceInvalidSequences, $isFinalBlock){}
}