<?php
namespace System\IO;
/**
 */
class Join4Payload extends \System\ValueType
{
	/**
	 * @var \System\Char*
	 * @field
	 */
	public readonly $First;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $FirstLength;
	/**
	 * @var \System\Char*
	 * @field
	 */
	public readonly $Second;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $SecondLength;
	/**
	 * @var \System\Char*
	 * @field
	 */
	public readonly $Third;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $ThirdLength;
	/**
	 * @var \System\Char*
	 * @field
	 */
	public readonly $Fourth;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $FourthLength;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public readonly $Separators;
}
