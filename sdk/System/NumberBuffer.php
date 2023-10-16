<?php
namespace System;
/**
 */
class NumberBuffer extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $DigitsCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Scale;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $IsNegative;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $HasNonZeroTail;
	/**
	 * @var \System\Number+NumberBufferKind
	 * @field
	 */
	public $Kind;
	/**
	 * @var \System\Span_1[System\Byte]
	 * @field
	 */
	public $Digits;
	/**
	 * @return \System\Byte*
	 */
	public  function GetDigitsPointer(){}
}
