<?php
namespace Avalonia\Reactive;
final class EmptyDisposable extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Reactive\Disposable+EmptyDisposable
	 */
	public static $Instance;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
}