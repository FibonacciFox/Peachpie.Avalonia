<?php
namespace System\Threading;
final class Linked2CancellationTokenSource extends \System\Threading\CancellationTokenSource implements
	\System\IDisposable
{

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