<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SequenceReader_1Override {
	/**
	 * @deprecated
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryPeek_1 (&$value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $offset
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryPeek_2 ($offset, &$value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \T|object $delimiter
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadTo_1 (&$span, $delimiter, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \T|object $delimiter
	 * @param \T|object $delimiterEscape
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadTo_2 (&$span, $delimiter, $delimiterEscape, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @param \T|object $delimiter
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadTo_3 (&$sequence, $delimiter, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @param \T|object $delimiter
	 * @param \T|object $delimiterEscape
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadTo_4 (&$sequence, $delimiter, $delimiterEscape, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \System\ReadOnlySpan_1 $delimiter [generic: T]
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadTo_5 (&$span, $delimiter, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @param \System\ReadOnlySpan_1 $delimiter [generic: T]
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadTo_6 (&$sequence, $delimiter, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \T|object $delimiter
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryReadToSlow_1 (&$span, $delimiter, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \T|object $delimiter
	 * @param \T|object $delimiterEscape
	 * @param \System\Int32|int $index
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryReadToSlow_2 (&$span, $delimiter, $delimiterEscape, $index, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @param \T|object $delimiter
	 * @param \T|object $delimiterEscape
	 * @param \System\Int32|int $index
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryReadToSlow_3 (&$sequence, $delimiter, $delimiterEscape, $index, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \System\ReadOnlySpan_1 $delimiter [generic: T]
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryReadToSlow_4 (&$span, $delimiter, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 &$span [generic: T]
	 * @param \System\ReadOnlySpan_1 $delimiters [generic: T]
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadToAny_1 (&$span, $delimiters, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @param \System\ReadOnlySpan_1 $delimiters [generic: T]
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryReadToAny_2 (&$sequence, $delimiters, $advancePastDelimiter){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $values [generic: T]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function AdvancePastAny_1 ($values){}
	/**
	 * @deprecated
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function AdvancePastAny_2 ($value0, $value1, $value2, $value3){}
	/**
	 * @deprecated
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function AdvancePastAny_3 ($value0, $value1, $value2){}
	/**
	 * @deprecated
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function AdvancePastAny_4 ($value0, $value1){}
	/**
	 * @deprecated
	 * @param \T|object $next
	 * @param \System\Boolean|bool $advancePast
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsNext_1 ($next, $advancePast){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $next [generic: T]
	 * @param \System\Boolean|bool $advancePast
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsNext_2 ($next, $advancePast){}
}
final class SequenceReader_1 extends \System\ValueType
{
	use SequenceReader_1Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $End;
	/**
	 * @property
	 * @var \System\Buffers\ReadOnlySequence_1[T]
	 * @since readonly
	 */
	public $Sequence;
	/**
	 * @property
	 * @var \System\Buffers\ReadOnlySequence_1[T]
	 * @since readonly
	 */
	public $UnreadSequence;
	/**
	 * @property
	 * @var \System\SequencePosition
	 * @since readonly
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[T]
	 */
	public $CurrentSpan;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $CurrentSpanIndex;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[T]
	 * @since readonly
	 */
	public $UnreadSpan;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $Consumed;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Remaining;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @uses SequenceReader_1Override::TryPeek_1 <br>public , args: (&$value)<br>
	 * @uses SequenceReader_1Override::TryPeek_2 <br>public , args: ($offset, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryPeek (\override ...$args){}
	/**
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryRead(&$value){}
	/**
	 * @param \System\Int64|int $count
	 * @return \System\Void|void
	 */
	public function Rewind($count){}
	private function RetreatToPreviousSpan($consumed){}
	private function ResetReader(){}
	private function GetNextSpan(){}
	/**
	 * @param \System\Int64|int $count
	 * @return \System\Void|void
	 */
	public function Advance($count){}
	/**
	 * @param \System\Int64|int $count
	 * @return \System\Void|void
	 */
	protected function AdvanceCurrentSpan($count){}
	private function AdvanceToNextSpan($count){}
	/**
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function TryCopyTo($destination){}
	/**
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Boolean|bool
	 */
	protected function TryCopyMultisegment($destination){}
	/**
	 * @uses SequenceReader_1Override::TryReadTo_1 <br>public , args: (&$span, $delimiter, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadTo_2 <br>public , args: (&$span, $delimiter, $delimiterEscape, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadTo_3 <br>public , args: (&$sequence, $delimiter, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadTo_4 <br>public , args: (&$sequence, $delimiter, $delimiterEscape, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadTo_5 <br>public , args: (&$span, $delimiter, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadTo_6 <br>public , args: (&$sequence, $delimiter, $advancePastDelimiter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryReadTo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SequenceReader_1Override::TryReadToSlow_1 <br>private , args: (&$span, $delimiter, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadToSlow_2 <br>private , args: (&$span, $delimiter, $delimiterEscape, $index, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadToSlow_3 <br>private , args: (&$sequence, $delimiter, $delimiterEscape, $index, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadToSlow_4 <br>private , args: (&$span, $delimiter, $advancePastDelimiter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryReadToSlow (\override ...$args){}
	private function TryReadToInternal(&$sequence, $delimiter, $advancePastDelimiter, $skip){}
	/**
	 * @uses SequenceReader_1Override::TryReadToAny_1 <br>public , args: (&$span, $delimiters, $advancePastDelimiter)<br>
	 * @uses SequenceReader_1Override::TryReadToAny_2 <br>public , args: (&$sequence, $delimiters, $advancePastDelimiter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryReadToAny (\override ...$args){}
	private function TryReadToAnySlow(&$span, $delimiters, $advancePastDelimiter){}
	private function TryReadToAnyInternal(&$sequence, $delimiters, $advancePastDelimiter, $skip){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function TryReadExact($count, &$sequence){}
	/**
	 * @param \T|object $delimiter
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	public function TryAdvanceTo($delimiter, $advancePastDelimiter){}
	/**
	 * @param \System\ReadOnlySpan_1 $delimiters [generic: T]
	 * @param \System\Boolean|bool $advancePastDelimiter
	 * @return \System\Boolean|bool
	 */
	public function TryAdvanceToAny($delimiters, $advancePastDelimiter){}
	/**
	 * @param \T|object $value
	 * @return \System\Int64|int
	 */
	public function AdvancePast($value){}
	/**
	 * @uses SequenceReader_1Override::AdvancePastAny_1 <br>public , args: ($values)<br>
	 * @uses SequenceReader_1Override::AdvancePastAny_2 <br>public , args: ($value0, $value1, $value2, $value3)<br>
	 * @uses SequenceReader_1Override::AdvancePastAny_3 <br>public , args: ($value0, $value1, $value2)<br>
	 * @uses SequenceReader_1Override::AdvancePastAny_4 <br>public , args: ($value0, $value1)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function AdvancePastAny (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function AdvanceToEnd(){}
	/**
	 * @uses SequenceReader_1Override::IsNext_1 <br>public , args: ($next, $advancePast)<br>
	 * @uses SequenceReader_1Override::IsNext_2 <br>public , args: ($next, $advancePast)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsNext (\override ...$args){}
	private function IsNextSlow($next, $advancePast){}
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 $sequence [generic: T]
	 */
	public function __construct($sequence){}
}