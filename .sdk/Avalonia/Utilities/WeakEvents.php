<?php
namespace Avalonia\Utilities;
class WeakEvents extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Utilities\WeakEvent_2[System\Collections\Specialized\INotifyCollectionChanged,System\Collections\Specialized\NotifyCollectionChangedEventArgs]
	 */
	public static $CollectionChanged;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Utilities\WeakEvent_2[System\ComponentModel\INotifyPropertyChanged,System\ComponentModel\PropertyChangedEventArgs]
	 */
	public static $ThreadSafePropertyChanged;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Utilities\WeakEvent_2[Avalonia\AvaloniaObject,Avalonia\AvaloniaPropertyChangedEventArgs]
	 */
	public static $AvaloniaPropertyChanged;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Utilities\WeakEvent_2[System\Windows\Input\ICommand,System\EventArgs]
	 */
	public static $CommandCanExecuteChanged;
	/**
	 */
	public function __construct(){}
}