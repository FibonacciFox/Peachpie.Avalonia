<?php
namespace Avalonia\Data\Core;
class EnsureTypePropertyPathElement extends \System\Object implements
	\Avalonia\Data\Core\IPropertyPathElement
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \System\Type $type
	 */
	public function __construct($type){}
}