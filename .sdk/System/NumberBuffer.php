<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DiyFpOverride {
	/**
	 * @param \System\Number+NumberBufferKind $kind
	 * @param \System\Byte* $digits
	 * @param \System\Int32|int $digitsLength
	 */
	#[MethodOverride]public function __construct_1 ($kind, $digits, $digitsLength){}
	/**
	 * @param \System\Number+NumberBufferKind $kind
	 * @param \System\Span_1 $digits [generic: System\Byte]
	 */
	#[MethodOverride]public function __construct_2 ($kind, $digits){}
}
final class NumberBuffer extends \System\ValueType
{
	use DiyFpOverride;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $DigitsCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Scale;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $IsNegative;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $HasNonZeroTail;
	/**
	 * @field
	 * @var \System\Number+NumberBufferKind
	 */
	public $Kind;
	/**
	 * @field
	 * @var \System\Span_1[System\Byte]
	 */
	public $Digits;
	/**
	 * @return \System\Byte*
	 */
	public function GetDigitsPointer(){}
	/**
	 * @uses NumberBufferOverride::__construct_1 <br>public , args: ($kind, $digits, $digitsLength)<br>
	 * @uses NumberBufferOverride::__construct_2 <br>public , args: ($kind, $digits)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}