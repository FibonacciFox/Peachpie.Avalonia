<?php
namespace Avalonia\Controls;
/**
 */
class OpenFileDialog extends \Avalonia\Controls\FileDialog
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllowMultiple;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Controls\FileDialogFilter]
	 * @property
	 */
	public $Filters;
	/**
	 * @var \System\String
	 * @property
	 */
	public $InitialFileName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Directory;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Title;
	/**
	 * @return \System\Boolean
	 */
	public  function get_AllowMultiple(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AllowMultiple($value){}
	/**
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function ShowAsync($parent){}
	/**
	 * @return \Avalonia\Platform\Storage\FilePickerOpenOptions
	 */
	public  function ToFilePickerOpenOptions(){}
}
