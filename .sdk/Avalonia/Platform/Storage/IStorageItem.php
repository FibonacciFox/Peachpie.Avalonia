<?php
namespace Avalonia\Platform\Storage;
interface IStorageItem
{


	/**
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\StorageItemProperties]
	 */
	public function GetBasicPropertiesAsync();
	/**
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function SaveBookmarkAsync();
	/**
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function GetParentAsync();
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function DeleteAsync();
	/**
	 * @param \Avalonia\Platform\Storage\IStorageFolder $destination
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageItem]
	 */
	public function MoveAsync($destination);
}