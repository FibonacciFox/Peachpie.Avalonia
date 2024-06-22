<?php
namespace Avalonia\Controls;
class TimePickerSelectedValueChangedEventArgs extends \System\Object
{

	/**
	 * @property
	 * @var \System\Nullable_1[System\TimeSpan]
	 * @since readonly
	 */
	public $OldTime;
	/**
	 * @property
	 * @var \System\Nullable_1[System\TimeSpan]
	 * @since readonly
	 */
	public $NewTime;
	/**
	 * @param \System\Nullable_1 $old [generic: System\TimeSpan]
	 * @param \System\Nullable_1 $newT [generic: System\TimeSpan]
	 */
	public function __construct($old, $newT){}
}