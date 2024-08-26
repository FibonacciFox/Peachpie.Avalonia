<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CalendarOverride {
	/**
	 * @param \System\DateTime $day
	 */
	#[MethodOverride]public function __construct_1 ($day){}
	/**
	 * @param \System\DateTime $start
	 * @param \System\DateTime $end
	 */
	#[MethodOverride]public function __construct_2 ($start, $end){}
}
final class CalendarDateRange extends \System\Object
{
	use CalendarOverride;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $End;
	/**
	 * @param \Avalonia\Controls\CalendarDateRange $range
	 * @return \System\Boolean|bool
	 */
	protected function ContainsAny($range){}
	/**
	 * @uses CalendarDateRangeOverride::__construct_1 <br>public , args: ($day)<br>
	 * @uses CalendarDateRangeOverride::__construct_2 <br>public , args: ($start, $end)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}