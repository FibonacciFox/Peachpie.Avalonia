<?php
namespace System\Runtime\Serialization;
final class OptionalFieldAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $VersionAdded;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}