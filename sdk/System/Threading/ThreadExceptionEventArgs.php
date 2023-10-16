<?php
namespace System\Threading;
/**
 */
class ThreadExceptionEventArgs extends \System\EventArgs
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
