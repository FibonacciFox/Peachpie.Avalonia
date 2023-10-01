<?php
namespace Avalonia\Platform\Storage;
/**
 */
interface IStorageProvider
{
	/**
	 */
	public function get_CanOpen();
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerOpenOptions $options
	 */
	public function OpenFilePickerAsync($options);
	/**
	 */
	public function get_CanSave();
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerSaveOptions $options
	 */
	public function SaveFilePickerAsync($options);
	/**
	 */
	public function get_CanPickFolder();
	/**
	 * @param \Avalonia\Platform\Storage\FolderPickerOpenOptions $options
	 */
	public function OpenFolderPickerAsync($options);
	/**
	 * @param \System\String|string $bookmark
	 */
	public function OpenFileBookmarkAsync($bookmark);
	/**
	 * @param \System\String|string $bookmark
	 */
	public function OpenFolderBookmarkAsync($bookmark);
	/**
	 * @param \System\Uri $filePath
	 */
	public function TryGetFileFromPathAsync($filePath);
	/**
	 * @param \System\Uri $folderPath
	 */
	public function TryGetFolderFromPathAsync($folderPath);
	/**
	 * @param \Avalonia\Platform\Storage\WellKnownFolder $wellKnownFolder
	 */
	public function TryGetWellKnownFolderAsync($wellKnownFolder);
}
