<?php
namespace Avalonia\Threading;
class PriorityChain extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public $Priority;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherOperation
	 */
	public $Head;
	/**
	 * @property
	 * @var \Avalonia\Threading\DispatcherOperation
	 */
	public $Tail;
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 */
	public function __construct($priority){}
}