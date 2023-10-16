<?php
namespace System\Threading;
/**
 */
class ThreadLocalNode extends \System\Object
{
	/**
	 * @var \System\Threading\ThreadInt64PersistentCounter+ThreadLocalNode
	 * @field
	 */
	protected $_prev;
	/**
	 * @var \System\Threading\ThreadInt64PersistentCounter+ThreadLocalNode
	 * @field
	 */
	protected $_next;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Increment(){}
	/**
	 * @param \System\UInt32 $count
	 * @return \System\Void|void
	 */
	public  function Add($count){}
	/**
	 * @param \System\UInt32 $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnAddOverflow($count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
