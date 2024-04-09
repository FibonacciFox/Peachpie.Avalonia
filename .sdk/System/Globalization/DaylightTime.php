<?php
namespace System\Globalization;
class DaylightTime extends \System\Object
{
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $End;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $Delta;
	/**
	 * @param \System\DateTime $start
	 * @param \System\DateTime $end
	 * @param \System\TimeSpan $delta
	 */
	public function __construct($start, $end, $delta){}
}