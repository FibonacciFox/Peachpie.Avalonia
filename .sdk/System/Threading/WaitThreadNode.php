<?php
namespace System\Threading;
final class WaitThreadNode extends \System\Object
{
	/**
	 * @property
	 * @var \System\Threading\PortableThreadPool+WaitThread
	 * @since readonly
	 */
	public $Thread;
	/**
	 * @property
	 * @var \System\Threading\PortableThreadPool+WaitThreadNode
	 */
	public $Next;
	/**
	 * @param \System\Threading\PortableThreadPool+WaitThread $thread
	 */
	public function __construct($thread){}
}