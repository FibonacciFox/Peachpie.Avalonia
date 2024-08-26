<?php
namespace System\Threading;
final class ThreadLocalNode extends \System\Object
{
	/**
	 * @field
	 * @var \System\Threading\ThreadInt64PersistentCounter+ThreadLocalNode
	 */
	protected $_prev;
	/**
	 * @field
	 * @var \System\Threading\ThreadInt64PersistentCounter+ThreadLocalNode
	 */
	protected $_next;
	/**
	 * @property
	 * @var \System\UInt32
	 * @since readonly
	 */
	public $Count;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function Increment(){}
	private function OnAddOverflow($count){}
	/**
	 * @param \System\Threading\ThreadInt64PersistentCounter $counter
	 */
	public function __construct($counter){}
}