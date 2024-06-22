<?php
namespace Avalonia\Platform\Storage\FileIO;
class BclStorageProvider extends \System\Object implements
	\Avalonia\Platform\Storage\IStorageProvider
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanOpen;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSave;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanPickFolder;
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1[System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\IStorageFile]]
	 */
	abstract public function OpenFilePickerAsync($options);
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerSaveOptions $options
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	abstract public function SaveFilePickerAsync($options);
	/**
	 * @param \Avalonia\Platform\Storage\FolderPickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1[System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\IStorageFolder]]
	 */
	abstract public function OpenFolderPickerAsync($options);
	/**
	 * @param \System\String|string $bookmark
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageBookmarkFile]
	 */
	public function OpenFileBookmarkAsync($bookmark){}
	/**
	 * @param \System\String|string $bookmark
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageBookmarkFolder]
	 */
	public function OpenFolderBookmarkAsync($bookmark){}
	/**
	 * @param \System\Uri $filePath
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	public function TryGetFileFromPathAsync($filePath){}
	/**
	 * @param \System\Uri $folderPath
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function TryGetFolderFromPathAsync($folderPath){}
	/**
	 * @param \Avalonia\Platform\Storage\WellKnownFolder $wellKnownFolder
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function TryGetWellKnownFolderAsync($wellKnownFolder){}
	/**
	 * @return \System\String|string
	 */
	protected static function GetDownloadsWellKnownFolder(){}
	private static function SHGetKnownFolderPath($id, $flags, $token){}
}