<?php
namespace Avalonia\Dialogs\Internal;
/**
 */
class ManagedFileChooserFilterViewModel extends \Avalonia\Dialogs\Internal\AvaloniaDialogsInternalViewModelBase implements 
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $filename
	 * @return \System\Boolean
	 */
	public  function Match($filename){}
}
