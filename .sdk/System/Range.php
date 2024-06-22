<?php
namespace System;
final class Range extends \System\ValueType implements
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
	 * @var \System\Range
	 * @since readonly
	 */
	public $All;
	/**
	 * @param \System\Index $start
	 * @return \System\Range
	 */
	public static function StartAt($start){}
	/**
	 * @param \System\Index $end
	 * @return \System\Range
	 */
	public static function EndAt($end){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\ValueTuple_2[System\Int32,System\Int32]
	 */
	public function GetOffsetAndLength($length){}
	/**
	 * @param \System\Index $start
	 * @param \System\Index $end
	 */
	public function __construct($start, $end){}
}