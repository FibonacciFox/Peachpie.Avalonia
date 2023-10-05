<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AvaloniaPropertyObservable_2 extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
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
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PropertyChanged_WithConversion($sender, $e){}
	/**
	 * @param \Avalonia\Reactive\TResult $newValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublishNewValue($newValue){}
}
