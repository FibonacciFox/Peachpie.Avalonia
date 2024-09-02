<?php
namespace System\Collections;
final class Bucket extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Object|object
	 */
	public $key;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	public $val;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $hash_coll;

}