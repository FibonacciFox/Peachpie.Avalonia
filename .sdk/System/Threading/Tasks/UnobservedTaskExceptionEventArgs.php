<?php
namespace System\Threading\Tasks;
class UnobservedTaskExceptionEventArgs extends \System\EventArgs
{

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_observed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Observed;
	/**
	 * @property
	 * @var \System\AggregateException
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @return \System\Void|void
	 */
	public function SetObserved(){}
	/**
	 * @param \System\AggregateException $exception
	 */
	public function __construct($exception){}
}