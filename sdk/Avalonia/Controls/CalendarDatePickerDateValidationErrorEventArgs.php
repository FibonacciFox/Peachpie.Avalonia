<?php
namespace Avalonia\Controls;
/**
 */
class CalendarDatePickerDateValidationErrorEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Exception
	 * @property
	 */
	public $Exception;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Text;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ThrowException;
	/**
	 * @return \System\Exception
	 */
	public  function get_Exception(){}
	/**
	 * @param \System\Exception $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Exception($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Text($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ThrowException(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ThrowException($value){}
}
