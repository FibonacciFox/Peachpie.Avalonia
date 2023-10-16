<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DirectoryInfoMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Init_1($originalPath, $fullPath, $fileName, $isNormalized){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Init_2($info){}
	/**
	 * @return \System\IO\FileInfo[]
	 */
	#[MethodOverride] public  function GetFiles_1(){}
	/**
	 * @return \System\IO\FileInfo[]
	 */
	#[MethodOverride] public  function GetFiles_2($searchPattern){}
	/**
	 * @return \System\IO\FileInfo[]
	 */
	#[MethodOverride] public  function GetFiles_3($searchPattern, $searchOption){}
	/**
	 * @return \System\IO\FileInfo[]
	 */
	#[MethodOverride] public  function GetFiles_4($searchPattern, $enumerationOptions){}
	/**
	 * @return \System\IO\FileSystemInfo[]
	 */
	#[MethodOverride] public  function GetFileSystemInfos_1(){}
	/**
	 * @return \System\IO\FileSystemInfo[]
	 */
	#[MethodOverride] public  function GetFileSystemInfos_2($searchPattern){}
	/**
	 * @return \System\IO\FileSystemInfo[]
	 */
	#[MethodOverride] public  function GetFileSystemInfos_3($searchPattern, $searchOption){}
	/**
	 * @return \System\IO\FileSystemInfo[]
	 */
	#[MethodOverride] public  function GetFileSystemInfos_4($searchPattern, $enumerationOptions){}
	/**
	 * @return \System\IO\DirectoryInfo[]
	 */
	#[MethodOverride] public  function GetDirectories_1(){}
	/**
	 * @return \System\IO\DirectoryInfo[]
	 */
	#[MethodOverride] public  function GetDirectories_2($searchPattern){}
	/**
	 * @return \System\IO\DirectoryInfo[]
	 */
	#[MethodOverride] public  function GetDirectories_3($searchPattern, $searchOption){}
	/**
	 * @return \System\IO\DirectoryInfo[]
	 */
	#[MethodOverride] public  function GetDirectories_4($searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateDirectories_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateDirectories_2($searchPattern){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateDirectories_3($searchPattern, $searchOption){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateDirectories_4($searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFiles_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFiles_2($searchPattern){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFiles_3($searchPattern, $searchOption){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFiles_4($searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFileSystemInfos_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFileSystemInfos_2($searchPattern){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFileSystemInfos_3($searchPattern, $searchOption){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function EnumerateFileSystemInfos_4($searchPattern, $enumerationOptions){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Delete_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Delete_2($recursive){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class DirectoryInfo extends \System\IO\FileSystemInfo implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $FullPath;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $OriginalPath;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_name;
	/**
	 * @var \System\IO\DirectoryInfo
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \System\IO\DirectoryInfo
	 * @property
	 */
	public readonly $Root;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Extension;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Exists;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $CreationTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $CreationTimeUtc;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $LastAccessTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $LastAccessTimeUtc;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $LastWriteTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public $LastWriteTimeUtc;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $LinkTarget;
	/**
	 * @var \System\IO\UnixFileMode
	 * @property
	 */
	public $UnixFileMode;
	/**
	 * @var \System\IO\FileAttributes
	 * @property
	 */
	public $Attributes;
	/**
	 * @uses DirectoryInfoMethodsOverride::Init_1 ($originalPath, $fullPath, $fileName, $isNormalized)
	 * @uses DirectoryInfoMethodsOverride::Init_2 ($info)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Init(mixed ...$args){}
	/**
	 * @return \System\IO\DirectoryInfo
	 */
	public  function get_Parent(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\DirectoryInfo
	 */
	public  function CreateSubdirectory($path){}
	/**
	 * @return \System\Void|void
	 */
	public  function Create(){}
	/**
	 * @uses DirectoryInfoMethodsOverride::GetFiles_1 ()
	 * @uses DirectoryInfoMethodsOverride::GetFiles_2 ($searchPattern)
	 * @uses DirectoryInfoMethodsOverride::GetFiles_3 ($searchPattern, $searchOption)
	 * @uses DirectoryInfoMethodsOverride::GetFiles_4 ($searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFiles(mixed ...$args){}
	/**
	 * @uses DirectoryInfoMethodsOverride::GetFileSystemInfos_1 ()
	 * @uses DirectoryInfoMethodsOverride::GetFileSystemInfos_2 ($searchPattern)
	 * @uses DirectoryInfoMethodsOverride::GetFileSystemInfos_3 ($searchPattern, $searchOption)
	 * @uses DirectoryInfoMethodsOverride::GetFileSystemInfos_4 ($searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFileSystemInfos(mixed ...$args){}
	/**
	 * @uses DirectoryInfoMethodsOverride::GetDirectories_1 ()
	 * @uses DirectoryInfoMethodsOverride::GetDirectories_2 ($searchPattern)
	 * @uses DirectoryInfoMethodsOverride::GetDirectories_3 ($searchPattern, $searchOption)
	 * @uses DirectoryInfoMethodsOverride::GetDirectories_4 ($searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDirectories(mixed ...$args){}
	/**
	 * @uses DirectoryInfoMethodsOverride::EnumerateDirectories_1 ()
	 * @uses DirectoryInfoMethodsOverride::EnumerateDirectories_2 ($searchPattern)
	 * @uses DirectoryInfoMethodsOverride::EnumerateDirectories_3 ($searchPattern, $searchOption)
	 * @uses DirectoryInfoMethodsOverride::EnumerateDirectories_4 ($searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnumerateDirectories(mixed ...$args){}
	/**
	 * @uses DirectoryInfoMethodsOverride::EnumerateFiles_1 ()
	 * @uses DirectoryInfoMethodsOverride::EnumerateFiles_2 ($searchPattern)
	 * @uses DirectoryInfoMethodsOverride::EnumerateFiles_3 ($searchPattern, $searchOption)
	 * @uses DirectoryInfoMethodsOverride::EnumerateFiles_4 ($searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnumerateFiles(mixed ...$args){}
	/**
	 * @uses DirectoryInfoMethodsOverride::EnumerateFileSystemInfos_1 ()
	 * @uses DirectoryInfoMethodsOverride::EnumerateFileSystemInfos_2 ($searchPattern)
	 * @uses DirectoryInfoMethodsOverride::EnumerateFileSystemInfos_3 ($searchPattern, $searchOption)
	 * @uses DirectoryInfoMethodsOverride::EnumerateFileSystemInfos_4 ($searchPattern, $enumerationOptions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnumerateFileSystemInfos(mixed ...$args){}
	/**
	 * @param \System\String|string $path
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchTarget $searchTarget
	 * @param \System\IO\EnumerationOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalEnumerateInfos($path, $searchPattern, $searchTarget, $options){}
	/**
	 * @return \System\IO\DirectoryInfo
	 */
	public  function get_Root(){}
	/**
	 * @param \System\String|string $destDirName
	 * @return \System\Void|void
	 */
	public  function MoveTo($destDirName){}
	/**
	 * @uses DirectoryInfoMethodsOverride::Delete_1 ()
	 * @uses DirectoryInfoMethodsOverride::Delete_2 ($recursive)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Delete(mixed ...$args){}
	/**
	 * @uses DirectoryInfoMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses DirectoryInfoMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
