<?php
namespace System\Reflection;
final class AssemblyCopyrightAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Copyright;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $copyright
	 */
	public function __construct($copyright){}
}