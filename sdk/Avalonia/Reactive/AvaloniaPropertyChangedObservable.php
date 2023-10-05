<?php
namespace Avalonia\Reactive;
/**
 */
class AvaloniaPropertyChangedObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1,
	\Avalonia\IDescription
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasObservers;
	/**
	 * @return \System\String|string
	 */
	public  function get_Description(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PropertyChanged($sender, $e){}
}
