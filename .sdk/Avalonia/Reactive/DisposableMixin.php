<?php
namespace Avalonia\Reactive;
class DisposableMixin extends \System\Object
{

	/**
	 * @param \T|object $item
	 * @param \Avalonia\Reactive\CompositeDisposable $compositeDisposable
	 * @return \T|object
	 */
	public static function DisposeWith($item, $compositeDisposable){}
}