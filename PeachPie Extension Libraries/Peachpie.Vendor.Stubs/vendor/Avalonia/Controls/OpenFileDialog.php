<?php
namespace Avalonia\Controls;
class OpenFileDialog extends \Avalonia\Controls\FileDialog
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowMultiple;
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
	 * @return \System\Threading\Tasks\Task_1[System\String[]]
	 */
	public function ShowAsync($parent){}
	/**
	 * @return \Avalonia\Platform\Storage\FilePickerOpenOptions
	 */
	public function ToFilePickerOpenOptions(){}
	/**
	 */
	public function __construct(){}
}