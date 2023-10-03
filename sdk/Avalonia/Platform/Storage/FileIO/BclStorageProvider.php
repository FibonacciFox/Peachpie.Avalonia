<?php
namespace Avalonia\Platform\Storage\FileIO;
/**
 */
class BclStorageProvider extends \System\Object implements 
	\Avalonia\Platform\Storage\IStorageProvider
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanOpen(){}
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenFilePickerAsync($options){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanSave(){}
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerSaveOptions $options
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function SaveFilePickerAsync($options){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanPickFolder(){}
	/**
	 * @param \Avalonia\Platform\Storage\FolderPickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenFolderPickerAsync($options){}
	/**
	 * @param \System\String|string $bookmark
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenFileBookmarkAsync($bookmark){}
	/**
	 * @param \System\String|string $bookmark
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenFolderBookmarkAsync($bookmark){}
	/**
	 * @param \System\Uri $filePath
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function TryGetFileFromPathAsync($filePath){}
	/**
	 * @param \System\Uri $folderPath
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function TryGetFolderFromPathAsync($folderPath){}
	/**
	 * @param \Avalonia\Platform\Storage\WellKnownFolder $wellKnownFolder
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function TryGetWellKnownFolderAsync($wellKnownFolder){}
	/**
	 * @return \System\String|string
	 */
	protected static function GetDownloadsWellKnownFolder(){}
	/**
	 * @param \System\Guid $id
	 * @param \System\Int32|int $flags
	 * @param \System\IntPtr $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SHGetKnownFolderPath($id, $flags, $token){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
