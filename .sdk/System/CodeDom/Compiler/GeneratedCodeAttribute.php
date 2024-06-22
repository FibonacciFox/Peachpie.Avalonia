<?php
namespace System\CodeDom\Compiler;
final class GeneratedCodeAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Tool;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $tool
	 * @param \System\String|string $version
	 */
	public function __construct($tool, $version){}
}