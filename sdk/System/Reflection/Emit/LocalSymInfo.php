<?php
namespace System\Reflection\Emit;
/**
 */
class LocalSymInfo extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_iLocalSymCount;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $m_namespace;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_iNameSpaceCount;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacityNamespace(){}
	/**
	 * @param \System\String|string $strNamespace
	 * @return \System\Void|void
	 */
	protected  function AddUsingNamespace($strNamespace){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
