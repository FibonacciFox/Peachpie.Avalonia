<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $repeatCount
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_1 ($value, $repeatCount){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $charCount
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_2 ($value, $startIndex, $charCount){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_4 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_6 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_16 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_17 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_18 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_19 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_20 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_21 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_22 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $value [generic: System\Char]
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_23 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder+AppendInterpolatedStringHandler& $handler
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_24 ($handler){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\Text\StringBuilder+AppendInterpolatedStringHandler& $handler
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_25 ($provider, $handler){}
	/**
	 * @deprecated
	 * @param \System\Char* $value
	 * @param \System\Int32|int $valueCount
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Append_26 ($value, $valueCount){}
	/**
	 * @deprecated
	 * @param \System\Char& $value
	 * @param \System\Int32|int $valueCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Append_27 ($value, $valueCount){}
	/**
	 * @deprecated
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendLine_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendLine_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder+AppendInterpolatedStringHandler& $handler
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendLine_3 ($handler){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\Text\StringBuilder+AppendInterpolatedStringHandler& $handler
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendLine_4 ($provider, $handler){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Char $destination
	 * @param \System\Int32|int $destinationIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($sourceIndex, $destination, $destinationIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($sourceIndex, $destination, $count){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\String|string $value
	 * @param \System\Int32|int $count
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_1 ($index, $value, $count){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Int32|int $count
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]private function Insert_2 ($index, $value, $count){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\String|string $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_3 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Boolean|bool $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_4 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\SByte $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_5 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Byte $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_6 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int16 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_7 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Char $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_8 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Char $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_9 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $charCount
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_10 ($index, $value, $startIndex, $charCount){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_11 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Int64|int $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_12 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Single $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_13 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Double|double $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_14 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Decimal $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_15 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\UInt16 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_16 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\UInt32 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_17 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\UInt64 $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_18 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_19 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Insert_20 ($index, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Char& $value
	 * @param \System\Int32|int $valueCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Insert_21 ($index, $value, $valueCount){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Remove_1 ($startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Text\StringBuilder& &$chunk
	 * @param \System\Int32& &$indexInChunk
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Remove_2 ($startIndex, $count, &$chunk, &$indexInChunk){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Object ...$values
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendJoin_1 ($separator, ...$values){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendJoin_2 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\String ...$values
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendJoin_3 ($separator, ...$values){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Object ...$values
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendJoin_4 ($separator, ...$values){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendJoin_5 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\String ...$values
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendJoin_6 ($separator, ...$values){}
	/**
	 * @deprecated
	 * @param \System\Char& $separator
	 * @param \System\Int32|int $separatorLength
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]private function AppendJoinCore_1 ($separator, $separatorLength, $values){}
	/**
	 * @deprecated
	 * @param \System\Char& $separator
	 * @param \System\Int32|int $separatorLength
	 * @param \T $values
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]private function AppendJoinCore_2 ($separator, $separatorLength, $values){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_1 ($format, $arg0){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_2 ($format, $arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_3 ($format, $arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object ...$args
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_4 ($format, ...$args){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_5 ($provider, $format, $arg0){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_6 ($provider, $format, $arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_7 ($provider, $format, $arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object ...$args
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function AppendFormat_8 ($provider, $format, ...$args){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Replace_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Replace_2 ($oldValue, $newValue, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Char $oldChar
	 * @param \System\Char $newChar
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Replace_3 ($oldChar, $newChar){}
	/**
	 * @deprecated
	 * @param \System\Char $oldChar
	 * @param \System\Char $newChar
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Text\StringBuilder
	 */
	#[MethodOverride]public function Replace_4 ($oldChar, $newChar, $startIndex, $count){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\String|string $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
	/**
	 * @param \System\String|string $value
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_4 ($value, $capacity){}
	/**
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_5 ($value, $startIndex, $length, $capacity){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Int32|int $maxCapacity
	 */
	#[MethodOverride]public function __construct_6 ($capacity, $maxCapacity){}
}
final class StringBuilder extends \System\Object implements
	\System\Runtime\Serialization\ISerializable
{
	use StringBuilderOverride;

	/**
	 * @field
	 * @var \System\Char[]
	 */
	protected $m_ChunkChars;
	/**
	 * @field
	 * @var \System\Text\StringBuilder
	 */
	protected $m_ChunkPrevious;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_ChunkLength;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_ChunkOffset;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_MaxCapacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxCapacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Char
	 */
	public $Chars;
	private function GetReplaceBufferCapacity($requiredCapacity){}
	/**
	 * @param \System\Char* $newBuffer
	 * @param \System\Int32|int $newLength
	 * @return \System\Void|void
	 */
	protected function ReplaceBufferInternal($newBuffer, $newLength){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected function ReplaceBufferUtf8Internal($source){}
	/**
	 * @param \System\SByte* $newBuffer
	 * @param \System\Int32|int $newLength
	 * @return \System\Void|void
	 */
	protected function ReplaceBufferAnsiInternal($newBuffer, $newLength){}
	/**
	 * @param \System\IntPtr $dest
	 * @param \System\Int32|int $charLen
	 * @return \System\Void|void
	 */
	protected function InternalCopy($dest, $charLen){}
	private function GetObjectData($info, $context){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public function EnsureCapacity($capacity){}
	/**
	 * @return \System\Text\StringBuilder
	 */
	public function Clear(){}
	/**
	 * @return \System\Text\StringBuilder+ChunkEnumerator
	 */
	public function GetChunks(){}
	/**
	 * @uses StringBuilderOverride::Append_1 <br>public , args: ($value, $repeatCount)<br>
	 * @uses StringBuilderOverride::Append_2 <br>public , args: ($value, $startIndex, $charCount)<br>
	 * @uses StringBuilderOverride::Append_3 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_4 <br>public , args: ($value, $startIndex, $count)<br>
	 * @uses StringBuilderOverride::Append_5 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_6 <br>public , args: ($value, $startIndex, $count)<br>
	 * @uses StringBuilderOverride::Append_7 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_8 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_9 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_10 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_11 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_12 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_13 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_14 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_15 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_16 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_17 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_18 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_19 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_20 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_21 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_22 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_23 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::Append_24 <br>public , args: ($handler)<br>
	 * @uses StringBuilderOverride::Append_25 <br>public , args: ($provider, $handler)<br>
	 * @uses StringBuilderOverride::Append_26 <br>public , args: ($value, $valueCount)<br>
	 * @uses StringBuilderOverride::Append_27 <br>private , args: ($value, $valueCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Append (\override ...$args){}
	private function AppendCore($value, $startIndex, $count){}
	/**
	 * @uses StringBuilderOverride::AppendLine_1 <br>public , args: ()<br>
	 * @uses StringBuilderOverride::AppendLine_2 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::AppendLine_3 <br>public , args: ($handler)<br>
	 * @uses StringBuilderOverride::AppendLine_4 <br>public , args: ($provider, $handler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function AppendLine (\override ...$args){}
	/**
	 * @uses StringBuilderOverride::CopyTo_1 <br>public , args: ($sourceIndex, $destination, $destinationIndex, $count)<br>
	 * @uses StringBuilderOverride::CopyTo_2 <br>public , args: ($sourceIndex, $destination, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses StringBuilderOverride::Insert_1 <br>public , args: ($index, $value, $count)<br>
	 * @uses StringBuilderOverride::Insert_2 <br>private , args: ($index, $value, $count)<br>
	 * @uses StringBuilderOverride::Insert_3 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_4 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_5 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_6 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_7 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_8 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_9 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_10 <br>public , args: ($index, $value, $startIndex, $charCount)<br>
	 * @uses StringBuilderOverride::Insert_11 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_12 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_13 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_14 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_15 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_16 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_17 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_18 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_19 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_20 <br>public , args: ($index, $value)<br>
	 * @uses StringBuilderOverride::Insert_21 <br>private , args: ($index, $value, $valueCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Insert (\override ...$args){}
	/**
	 * @uses StringBuilderOverride::Remove_1 <br>public , args: ($startIndex, $length)<br>
	 * @uses StringBuilderOverride::Remove_2 <br>private , args: ($startIndex, $count, &$chunk, &$indexInChunk)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	private function AppendSpanFormattable($value){}
	/**
	 * @uses StringBuilderOverride::AppendJoin_1 <br>public , args: ($separator, ...$values)<br>
	 * @uses StringBuilderOverride::AppendJoin_2 <br>public , args: ($separator, $values)<br>
	 * @uses StringBuilderOverride::AppendJoin_3 <br>public , args: ($separator, ...$values)<br>
	 * @uses StringBuilderOverride::AppendJoin_4 <br>public , args: ($separator, ...$values)<br>
	 * @uses StringBuilderOverride::AppendJoin_5 <br>public , args: ($separator, $values)<br>
	 * @uses StringBuilderOverride::AppendJoin_6 <br>public , args: ($separator, ...$values)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function AppendJoin (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringBuilderOverride::AppendJoinCore_1 <br>private , args: ($separator, $separatorLength, $values)<br>
	 * @uses StringBuilderOverride::AppendJoinCore_2 <br>private , args: ($separator, $separatorLength, $values)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|mixed|\override
	 */
	#[MethodOverridePrivate]function AppendJoinCore (\override ...$args){}
	private function InsertSpanFormattable($index, $value){}
	/**
	 * @uses StringBuilderOverride::AppendFormat_1 <br>public , args: ($format, $arg0)<br>
	 * @uses StringBuilderOverride::AppendFormat_2 <br>public , args: ($format, $arg0, $arg1)<br>
	 * @uses StringBuilderOverride::AppendFormat_3 <br>public , args: ($format, $arg0, $arg1, $arg2)<br>
	 * @uses StringBuilderOverride::AppendFormat_4 <br>public , args: ($format, ...$args)<br>
	 * @uses StringBuilderOverride::AppendFormat_5 <br>public , args: ($provider, $format, $arg0)<br>
	 * @uses StringBuilderOverride::AppendFormat_6 <br>public , args: ($provider, $format, $arg0, $arg1)<br>
	 * @uses StringBuilderOverride::AppendFormat_7 <br>public , args: ($provider, $format, $arg0, $arg1, $arg2)<br>
	 * @uses StringBuilderOverride::AppendFormat_8 <br>public , args: ($provider, $format, ...$args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function AppendFormat (\override ...$args){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\ReadOnlySpan_1 $args [generic: System\Object]
	 * @return \System\Text\StringBuilder
	 */
	protected function AppendFormatHelper($provider, $format, $args){}
	/**
	 * @uses StringBuilderOverride::Replace_1 <br>public , args: ($oldValue, $newValue)<br>
	 * @uses StringBuilderOverride::Replace_2 <br>public , args: ($oldValue, $newValue, $startIndex, $count)<br>
	 * @uses StringBuilderOverride::Replace_3 <br>public , args: ($oldChar, $newChar)<br>
	 * @uses StringBuilderOverride::Replace_4 <br>public , args: ($oldChar, $newChar, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\StringBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function Replace (\override ...$args){}
	private function AppendWithExpansion($value, $valueCount){}
	private function ReplaceAllInChunk($replacements, $sourceChunk, $removeCount, $value){}
	private function StartsWith($chunk, $indexInChunk, $count, $value){}
	private function ReplaceInPlaceAtChunk($chunk, $indexInChunk, $value, $count){}
	private function FindChunkForIndex($index){}
	private function Next($chunk){}
	private function ExpandByABlock($minBlockCharCount){}
	private function MakeRoom($index, $count, &$chunk, &$indexInChunk, $doNotMoveFollowingChars){}
	/**
	 * @uses StringBuilderOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StringBuilderOverride::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses StringBuilderOverride::__construct_3 <br>public , args: ($value)<br>
	 * @uses StringBuilderOverride::__construct_4 <br>public , args: ($value, $capacity)<br>
	 * @uses StringBuilderOverride::__construct_5 <br>public , args: ($value, $startIndex, $length, $capacity)<br>
	 * @uses StringBuilderOverride::__construct_6 <br>public , args: ($capacity, $maxCapacity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}