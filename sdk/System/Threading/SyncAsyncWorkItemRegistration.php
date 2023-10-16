<?php
namespace System\Threading;
/**
 */
class SyncAsyncWorkItemRegistration extends \System\ValueType implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\AsyncOverSyncWithIoCancellation
	 * @field
	 */
	public $WorkItem;
	/**
	 * @var \System\Threading\CancellationTokenRegistration
	 * @field
	 */
	public $CancellationRegistration;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
}
