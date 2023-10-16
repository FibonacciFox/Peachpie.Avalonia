<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileInfoMethodsOverride
{
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public  function Open_1($options){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public  function Open_2($mode){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public  function Open_3($mode, $access){}
	/**
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride] public  function Open_4($mode, $access, $share){}
	/**
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride] public  function CopyTo_1($destFileName){}
	/**
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride] public  function CopyTo_2($destFileName, $overwrite){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MoveTo_1($destFileName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MoveTo_2($destFileName, $overwrite){}
	/**
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride] public  function Replace_1($destinationFileName, $destinationBackupFileName){}
	/**
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride] public  function Replace_2($destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors){}
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
class FileInfo extends \System\IO\FileSystemInfo implements 
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
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DirectoryName;
	/**
	 * @var \System\IO\DirectoryInfo
	 * @property
	 */
	public readonly $Directory;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsReadOnly;
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
	 * @return \System\Int64|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DirectoryName(){}
	/**
	 * @return \System\IO\DirectoryInfo
	 */
	public  function get_Directory(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsReadOnly($value){}
	/**
	 * @uses FileInfoMethodsOverride::Open_1 ($options)
	 * @uses FileInfoMethodsOverride::Open_2 ($mode)
	 * @uses FileInfoMethodsOverride::Open_3 ($mode, $access)
	 * @uses FileInfoMethodsOverride::Open_4 ($mode, $access, $share)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Open(mixed ...$args){}
	/**
	 * @return \System\IO\StreamReader
	 */
	public  function OpenText(){}
	/**
	 * @return \System\IO\StreamWriter
	 */
	public  function CreateText(){}
	/**
	 * @return \System\IO\StreamWriter
	 */
	public  function AppendText(){}
	/**
	 * @uses FileInfoMethodsOverride::CopyTo_1 ($destFileName)
	 * @uses FileInfoMethodsOverride::CopyTo_2 ($destFileName, $overwrite)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @return \System\IO\FileStream
	 */
	public  function Create(){}
	/**
	 * @return \System\IO\FileStream
	 */
	public  function OpenRead(){}
	/**
	 * @return \System\IO\FileStream
	 */
	public  function OpenWrite(){}
	/**
	 * @uses FileInfoMethodsOverride::MoveTo_1 ($destFileName)
	 * @uses FileInfoMethodsOverride::MoveTo_2 ($destFileName, $overwrite)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveTo(mixed ...$args){}
	/**
	 * @uses FileInfoMethodsOverride::Replace_1 ($destinationFileName, $destinationBackupFileName)
	 * @uses FileInfoMethodsOverride::Replace_2 ($destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Replace(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Decrypt(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Encrypt(){}
	/**
	 * @uses FileInfoMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses FileInfoMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
