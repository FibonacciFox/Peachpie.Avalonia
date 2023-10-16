<?php
namespace System\Threading\Tasks;
/**
 */
class UnobservedTaskExceptionEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_observed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Observed;
	/**
	 * @var \System\AggregateException
	 * @property
	 */
	public readonly $Exception;
	/**
	 * @return \System\Void|void
	 */
	public  function SetObserved(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Observed(){}
	/**
	 * @return \System\AggregateException
	 */
	public  function get_Exception(){}
}
