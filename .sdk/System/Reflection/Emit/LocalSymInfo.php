<?php
namespace System\Reflection\Emit;
final class LocalSymInfo extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_iLocalSymCount;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $m_namespace;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_iNameSpaceCount;
	private function EnsureCapacityNamespace(){}
	/**
	 * @param \System\String|string $strNamespace
	 * @return \System\Void|void
	 */
	protected function AddUsingNamespace($strNamespace){}
}