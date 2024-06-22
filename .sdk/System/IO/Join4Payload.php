<?php
namespace System\IO;
final class Join4Payload extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Char*
	 */
	public $First;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public $FirstLength;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char*
	 */
	public $Second;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public $SecondLength;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char*
	 */
	public $Third;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public $ThirdLength;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Char*
	 */
	public $Fourth;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public $FourthLength;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte
	 */
	public $Separators;
	/**
	 * @param \System\Char* $first
	 * @param \System\Int32|int $firstLength
	 * @param \System\Char* $second
	 * @param \System\Int32|int $secondLength
	 * @param \System\Char* $third
	 * @param \System\Int32|int $thirdLength
	 * @param \System\Char* $fourth
	 * @param \System\Int32|int $fourthLength
	 * @param \System\Byte $separators
	 */
	public function __construct($first, $firstLength, $second, $secondLength, $third, $thirdLength, $fourth, $fourthLength, $separators){}
}