<?php
namespace Avalonia\Controls;
class SaveFileDialog extends \Avalonia\Controls\FileDialog
{

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DefaultExtension;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Boolean]
	 */
	public $ShowOverwritePrompt;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Controls\FileDialogFilter]
	 */
	public $Filters;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $InitialFileName;
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
	 * @return \Avalonia\Platform\Storage\FilePickerSaveOptions
	 */
	public function ToFilePickerSaveOptions(){}
	/**
	 */
	public function __construct(){}
}