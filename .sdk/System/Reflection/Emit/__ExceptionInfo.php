<?php
namespace System\Reflection\Emit;
final class __ExceptionInfo extends \System\Object
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_startAddr;
	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $m_filterAddr;
	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $m_catchAddr;
	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $m_catchEndAddr;
	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $m_type;
	/**
	 * @field
	 * @var \System\Type[]
	 */
	protected $m_catchClass;
	/**
	 * @field
	 * @var \System\Reflection\Emit\Label
	 */
	protected $m_endLabel;
	/**
	 * @field
	 * @var \System\Reflection\Emit\Label
	 */
	protected $m_finallyEndLabel;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_endAddr;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_endFinally;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_currentCatch;
	private function MarkHelper($catchorfilterAddr, $catchEndAddr, $catchClass, $type){}
	/**
	 * @param \System\Int32|int $filterAddr
	 * @return \System\Void|void
	 */
	protected function MarkFilterAddr($filterAddr){}
	/**
	 * @param \System\Int32|int $faultAddr
	 * @return \System\Void|void
	 */
	protected function MarkFaultAddr($faultAddr){}
	/**
	 * @param \System\Int32|int $catchAddr
	 * @param \System\Type $catchException
	 * @return \System\Void|void
	 */
	protected function MarkCatchAddr($catchAddr, $catchException){}
	/**
	 * @param \System\Int32|int $finallyAddr
	 * @param \System\Int32|int $endCatchAddr
	 * @return \System\Void|void
	 */
	protected function MarkFinallyAddr($finallyAddr, $endCatchAddr){}
	/**
	 * @param \System\Int32|int $endAddr
	 * @return \System\Void|void
	 */
	protected function Done($endAddr){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetStartAddress(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetEndAddress(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetFinallyEndAddress(){}
	/**
	 * @return \System\Reflection\Emit\Label
	 */
	protected function GetEndLabel(){}
	/**
	 * @return \System\Int32[]|array
	 */
	protected function GetFilterAddresses(){}
	/**
	 * @return \System\Int32[]|array
	 */
	protected function GetCatchAddresses(){}
	/**
	 * @return \System\Int32[]|array
	 */
	protected function GetCatchEndAddresses(){}
	/**
	 * @return \System\Type[]
	 */
	protected function GetCatchClass(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetNumberOfCatches(){}
	/**
	 * @return \System\Int32[]|array
	 */
	protected function GetExceptionTypes(){}
	/**
	 * @param \System\Reflection\Emit\Label $lbl
	 * @return \System\Void|void
	 */
	protected function SetFinallyEndLabel($lbl){}
	/**
	 * @param \System\Reflection\Emit\__ExceptionInfo $exc
	 * @return \System\Boolean|bool
	 */
	protected function IsInner($exc){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetCurrentState(){}
}