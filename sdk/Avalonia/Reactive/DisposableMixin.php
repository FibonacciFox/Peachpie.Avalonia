<?php
namespace Avalonia\Reactive;
/**
 */
class DisposableMixin extends \System\Object
{
	/**
	 * @param \Avalonia\Reactive\T $item
	 * @param \Avalonia\Reactive\CompositeDisposable $compositeDisposable
	 * @return \Avalonia\Reactive\T
	 */
	public static function DisposeWith($item, $compositeDisposable){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
