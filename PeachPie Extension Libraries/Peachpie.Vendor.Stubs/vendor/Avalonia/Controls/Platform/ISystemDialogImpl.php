<?php
namespace Avalonia\Controls\Platform;
interface ISystemDialogImpl
{

	/**
	 * @param \Avalonia\Controls\FileDialog $dialog
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1[System\String[]]
	 */
	public function ShowFileDialogAsync($dialog, $parent);
	/**
	 * @param \Avalonia\Controls\OpenFolderDialog $dialog
	 * @param \Avalonia\Controls\Window $parent
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function ShowFolderDialogAsync($dialog, $parent);
}