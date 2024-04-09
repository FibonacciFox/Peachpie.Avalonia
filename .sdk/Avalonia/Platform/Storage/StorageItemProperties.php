<?php
namespace Avalonia\Platform\Storage;
class StorageItemProperties extends \System\Object
{
	/**
	 * @property
	 * @var \System\Nullable_1[System\UInt64]
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTimeOffset]
	 * @since readonly
	 */
	public $DateCreated;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTimeOffset]
	 * @since readonly
	 */
	public $DateModified;
	/**
	 * @param \System\Nullable_1 $size [generic: System\UInt64]
	 * @param \System\Nullable_1 $dateCreated [generic: System\DateTimeOffset]
	 * @param \System\Nullable_1 $dateModified [generic: System\DateTimeOffset]
	 */
	public function __construct($size, $dateCreated, $dateModified){}
}