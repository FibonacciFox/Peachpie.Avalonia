<?php
namespace System\Threading;
class ThreadExceptionEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @param \System\Exception $t
	 */
	public function __construct($t){}
}