<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileInfoOverride {
	/**
	 * @deprecated
	 * @param \System\IO\FileStreamOptions $options
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public function Open_1 ($options){}
	/**
	 * @deprecated
	 * @param \System\IO\FileMode $mode
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public function Open_2 ($mode){}
	/**
	 * @deprecated
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public function Open_3 ($mode, $access){}
	/**
	 * @deprecated
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @return \System\IO\FileStream
	 */
	#[MethodOverride]public function Open_4 ($mode, $access, $share){}
	/**
	 * @deprecated
	 * @param \System\String|string $destFileName
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function CopyTo_1 ($destFileName){}
	/**
	 * @deprecated
	 * @param \System\String|string $destFileName
	 * @param \System\Boolean|bool $overwrite
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function CopyTo_2 ($destFileName, $overwrite){}
	/**
	 * @deprecated
	 * @param \System\String|string $destFileName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function MoveTo_1 ($destFileName){}
	/**
	 * @deprecated
	 * @param \System\String|string $destFileName
	 * @param \System\Boolean|bool $overwrite
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function MoveTo_2 ($destFileName, $overwrite){}
	/**
	 * @deprecated
	 * @param \System\String|string $destinationFileName
	 * @param \System\String|string $destinationBackupFileName
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function Replace_1 ($destinationFileName, $destinationBackupFileName){}
	/**
	 * @deprecated
	 * @param \System\String|string $destinationFileName
	 * @param \System\String|string $destinationBackupFileName
	 * @param \System\Boolean|bool $ignoreMetadataErrors
	 * @return \System\IO\FileInfo
	 */
	#[MethodOverride]public function Replace_2 ($destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors){}
}
final class FileInfo extends \System\IO\FileSystemInfo implements
	\System\Runtime\Serialization\ISerializable
{
	use FileInfoOverride;

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
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DirectoryName;
	/**
	 * @property
	 * @var \System\IO\DirectoryInfo
	 * @since readonly
	 */
	public $Directory;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsReadOnly;
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
	 * @uses FileInfoOverride::Open_1 <br>public , args: ($options)<br>
	 * @uses FileInfoOverride::Open_2 <br>public , args: ($mode)<br>
	 * @uses FileInfoOverride::Open_3 <br>public , args: ($mode, $access)<br>
	 * @uses FileInfoOverride::Open_4 <br>public , args: ($mode, $access, $share)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileStream|mixed|\override
	 */
	#[MethodOverridePublic]function Open (\override ...$args){}
	/**
	 * @return \System\IO\StreamReader
	 */
	public function OpenText(){}
	/**
	 * @return \System\IO\StreamWriter
	 */
	public function CreateText(){}
	/**
	 * @return \System\IO\StreamWriter
	 */
	public function AppendText(){}
	/**
	 * @uses FileInfoOverride::CopyTo_1 <br>public , args: ($destFileName)<br>
	 * @uses FileInfoOverride::CopyTo_2 <br>public , args: ($destFileName, $overwrite)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileInfo|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @return \System\IO\FileStream
	 */
	public function Create(){}
	/**
	 * @return \System\IO\FileStream
	 */
	public function OpenRead(){}
	/**
	 * @return \System\IO\FileStream
	 */
	public function OpenWrite(){}
	/**
	 * @uses FileInfoOverride::MoveTo_1 <br>public , args: ($destFileName)<br>
	 * @uses FileInfoOverride::MoveTo_2 <br>public , args: ($destFileName, $overwrite)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function MoveTo (\override ...$args){}
	/**
	 * @uses FileInfoOverride::Replace_1 <br>public , args: ($destinationFileName, $destinationBackupFileName)<br>
	 * @uses FileInfoOverride::Replace_2 <br>public , args: ($destinationFileName, $destinationBackupFileName, $ignoreMetadataErrors)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\FileInfo|mixed|\override
	 */
	#[MethodOverridePublic]function Replace (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Decrypt(){}
	/**
	 * @return \System\Void|void
	 */
	public function Encrypt(){}
	/**
	 * @param \System\String|string $fileName
	 */
	public function __construct($fileName){}
}