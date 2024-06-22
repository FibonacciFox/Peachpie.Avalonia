<?php
namespace Avalonia\Platform\Storage;
interface IStorageBookmarkItem
{


	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function ReleaseBookmarkAsync();
}