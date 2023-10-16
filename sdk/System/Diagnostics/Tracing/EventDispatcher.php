<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventDispatcher extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\EventListener
	 * @field
	 */
	protected readonly $m_Listener;
	/**
	 * @var \System\Boolean[]
	 * @field
	 */
	protected $m_EventEnabled;
	/**
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 * @field
	 */
	protected $m_Next;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
