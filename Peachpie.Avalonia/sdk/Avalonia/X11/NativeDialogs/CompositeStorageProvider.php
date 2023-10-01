<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
class CompositeStorageProvider extends \System\Object implements 
	\Avalonia\Platform\Storage\IStorageProvider
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanOpen(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanSave(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanPickFolder(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureStorageProvider(){}
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerOpenOptions $options
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenFilePickerAsync($options){}
	/**
	 * @param \Avalonia\Platform\Storage\FilePickerSaveOptions $options
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function SaveFilePickerAsync($options){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
