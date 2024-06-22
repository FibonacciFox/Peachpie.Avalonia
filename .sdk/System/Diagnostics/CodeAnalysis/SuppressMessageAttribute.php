<?php
namespace System\Diagnostics\CodeAnalysis;
final class SuppressMessageAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Category;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CheckId;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Scope;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $MessageId;
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
	 * @param \System\String|string $category
	 * @param \System\String|string $checkId
	 */
	public function __construct($category, $checkId){}
}