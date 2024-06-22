<?php
namespace Avalonia\Platform\Storage;
interface IStorageProvider
{


	/**
	 * @param \Avalonia\Platform\Storage\FilePickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1[System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\IStorageFile]]
	 */
	public function OpenFilePickerAsync($options);
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerSaveOptions $options
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	public function SaveFilePickerAsync($options);
	/**
	 * @param \Avalonia\Platform\Storage\FolderPickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1[System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\IStorageFolder]]
	 */
	public function OpenFolderPickerAsync($options);
	/**
	 * @param \System\String|string $bookmark
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageBookmarkFile]
	 */
	public function OpenFileBookmarkAsync($bookmark);
	/**
	 * @param \System\String|string $bookmark
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageBookmarkFolder]
	 */
	public function OpenFolderBookmarkAsync($bookmark);
	/**
	 * @param \System\Uri $filePath
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	public function TryGetFileFromPathAsync($filePath);
	/**
	 * @param \System\Uri $folderPath
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function TryGetFolderFromPathAsync($folderPath);
	/**
	 * @param \Avalonia\Platform\Storage\WellKnownFolder $wellKnownFolder
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function TryGetWellKnownFolderAsync($wellKnownFolder);
}