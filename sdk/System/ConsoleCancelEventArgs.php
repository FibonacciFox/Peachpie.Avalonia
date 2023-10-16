<?php
namespace System;
/**
 */
class ConsoleCancelEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @var \System\ConsoleSpecialKey
	 * @property
	 */
	public readonly $SpecialKey;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Cancel(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Cancel($value){}
	/**
	 * @return \System\ConsoleSpecialKey
	 */
	public  function get_SpecialKey(){}
}
