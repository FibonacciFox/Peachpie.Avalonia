<?php
namespace Avalonia\Dialogs\Internal;
/**
 */
class ManagedFileChooserFilterViewModel extends \Avalonia\Dialogs\Internal\AvaloniaDialogsInternalViewModelBase implements 
	\System\ComponentModel\INotifyPropertyChanged
{
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
