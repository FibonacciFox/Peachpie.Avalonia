<?php
namespace System\Diagnostics;
final class DebuggerBrowsableAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Diagnostics\DebuggerBrowsableState
	 * @since readonly
	 */
	public $State;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Diagnostics\DebuggerBrowsableState $state
	 */
	public function __construct($state){}
}