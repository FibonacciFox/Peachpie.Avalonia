<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DirectoryInfoOverride {
	/**
	 * @deprecated
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function GetFiles_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function GetFiles_2 ($searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function GetFiles_3 ($searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function GetFiles_4 ($searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @return \System\IO\FileSystemInfo
	 */
	#[MethodOverride]public function GetFileSystemInfos_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @return \System\IO\FileSystemInfo
	 */
	#[MethodOverride]public function GetFileSystemInfos_2 ($searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\IO\FileSystemInfo
	 */
	#[MethodOverride]public function GetFileSystemInfos_3 ($searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\IO\FileSystemInfo
	 */
	#[MethodOverride]public function GetFileSystemInfos_4 ($searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride]public function GetDirectories_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride]public function GetDirectories_2 ($searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride]public function GetDirectories_3 ($searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\IO\DirectoryInfo
	 */
	#[MethodOverride]public function GetDirectories_4 ($searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateDirectories_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateDirectories_2 ($searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateDirectories_3 ($searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateDirectories_4 ($searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFiles_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFiles_2 ($searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFiles_3 ($searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFiles_4 ($searchPattern, $enumerationOptions){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFileSystemInfos_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFileSystemInfos_2 ($searchPattern){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFileSystemInfos_3 ($searchPattern, $searchOption){}
	/**
	 * @deprecated
	 * @param \System\String|string $searchPattern
	 * @param \System\IO\EnumerationOptions $enumerationOptions
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public function EnumerateFileSystemInfos_4 ($searchPattern, $enumerationOptions){}
}
final class DirectoryInfo extends \System\IO\FileSystemInfo implements
	\System\Runtime\Serialization\ISerializable
{
	use DirectoryInfoOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $FullPath;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $OriginalPath;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_name;
	/**
	 * @property
	 * @var \System\IO\DirectoryInfo
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @property
	 * @var \System\IO\DirectoryInfo
	 * @since readonly
	 */
	public $Root;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Extension;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Exists;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $CreationTime;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $CreationTimeUtc;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $LastAccessTime;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $LastAccessTimeUtc;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $LastWriteTime;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $LastWriteTimeUtc;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $LinkTarget;
	/**
	 * @property
	 * @var \System\IO\UnixFileMode
	 */
	public $UnixFileMode;
	/**
	 * @property
	 * @var \System\IO\FileAttributes
	 */
	public $Attributes;
	/**
	 * @param \System\String|string $path
	 * @return \System\IO\DirectoryInfo
	 */
	public function CreateSubdirectory($path){}
	/**
	 * @return \System\Void|void
	 */
	public function Create(){}
	/**
	 * @uses DirectoryInfoOverride::GetFiles_1 <br>public , args: ()<br>
	 * @uses DirectoryInfoOverride::GetFiles_2 <br>public , args: ($searchPattern)<br>
	 * @uses DirectoryInfoOverride::GetFiles_3 <br>public , args: ($searchPattern, $searchOption)<br>
	 * @uses DirectoryInfoOverride::GetFiles_4 <br>public , args: ($searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetFiles (\override ...$args){}
	/**
	 * @uses DirectoryInfoOverride::GetFileSystemInfos_1 <br>public , args: ()<br>
	 * @uses DirectoryInfoOverride::GetFileSystemInfos_2 <br>public , args: ($searchPattern)<br>
	 * @uses DirectoryInfoOverride::GetFileSystemInfos_3 <br>public , args: ($searchPattern, $searchOption)<br>
	 * @uses DirectoryInfoOverride::GetFileSystemInfos_4 <br>public , args: ($searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileSystemInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetFileSystemInfos (\override ...$args){}
	/**
	 * @uses DirectoryInfoOverride::GetDirectories_1 <br>public , args: ()<br>
	 * @uses DirectoryInfoOverride::GetDirectories_2 <br>public , args: ($searchPattern)<br>
	 * @uses DirectoryInfoOverride::GetDirectories_3 <br>public , args: ($searchPattern, $searchOption)<br>
	 * @uses DirectoryInfoOverride::GetDirectories_4 <br>public , args: ($searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\DirectoryInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetDirectories (\override ...$args){}
	/**
	 * @uses DirectoryInfoOverride::EnumerateDirectories_1 <br>public , args: ()<br>
	 * @uses DirectoryInfoOverride::EnumerateDirectories_2 <br>public , args: ($searchPattern)<br>
	 * @uses DirectoryInfoOverride::EnumerateDirectories_3 <br>public , args: ($searchPattern, $searchOption)<br>
	 * @uses DirectoryInfoOverride::EnumerateDirectories_4 <br>public , args: ($searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function EnumerateDirectories (\override ...$args){}
	/**
	 * @uses DirectoryInfoOverride::EnumerateFiles_1 <br>public , args: ()<br>
	 * @uses DirectoryInfoOverride::EnumerateFiles_2 <br>public , args: ($searchPattern)<br>
	 * @uses DirectoryInfoOverride::EnumerateFiles_3 <br>public , args: ($searchPattern, $searchOption)<br>
	 * @uses DirectoryInfoOverride::EnumerateFiles_4 <br>public , args: ($searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function EnumerateFiles (\override ...$args){}
	/**
	 * @uses DirectoryInfoOverride::EnumerateFileSystemInfos_1 <br>public , args: ()<br>
	 * @uses DirectoryInfoOverride::EnumerateFileSystemInfos_2 <br>public , args: ($searchPattern)<br>
	 * @uses DirectoryInfoOverride::EnumerateFileSystemInfos_3 <br>public , args: ($searchPattern, $searchOption)<br>
	 * @uses DirectoryInfoOverride::EnumerateFileSystemInfos_4 <br>public , args: ($searchPattern, $enumerationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function EnumerateFileSystemInfos (\override ...$args){}
	private function InternalEnumerateInfos($path, $searchPattern, $searchTarget, $options){}
	/**
	 * @param \System\String|string $destDirName
	 * @return \System\Void|void
	 */
	public function MoveTo($destDirName){}
	/**
	 * @param \System\String|string $path
	 */
	public function __construct($path){}
}