<?php
namespace System;
class UnhandledExceptionEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $ExceptionObject;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTerminating;
	/**
	 * @param \System\Object|object $exception
	 * @param \System\Boolean|bool $isTerminating
	 */
	public function __construct($exception, $isTerminating){}
}