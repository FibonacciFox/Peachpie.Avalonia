<?php
namespace System\Buffers;
final class ThreadLocalArray extends \System\ValueType
{

	/**
	 * @field
	 * @var \T[]
	 */
	public $Array;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $MillisecondsTimeStamp;
	/**
	 * @param \T $array
	 */
	public function __construct($array){}
}