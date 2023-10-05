<?php
namespace Avalonia\Controls;
/**
 */
class OpenFolderDialog extends \Avalonia\Controls\FileSystemDialog
{
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
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function ShowAsync($parent){}
	/**
	 * @return \Avalonia\Platform\Storage\FolderPickerOpenOptions
	 */
	public  function ToFolderPickerOpenOptions(){}
}
