<?php
namespace Avalonia\Metadata;
final class AvaloniaListAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $Separators;
	/**
	 * @property
	 * @var \System\StringSplitOptions
	 */
	public $SplitOptions;
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