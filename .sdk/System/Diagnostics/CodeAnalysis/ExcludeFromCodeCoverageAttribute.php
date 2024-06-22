<?php
namespace System\Diagnostics\CodeAnalysis;
final class ExcludeFromCodeCoverageAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Justification;
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