<?php
namespace System\IO\Enumeration;
/**
 */
class FileSystemEntry extends \System\ValueType
{
	/**
	 * @var \Interop+NtDll+FILE_FULL_DIR_INFORMATION*
	 * @field
	 */
	protected $_info;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @property
	 */
	public $Directory;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @property
	 */
	public $RootDirectory;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @property
	 */
	public $OriginalRootDirectory;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @property
	 */
	public readonly $FileName;
	/**
	 * @var \System\IO\FileAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\DateTimeOffset
	 * @property
	 */
	public readonly $CreationTimeUtc;
	/**
	 * @var \System\DateTimeOffset
	 * @property
	 */
	public readonly $LastAccessTimeUtc;
	/**
	 * @var \System\DateTimeOffset
	 * @property
	 */
	public readonly $LastWriteTimeUtc;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDirectory;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsHidden;
	/**
	 * @return \System\String|string
	 */
	public  function ToSpecifiedFullPath(){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @param \\FILE_FULL_DIR_INFORMATION* $info
	 * @param \System\ReadOnlySpan_1 $directory
	 * @param \System\ReadOnlySpan_1 $rootDirectory
	 * @param \System\ReadOnlySpan_1 $originalRootDirectory
	 * @return \System\Void|void
	 */
	protected static function Initialize($entry, $info, $directory, $rootDirectory, $originalRootDirectory){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_Directory(){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Directory($value){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_RootDirectory(){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RootDirectory($value){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_OriginalRootDirectory(){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OriginalRootDirectory($value){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_FileName(){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\DateTimeOffset
	 */
	public  function get_CreationTimeUtc(){}
	/**
	 * @return \System\DateTimeOffset
	 */
	public  function get_LastAccessTimeUtc(){}
	/**
	 * @return \System\DateTimeOffset
	 */
	public  function get_LastWriteTimeUtc(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDirectory(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHidden(){}
	/**
	 * @return \System\IO\FileSystemInfo
	 */
	public  function ToFileSystemInfo(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToFullPath(){}
}
