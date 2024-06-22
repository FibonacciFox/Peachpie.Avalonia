<?php
namespace System\Threading;
final class WorkStealingQueue extends \System\Object
{

	/**
	 * @field
	 * @var \System\Object[]|array
	 */
	protected $m_array;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSteal;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public function LocalPush($obj){}
	private function LocalPush_HandleTailOverflow(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	public function LocalFindAndPop($obj){}
	/**
	 * @return \System\Object|object
	 */
	public function LocalPop(){}
	private function LocalPopCore(){}
	/**
	 * @param \System\Boolean& $missedSteal
	 * @return \System\Object|object
	 */
	public function TrySteal($missedSteal){}
	/**
	 */
	public function __construct(){}
}