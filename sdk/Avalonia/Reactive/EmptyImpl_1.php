<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class EmptyImpl_1 extends \System\Object implements 
	\System\IObservable_1
{
	/**
	 * @var \System\IObservable_1[TResult]
	 * @field
	 */
	protected readonly $Instance;
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
