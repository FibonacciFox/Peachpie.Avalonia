<?php
namespace System\Diagnostics\Tracing;
final class EventDispatcher extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventListener
	 */
	protected $m_Listener;
	/**
	 * @field
	 * @var \System\Boolean[]|array
	 */
	protected $m_EventEnabled;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 */
	protected $m_Next;

}