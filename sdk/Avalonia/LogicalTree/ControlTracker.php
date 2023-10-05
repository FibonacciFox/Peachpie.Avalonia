<?php
namespace Avalonia\LogicalTree;
/**
 */
class ControlTracker extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasObservers;
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Attached($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Detached($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Update(){}
}
