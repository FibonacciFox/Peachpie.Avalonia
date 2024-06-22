<?php
namespace System\Runtime\Versioning;
final class TargetFrameworkAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FrameworkName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $FrameworkDisplayName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $frameworkName
	 */
	public function __construct($frameworkName){}
}