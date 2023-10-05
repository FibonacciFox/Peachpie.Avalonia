<?php
namespace Avalonia\Controls;
/**
 */
class SaveFileDialog extends \Avalonia\Controls\FileDialog
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $DefaultExtension;
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public $ShowOverwritePrompt;
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
	 * @return \System\String|string
	 */
	public  function get_DefaultExtension(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DefaultExtension($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_ShowOverwritePrompt(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ShowOverwritePrompt($value){}
	/**
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function ShowAsync($parent){}
	/**
	 * @return \Avalonia\Platform\Storage\FilePickerSaveOptions
	 */
	public  function ToFilePickerSaveOptions(){}
}
