<?php
namespace Avalonia\Reactive;
final class EmptyImpl_1 extends \System\Object implements
	\System\IObservable_1
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\IObservable_1[TResult]
	 */
	protected static $Instance;
	/**
	 * @param \System\IObserver_1 $observer [generic: TResult]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
}