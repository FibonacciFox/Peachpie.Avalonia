<?php
namespace System\Runtime\ExceptionServices;
class FirstChanceExceptionEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @param \System\Exception $exception
	 */
	public function __construct($exception){}
}