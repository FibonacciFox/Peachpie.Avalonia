<?php
namespace Avalonia\Controls;
class FileDialog extends \Avalonia\Controls\FileSystemDialog
{

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

}