<?php
namespace Avalonia\Platform\Storage;
interface IStorageFile
{

	/**
	 * @return \System\Threading\Tasks\Task_1[System\IO\Stream]
	 */
	public function OpenReadAsync();
	/**
	 * @return \System\Threading\Tasks\Task_1[System\IO\Stream]
	 */
	public function OpenWriteAsync();
}