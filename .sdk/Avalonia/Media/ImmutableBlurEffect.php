<?php
namespace Avalonia\Media;
class ImmutableBlurEffect extends \System\Object implements
	\Avalonia\Media\IBlurEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IImmutableEffect,
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Radius;
	/**
	 * @param \System\Double|double $radius
	 */
	public function __construct($radius){}
}