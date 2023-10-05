<?php
namespace Avalonia\Controls\Utils;
/**
 */
class Entry extends \System\Object implements 
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\System\IDisposable
{
	/**
	 * @var \System\Collections\Generic\List_1[System\WeakReference_1[Avalonia\Controls\Utils\ICollectionChangedListener]]
	 * @property
	 */
	public readonly $Listeners;
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Listeners(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $notifyCollectionChanged
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($notifyCollectionChanged, $ev, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
