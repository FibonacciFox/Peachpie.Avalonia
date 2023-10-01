<?php
namespace Avalonia\Data\Converters;
/**
 */
class WeakPropertyChangedProxy extends \System\Object
{
	/**
	 * @return \System\WeakReference_1
	 */
	protected  function get_Source(){}
	/**
	 * @param \System\ComponentModel\INotifyPropertyChanged $source
	 * @param \System\ComponentModel\PropertyChangedEventHandler $listener
	 * @return \System\Void|void
	 */
	public  function SubscribeTo($source, $listener){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unsubscribe(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPropertyChanged($sender, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
