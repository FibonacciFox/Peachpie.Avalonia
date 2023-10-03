<?php
namespace Avalonia\Dialogs\Internal;
/**
 */
class AvaloniaDialogsInternalViewModelBase extends \System\Object implements 
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @param \Avalonia\Dialogs\Internal\T& $field
	 * @param \Avalonia\Dialogs\Internal\T $value
	 * @param \System\String|string $propertyName
	 * @return \System\Boolean
	 */
	protected  function RaiseAndSetIfChanged($field, $value, $propertyName){}
	/**
	 * @param \System\String|string $propertyName
	 * @return \System\Void|void
	 */
	protected  function RaisePropertyChanged($propertyName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
