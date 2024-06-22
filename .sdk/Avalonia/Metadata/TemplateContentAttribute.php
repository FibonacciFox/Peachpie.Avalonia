<?php
namespace Avalonia\Metadata;
final class TemplateContentAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Type
	 */
	public $TemplateResultType;
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