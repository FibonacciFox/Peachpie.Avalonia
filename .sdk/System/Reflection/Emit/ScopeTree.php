<?php
namespace System\Reflection\Emit;
final class ScopeTree extends \System\Object
{

	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $m_iOffsets;
	/**
	 * @field
	 * @var \System\Reflection\Emit\ScopeAction[]
	 */
	protected $m_ScopeActions;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_iCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_iOpenScopeCount;
	/**
	 * @field
	 * @var \System\Reflection\Emit\LocalSymInfo[]
	 */
	protected $m_localSymInfos;
	/**
	 * @return \System\Int32|int
	 */
	protected function GetCurrentActiveScopeIndex(){}
	/**
	 * @param \System\String|string $strNamespace
	 * @return \System\Void|void
	 */
	protected function AddUsingNamespaceToCurrentScope($strNamespace){}
	/**
	 * @param \System\Reflection\Emit\ScopeAction $sa
	 * @param \System\Int32|int $iOffset
	 * @return \System\Void|void
	 */
	protected function AddScopeInfo($sa, $iOffset){}
	/**
	 * @return \System\Void|void
	 */
	protected function EnsureCapacity(){}
}