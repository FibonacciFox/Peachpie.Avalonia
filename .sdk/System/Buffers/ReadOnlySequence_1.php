<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlySequence_1Override {
	/**
	 * @deprecated
	 * @param \System\Int64|int $start
	 * @param \System\Int64|int $length
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_1 ($start, $length){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $start
	 * @param \System\SequencePosition $end
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_2 ($start, $end){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition $start
	 * @param \System\Int64|int $length
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_3 ($start, $length){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_4 ($start, $length){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\SequencePosition $end
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_5 ($start, $end){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition $start
	 * @param \System\Int32|int $length
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_6 ($start, $length){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition $start
	 * @param \System\SequencePosition $end
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_7 ($start, $end){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition $start
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_8 ($start){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $start
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]public function Slice_9 ($start){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $offset
	 * @return \System\SequencePosition
	 */
	#[MethodOverride]public function GetPosition_1 ($offset){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $offset
	 * @param \System\SequencePosition $origin
	 * @return \System\SequencePosition
	 */
	#[MethodOverride]public function GetPosition_2 ($offset, $origin){}
	/**
	 * @deprecated
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]private function GetFirstSpan_1 (){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$first [generic: T]
	 * @param \System\SequencePosition& &$next
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function GetFirstSpan_2 (&$first, &$next){}
	/**
	 * @deprecated
	 * @param \System\Object|object $startObject
	 * @param \System\Boolean|bool $isMultiSegment
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]private function GetFirstSpanSlow_1 ($startObject, $isMultiSegment){}
	/**
	 * @deprecated
	 * @param \System\Object|object $startObject
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $endIndex
	 * @param \System\Boolean|bool $hasMultipleSegments
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]private static function GetFirstSpanSlow_2 ($startObject, $startIndex, $endIndex, $hasMultipleSegments){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $offset
	 * @param \System\ExceptionArgument $exceptionArgument
	 * @return \System\SequencePosition
	 */
	#[MethodOverride]protected function Seek_1 ($offset, $exceptionArgument){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition& &$start
	 * @param \System\Int64|int $offset
	 * @return \System\SequencePosition
	 */
	#[MethodOverride]private function Seek_2 (&$start, $offset){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition& &$position
	 * @param \System\Boolean|bool $positionIsNotNull
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function BoundsCheck_1 (&$position, $positionIsNotNull){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $sliceStartIndex
	 * @param \System\Object|object $sliceStartObject
	 * @param \System\UInt32 $sliceEndIndex
	 * @param \System\Object|object $sliceEndObject
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function BoundsCheck_2 ($sliceStartIndex, $sliceStartObject, $sliceEndIndex, $sliceEndObject){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition& &$start
	 * @param \System\SequencePosition& &$end
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]private function SliceImpl_1 (&$start, &$end){}
	/**
	 * @deprecated
	 * @param \System\SequencePosition& &$start
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	#[MethodOverride]private function SliceImpl_2 (&$start){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $start
	 * @param \System\UInt32 $end
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function InRange_1 ($value, $start, $end){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @param \System\UInt64 $start
	 * @param \System\UInt64 $end
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function InRange_2 ($value, $start, $end){}
	/**
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 $startSegment [generic: T]
	 * @param \System\Int32|int $startIndex
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 $endSegment [generic: T]
	 * @param \System\Int32|int $endIndex
	 */
	#[MethodOverride]public function __construct_1 ($startSegment, $startIndex, $endSegment, $endIndex){}
	/**
	 * @param \T $array
	 */
	#[MethodOverride]public function __construct_2 ($array){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_3 ($array, $start, $length){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 */
	#[MethodOverride]public function __construct_4 ($memory){}
}
final class ReadOnlySequence_1 extends \System\ValueType
{
	use ReadOnlySequence_1Override;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Buffers\ReadOnlySequence_1[T]
	 */
	public static $Empty;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEmpty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSingleSegment;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[T]
	 * @since readonly
	 */
	public $First;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[T]
	 * @since readonly
	 */
	public $FirstSpan;
	/**
	 * @property
	 * @var \System\SequencePosition
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\SequencePosition
	 * @since readonly
	 */
	public $End;
	/**
	 * @uses ReadOnlySequence_1Override::Slice_1 <br>public , args: ($start, $length)<br>
	 * @uses ReadOnlySequence_1Override::Slice_2 <br>public , args: ($start, $end)<br>
	 * @uses ReadOnlySequence_1Override::Slice_3 <br>public , args: ($start, $length)<br>
	 * @uses ReadOnlySequence_1Override::Slice_4 <br>public , args: ($start, $length)<br>
	 * @uses ReadOnlySequence_1Override::Slice_5 <br>public , args: ($start, $end)<br>
	 * @uses ReadOnlySequence_1Override::Slice_6 <br>public , args: ($start, $length)<br>
	 * @uses ReadOnlySequence_1Override::Slice_7 <br>public , args: ($start, $end)<br>
	 * @uses ReadOnlySequence_1Override::Slice_8 <br>public , args: ($start)<br>
	 * @uses ReadOnlySequence_1Override::Slice_9 <br>public , args: ($start)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Buffers\ReadOnlySequence_1|mixed|\override
	 */
	#[MethodOverridePublic]function Slice (\override ...$args){}
	/**
	 * @return \System\Buffers\ReadOnlySequence_1+Enumerator[T]
	 */
	public function GetEnumerator(){}
	/**
	 * @uses ReadOnlySequence_1Override::GetPosition_1 <br>public , args: ($offset)<br>
	 * @uses ReadOnlySequence_1Override::GetPosition_2 <br>public , args: ($offset, $origin)<br>
	 * @var mixed|\override ...$args
	 * @return \System\SequencePosition|mixed|\override
	 */
	#[MethodOverridePublic]function GetPosition (\override ...$args){}
	/**
	 * @param \System\SequencePosition $position
	 * @return \System\Int64|int
	 */
	public function GetOffset($position){}
	/**
	 * @param \System\SequencePosition& $position
	 * @param \System\ReadOnlyMemory_1 &$memory [generic: T]
	 * @param \System\Boolean|bool $advance
	 * @return \System\Boolean|bool
	 */
	public function TryGet($position, &$memory, $advance){}
	/**
	 * @param \System\SequencePosition& &$position
	 * @param \System\ReadOnlyMemory_1 &$memory [generic: T]
	 * @param \System\SequencePosition& &$next
	 * @return \System\Boolean|bool
	 */
	protected function TryGetBuffer(&$position, &$memory, &$next){}
	private function GetFirstBuffer(){}
	private function GetFirstBufferSlow($startObject, $isMultiSegment){}
	/**
	 * @uses ReadOnlySequence_1Override::GetFirstSpan_1 <br>private , args: ()<br>
	 * @uses ReadOnlySequence_1Override::GetFirstSpan_2 <br>protected , args: (&$first, &$next)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetFirstSpan (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlySequence_1Override::GetFirstSpanSlow_1 <br>private , args: ($startObject, $isMultiSegment)<br>
	 * @uses ReadOnlySequence_1Override::GetFirstSpanSlow_2 <br>private , args: ($startObject, $startIndex, $endIndex, $hasMultipleSegments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePrivate]function GetFirstSpanSlow (\override ...$args){}
	/**
	 * @uses ReadOnlySequence_1Override::Seek_1 <br>protected , args: ($offset, $exceptionArgument)<br>
	 * @uses ReadOnlySequence_1Override::Seek_2 <br>private , args: (&$start, $offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\SequencePosition|mixed|\override
	 */
	#[MethodOverrideProtected]function Seek (\override ...$args){}
	private static function SeekMultiSegment($currentSegment, $endObject, $endIndex, $offset, $argument){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlySequence_1Override::BoundsCheck_1 <br>private , args: (&$position, $positionIsNotNull)<br>
	 * @uses ReadOnlySequence_1Override::BoundsCheck_2 <br>private , args: ($sliceStartIndex, $sliceStartObject, $sliceEndIndex, $sliceEndObject)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function BoundsCheck (\override ...$args){}
	private static function GetEndPosition($startSegment, $startObject, $startIndex, $endObject, $endIndex, $length){}
	private function GetSequenceType(){}
	private static function GetIndex($Integer){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlySequence_1Override::SliceImpl_1 <br>private , args: (&$start, &$end)<br>
	 * @uses ReadOnlySequence_1Override::SliceImpl_2 <br>private , args: (&$start)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Buffers\ReadOnlySequence_1|mixed|\override
	 */
	#[MethodOverridePrivate]function SliceImpl (\override ...$args){}
	private function GetLength(){}
	/**
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 &$startSegment [generic: T]
	 * @param \System\Int32& &$startIndex
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 &$endSegment [generic: T]
	 * @param \System\Int32& &$endIndex
	 * @return \System\Boolean|bool
	 */
	protected function TryGetReadOnlySequenceSegment(&$startSegment, &$startIndex, &$endSegment, &$endIndex){}
	/**
	 * @param \System\ArraySegment_1 &$segment [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected function TryGetArray(&$segment){}
	/**
	 * @param \System\String& &$text
	 * @param \System\Int32& &$start
	 * @param \System\Int32& &$length
	 * @return \System\Boolean|bool
	 */
	protected function TryGetString(&$text, &$start, &$length){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ReadOnlySequence_1Override::InRange_1 <br>private , args: ($value, $start, $end)<br>
	 * @uses ReadOnlySequence_1Override::InRange_2 <br>private , args: ($value, $start, $end)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function InRange (\override ...$args){}
	/**
	 * @uses ReadOnlySequence_1Override::__construct_1 <br>public , args: ($startSegment, $startIndex, $endSegment, $endIndex)<br>
	 * @uses ReadOnlySequence_1Override::__construct_2 <br>public , args: ($array)<br>
	 * @uses ReadOnlySequence_1Override::__construct_3 <br>public , args: ($array, $start, $length)<br>
	 * @uses ReadOnlySequence_1Override::__construct_4 <br>public , args: ($memory)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}