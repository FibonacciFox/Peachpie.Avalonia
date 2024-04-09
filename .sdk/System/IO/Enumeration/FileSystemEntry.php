<?php
namespace System\IO\Enumeration;
final class FileSystemEntry extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @since readonly
	 */
	public $FileName;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	public $Directory;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	public $RootDirectory;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	public $OriginalRootDirectory;
	/**
	 * @property
	 * @var \System\IO\FileAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\DateTimeOffset
	 * @since readonly
	 */
	public $CreationTimeUtc;
	/**
	 * @property
	 * @var \System\DateTimeOffset
	 * @since readonly
	 */
	public $LastAccessTimeUtc;
	/**
	 * @property
	 * @var \System\DateTimeOffset
	 * @since readonly
	 */
	public $LastWriteTimeUtc;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHidden;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDirectory;
	/**
	 * @return \System\String|string
	 */
	public function ToSpecifiedFullPath(){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @param \Interop+Sys+DirectoryEntry $directoryEntry
	 * @param \System\ReadOnlySpan_1 $directory [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $rootDirectory [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $originalRootDirectory [generic: System\Char]
	 * @param \System\Span_1 $pathBuffer [generic: System\Char]
	 * @return \System\IO\FileAttributes
	 */
	protected static function Initialize($entry, $directoryEntry, $directory, $rootDirectory, $originalRootDirectory, $pathBuffer){}
	/**
	 * @return \System\IO\FileSystemInfo
	 */
	public function ToFileSystemInfo(){}
	/**
	 * @return \System\String|string
	 */
	public function ToFullPath(){}
}