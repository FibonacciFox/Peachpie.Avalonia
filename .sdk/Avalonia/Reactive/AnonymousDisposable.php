<?php
namespace Avalonia\Reactive;
final class AnonymousDisposable extends \System\Object implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Action $dispose
	 */
	public function __construct($dispose){}
}