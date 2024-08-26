<?php
namespace System\Threading;
final class ThreadCounts extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int16
	 */
	public $NumProcessingWork;
	/**
	 * @property
	 * @var \System\Int16
	 */
	public $NumExistingThreads;
	/**
	 * @property
	 * @var \System\Int16
	 */
	public $NumThreadsGoal;
	private function GetInt16Value($shift){}
	private function SetInt16Value($value, $shift){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Threading\PortableThreadPool+ThreadCounts
	 */
	public function InterlockedSetNumThreadsGoal($value){}
	/**
	 * @return \System\Threading\PortableThreadPool+ThreadCounts
	 */
	public function VolatileRead(){}
	/**
	 * @param \System\Threading\PortableThreadPool+ThreadCounts $newCounts
	 * @param \System\Threading\PortableThreadPool+ThreadCounts $oldCounts
	 * @return \System\Threading\PortableThreadPool+ThreadCounts
	 */
	public function InterlockedCompareExchange($newCounts, $oldCounts){}
	/**
	 * @param \System\Threading\PortableThreadPool+ThreadCounts $lhs
	 * @param \System\Threading\PortableThreadPool+ThreadCounts $rhs
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($lhs, $rhs){}
}