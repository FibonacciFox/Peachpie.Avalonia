<?php
namespace System;
final class Index extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Index
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Index
	 * @since readonly
	 */
	public $End;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFromEnd;
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Index
	 */
	public static function FromStart($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Index
	 */
	public static function FromEnd($value){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	public function GetOffset($length){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Index
	 */
	public static function op_Implicit($value){}
	private function ToStringFromEnd(){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Boolean|bool $fromEnd
	 */
	public function __construct($value, $fromEnd){}
}