<?php
namespace Avalonia\Controls;
/**
 */
class FileDialog extends \Avalonia\Controls\FileSystemDialog
{
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
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Filters(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Filters($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_InitialFileName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_InitialFileName($value){}
}
