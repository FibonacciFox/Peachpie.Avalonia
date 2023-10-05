<?php
namespace Avalonia\Utilities;
/**
 */
class WeakEvents extends \System\Object
{
	/**
	 * @var \Avalonia\Utilities\WeakEvent_2[System\Collections\Specialized\INotifyCollectionChanged,System\Collections\Specialized\NotifyCollectionChangedEventArgs]
	 * @field
	 */
	public readonly $CollectionChanged;
	/**
	 * @var \Avalonia\Utilities\WeakEvent_2[System\ComponentModel\INotifyPropertyChanged,System\ComponentModel\PropertyChangedEventArgs]
	 * @field
	 */
	public readonly $ThreadSafePropertyChanged;
	/**
	 * @var \Avalonia\Utilities\WeakEvent_2[Avalonia\AvaloniaObject,Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @field
	 */
	public readonly $AvaloniaPropertyChanged;
	/**
	 * @var \Avalonia\Utilities\WeakEvent_2[System\Windows\Input\ICommand,System\EventArgs]
	 * @field
	 */
	public readonly $CommandCanExecuteChanged;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
