<?php
namespace Avalonia\Controls;
class OpenFolderDialog extends \Avalonia\Controls\FileSystemDialog
{
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Directory;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Title;
	/**
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function ShowAsync($parent){}
	/**
	 * @return \Avalonia\Platform\Storage\FolderPickerOpenOptions
	 */
	public function ToFolderPickerOpenOptions(){}
	/**
	 */
	public function __construct(){}
}