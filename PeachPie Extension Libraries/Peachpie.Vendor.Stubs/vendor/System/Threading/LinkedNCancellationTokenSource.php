<?php
namespace System\Threading;
final class LinkedNCancellationTokenSource extends \System\Threading\CancellationTokenSource implements
	\System\IDisposable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Action_1[System\Object]
	 */
	protected static $s_linkedTokenCancelDelegate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCancellationRequested;
	/**
	 * @property
	 * @var \System\Threading\CancellationToken
	 * @since readonly
	 */
	public $Token;

}