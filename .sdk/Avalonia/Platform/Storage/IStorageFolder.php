<?php
namespace Avalonia\Platform\Storage;
interface IStorageFolder
{


	/**
	 * @return \System\Collections\Generic\IAsyncEnumerable_1[Avalonia\Platform\Storage\IStorageItem]
	 */
	public function GetItemsAsync();
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	public function CreateFileAsync($name);
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function CreateFolderAsync($name);
}