<?php
namespace System\Reflection\Emit;
/**
 */
class __ExceptionInfo extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_startAddr;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $m_filterAddr;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $m_catchAddr;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $m_catchEndAddr;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $m_type;
	/**
	 * @var \System\Type[]
	 * @field
	 */
	protected $m_catchClass;
	/**
	 * @var \System\Reflection\Emit\Label
	 * @field
	 */
	protected $m_endLabel;
	/**
	 * @var \System\Reflection\Emit\Label
	 * @field
	 */
	protected $m_finallyEndLabel;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_endAddr;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_endFinally;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_currentCatch;
	/**
	 * @param \System\Int32|int $catchorfilterAddr
	 * @param \System\Int32|int $catchEndAddr
	 * @param \System\Type $catchClass
	 * @param \System\Int32|int $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MarkHelper($catchorfilterAddr, $catchEndAddr, $catchClass, $type){}
	/**
	 * @param \System\Int32|int $filterAddr
	 * @return \System\Void|void
	 */
	protected  function MarkFilterAddr($filterAddr){}
	/**
	 * @param \System\Int32|int $faultAddr
	 * @return \System\Void|void
	 */
	protected  function MarkFaultAddr($faultAddr){}
	/**
	 * @param \System\Int32|int $catchAddr
	 * @param \System\Type $catchException
	 * @return \System\Void|void
	 */
	protected  function MarkCatchAddr($catchAddr, $catchException){}
	/**
	 * @param \System\Int32|int $finallyAddr
	 * @param \System\Int32|int $endCatchAddr
	 * @return \System\Void|void
	 */
	protected  function MarkFinallyAddr($finallyAddr, $endCatchAddr){}
	/**
	 * @param \System\Int32|int $endAddr
	 * @return \System\Void|void
	 */
	protected  function Done($endAddr){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetStartAddress(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetEndAddress(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetFinallyEndAddress(){}
	/**
	 * @return \System\Reflection\Emit\Label
	 */
	protected  function GetEndLabel(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function GetFilterAddresses(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function GetCatchAddresses(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function GetCatchEndAddresses(){}
	/**
	 * @return \System\Type[]
	 */
	protected  function GetCatchClass(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetNumberOfCatches(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function GetExceptionTypes(){}
	/**
	 * @param \System\Reflection\Emit\Label $lbl
	 * @return \System\Void|void
	 */
	protected  function SetFinallyEndLabel($lbl){}
	/**
	 * @param \System\Reflection\Emit\__ExceptionInfo $exc
	 * @return \System\Boolean
	 */
	protected  function IsInner($exc){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetCurrentState(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
