<?php
namespace Avalonia\Controls;
class CalendarDatePickerDateValidationErrorEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\Exception
	 */
	public $Exception;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Text;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ThrowException;
	/**
	 * @param \System\Exception $exception
	 * @param \System\String|string $text
	 */
	public function __construct($exception, $text){}
}