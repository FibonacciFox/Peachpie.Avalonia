<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileSystemInfoMethodsOverride
{
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
class FileSystemInfo extends \System\MarshalByRefObject implements 
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
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Extension(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Exists(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Delete(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_CreationTime(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_CreationTime($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_CreationTimeUtc(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_CreationTimeUtc($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_LastAccessTime(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_LastAccessTime($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_LastAccessTimeUtc(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_LastAccessTimeUtc($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_LastWriteTime(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_LastWriteTime($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_LastWriteTimeUtc(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_LastWriteTimeUtc($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_LinkTarget(){}
	/**
	 * @return \System\IO\UnixFileMode
	 */
	public  function get_UnixFileMode(){}
	/**
	 * @param \System\IO\UnixFileMode $value
	 * @return \System\Void|void
	 */
	public  function set_UnixFileMode($value){}
	/**
	 * @param \System\String|string $pathToTarget
	 * @return \System\Void|void
	 */
	public  function CreateAsSymbolicLink($pathToTarget){}
	/**
	 * @param \System\Boolean $returnFinalTarget
	 * @return \System\IO\FileSystemInfo
	 */
	public  function ResolveLinkTarget($returnFinalTarget){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\IO\Enumeration\FileSystemEntry& $findData
	 * @return \System\IO\FileSystemInfo
	 */
	protected static function Create($fullPath, $findData){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateCore(){}
	/**
	 * @param \\FILE_FULL_DIR_INFORMATION* $info
	 * @return \System\Void|void
	 */
	protected  function Init($info){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @param \System\IO\FileAttributes $value
	 * @return \System\Void|void
	 */
	public  function set_Attributes($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ExistsCore(){}
	/**
	 * @return \System\DateTimeOffset
	 */
	protected  function get_CreationTimeCore(){}
	/**
	 * @param \System\DateTimeOffset $value
	 * @return \System\Void|void
	 */
	protected  function set_CreationTimeCore($value){}
	/**
	 * @return \System\DateTimeOffset
	 */
	protected  function get_LastAccessTimeCore(){}
	/**
	 * @param \System\DateTimeOffset $value
	 * @return \System\Void|void
	 */
	protected  function set_LastAccessTimeCore($value){}
	/**
	 * @return \System\DateTimeOffset
	 */
	protected  function get_LastWriteTimeCore(){}
	/**
	 * @param \System\DateTimeOffset $value
	 * @return \System\Void|void
	 */
	protected  function set_LastWriteTimeCore($value){}
	/**
	 * @return \System\Int64|int
	 */
	protected  function get_LengthCore(){}
	/**
	 * @param \System\IO\UnixFileMode $value
	 * @return \System\Void|void
	 */
	protected  function set_UnixFileModeCore($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureDataInitialized(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Refresh(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RefreshCore(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_NormalizedPath(){}
	/**
	 * @uses FileSystemInfoMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses FileSystemInfoMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
