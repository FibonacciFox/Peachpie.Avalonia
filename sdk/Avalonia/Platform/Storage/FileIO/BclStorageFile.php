<?php
namespace Avalonia\Platform\Storage\FileIO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BclStorageFileMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class BclStorageFile extends \System\Object implements 
	\Avalonia\Platform\Storage\IStorageBookmarkFile,
	\Avalonia\Platform\Storage\IStorageFile,
	\Avalonia\Platform\Storage\IStorageItem,
	\System\IDisposable,
	\Avalonia\Platform\Storage\IStorageBookmarkItem
{
	/**
	 * @var \System\IO\FileInfo
	 * @property
	 */
	public readonly $FileInfo;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanBookmark;
	/**
	 * @var \System\Uri
	 * @property
	 */
	public readonly $Path;
	/**
	 * @return \System\IO\FileInfo
	 */
	public  function get_FileInfo(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanBookmark(){}
	/**
	 * @return \System\Uri
	 */
	public  function get_Path(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetBasicPropertiesAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetParentAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenReadAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function OpenWriteAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function SaveBookmarkAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function ReleaseBookmarkAsync(){}
	/**
	 * @uses BclStorageFileMethodsOverride::Dispose_1 ($disposing)
	 * @uses BclStorageFileMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function DeleteAsync(){}
	/**
	 * @param \Avalonia\Platform\Storage\IStorageFolder $destination
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function MoveAsync($destination){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
