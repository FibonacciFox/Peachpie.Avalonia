<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThrowHelperOverride {
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 $startSegment [generic: T]
	 * @param \System\Int32|int $startIndex
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 $endSegment [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowArgumentValidationException_1 ($startSegment, $startIndex, $endSegment){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $start
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowArgumentValidationException_2 ($array, $start){}
	/**
	 * @deprecated
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 $startSegment [generic: T]
	 * @param \System\Int32|int $startIndex
	 * @param \System\Buffers\ReadOnlySequenceSegment_1 $endSegment [generic: T]
	 * @return \System\Exception
	 */
	#[MethodOverride]private static function CreateArgumentValidationException_1 ($startSegment, $startIndex, $endSegment){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $start
	 * @return \System\Exception
	 */
	#[MethodOverride]private static function CreateArgumentValidationException_2 ($array, $start){}
}
class ThrowHelper extends \System\Object
{
	use ThrowHelperOverride;


	/**
	 * @param \System\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentNullException($argument){}
	private static function CreateArgumentNullException($argument){}
	/**
	 * @param \System\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentOutOfRangeException($argument){}
	private static function CreateArgumentOutOfRangeException($argument){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException(){}
	private static function CreateInvalidOperationException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_EndPositionNotReached(){}
	private static function CreateInvalidOperationException_EndPositionNotReached(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentOutOfRangeException_PositionOutOfRange(){}
	private static function CreateArgumentOutOfRangeException_PositionOutOfRange(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentOutOfRangeException_OffsetOutOfRange(){}
	private static function CreateArgumentOutOfRangeException_OffsetOutOfRange(){}
	/**
	 * @uses ThrowHelperOverride::ThrowArgumentValidationException_1 <br>public , args: ($startSegment, $startIndex, $endSegment)<br>
	 * @uses ThrowHelperOverride::ThrowArgumentValidationException_2 <br>public , args: ($array, $start)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThrowArgumentValidationException (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ThrowHelperOverride::CreateArgumentValidationException_1 <br>private , args: ($startSegment, $startIndex, $endSegment)<br>
	 * @uses ThrowHelperOverride::CreateArgumentValidationException_2 <br>private , args: ($array, $start)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Exception|mixed|\override
	 */
	#[MethodOverridePrivate]function CreateArgumentValidationException (\override ...$args){}
	/**
	 * @param \System\Int64|int $start
	 * @return \System\Void|void
	 */
	public static function ThrowStartOrEndArgumentValidationException($start){}
	private static function CreateStartOrEndArgumentValidationException($start){}
}