<?php
namespace System\Runtime\ExceptionServices;
/**
 */
class FirstChanceExceptionEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $Exception;
	/**
	 * @return \System\Exception
	 */
	public  function get_Exception(){}
}
