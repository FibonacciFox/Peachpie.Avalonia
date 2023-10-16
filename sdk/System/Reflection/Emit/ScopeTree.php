<?php
namespace System\Reflection\Emit;
/**
 */
class ScopeTree extends \System\Object
{
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $m_iOffsets;
	/**
	 * @var \System\Reflection\Emit\ScopeAction[]
	 * @field
	 */
	protected $m_ScopeActions;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_iCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_iOpenScopeCount;
	/**
	 * @var \System\Reflection\Emit\LocalSymInfo[]
	 * @field
	 */
	protected $m_localSymInfos;
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetCurrentActiveScopeIndex(){}
	/**
	 * @param \System\String|string $strNamespace
	 * @return \System\Void|void
	 */
	protected  function AddUsingNamespaceToCurrentScope($strNamespace){}
	/**
	 * @param \System\Reflection\Emit\ScopeAction $sa
	 * @param \System\Int32|int $iOffset
	 * @return \System\Void|void
	 */
	protected  function AddScopeInfo($sa, $iOffset){}
	/**
	 * @return \System\Void|void
	 */
	protected  function EnsureCapacity(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
