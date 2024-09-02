<?php
namespace System\Runtime\CompilerServices;
class MetadataUpdateOriginalTypeAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $OriginalType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $originalType
	 */
	public function __construct($originalType){}
}