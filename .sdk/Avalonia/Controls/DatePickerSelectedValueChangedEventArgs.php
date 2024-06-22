<?php
namespace Avalonia\Controls;
class DatePickerSelectedValueChangedEventArgs extends \System\Object
{

	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTimeOffset]
	 * @since readonly
	 */
	public $NewDate;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTimeOffset]
	 * @since readonly
	 */
	public $OldDate;
	/**
	 * @param \System\Nullable_1 $oldDate [generic: System\DateTimeOffset]
	 * @param \System\Nullable_1 $newDate [generic: System\DateTimeOffset]
	 */
	public function __construct($oldDate, $newDate){}
}