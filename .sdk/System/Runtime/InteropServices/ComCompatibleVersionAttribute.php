<?php
namespace System\Runtime\InteropServices;
final class ComCompatibleVersionAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MajorVersion;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MinorVersion;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $BuildNumber;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RevisionNumber;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 * @param \System\Int32|int $build
	 * @param \System\Int32|int $revision
	 */
	public function __construct($major, $minor, $build, $revision){}
}