<?php
namespace Avalonia\Controls\Platform;
class SystemDialogImpl extends \System\Object implements
	\Avalonia\Controls\Platform\ISystemDialogImpl
{

	/**
	 * @param \Avalonia\Controls\FileDialog $dialog
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1[System\String[]]
	 */
	public function ShowFileDialogAsync($dialog, $parent){}
	/**
	 * @param \Avalonia\Controls\OpenFolderDialog $dialog
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function ShowFolderDialogAsync($dialog, $parent){}
	/**
	 */
	public function __construct(){}
}