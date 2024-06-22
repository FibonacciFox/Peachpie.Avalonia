<?php
namespace System\Diagnostics\Tracing;
final class OverrideEventProvider extends \System\Diagnostics\Tracing\EventProvider implements
	\System\IDisposable
{

	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\IEventProvider
	 */
	protected $m_eventProvider;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_disposed;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	protected $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $MatchAnyKeyword;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $MatchAllKeyword;
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Diagnostics\Tracing\EventProviderType $providerType
	 */
	public function __construct($eventSource, $providerType){}
}