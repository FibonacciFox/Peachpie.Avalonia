<?php
namespace System\IO;
class FileSystemInfo extends \System\MarshalByRefObject implements
	\System\Runtime\Serialization\ISerializable
{

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
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	abstract public function Delete();
	/**
	 * @param \System\String|string $pathToTarget
	 * @return \System\Void|void
	 */
	public function CreateAsSymbolicLink($pathToTarget){}
	/**
	 * @param \System\Boolean|bool $returnFinalTarget
	 * @return \System\IO\FileSystemInfo
	 */
	public function ResolveLinkTarget($returnFinalTarget){}
	/**
	 * @param \System\String|string $fullPath
	 * @param \System\String|string $fileName
	 * @param \System\Boolean|bool $asDirectory
	 * @param \System\IO\FileStatus& $fileStatus
	 * @return \System\IO\FileSystemInfo
	 */
	protected static function Create($fullPath, $fileName, $asDirectory, $fileStatus){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateCore(){}
	/**
	 * @param \System\IO\FileStatus& $fileStatus
	 * @return \System\Void|void
	 */
	protected function Init($fileStatus){}
	/**
	 * @return \System\Void|void
	 */
	public function Refresh(){}
}