<?php
namespace Avalonia\Reactive;
final class SerialDisposableValue extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\IDisposable
	 */
	public $Disposable;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 */
	public function __construct(){}
}