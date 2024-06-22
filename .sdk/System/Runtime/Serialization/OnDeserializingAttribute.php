<?php
namespace System\Runtime\Serialization;
final class OnDeserializingAttribute extends \System\Attribute
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