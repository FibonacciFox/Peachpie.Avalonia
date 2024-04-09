<?php
namespace System\Runtime\Serialization;
final class OnDeserializedAttribute extends \System\Attribute
{
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