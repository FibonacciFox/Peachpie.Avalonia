<?php
namespace Avalonia\Media\Immutable;
class ImmutableTransform extends \System\Object implements
	\Avalonia\Media\ITransform
{
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \Avalonia\Matrix $matrix
	 */
	public function __construct($matrix){}
}