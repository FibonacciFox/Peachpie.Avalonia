<?php
namespace Avalonia\Media;
final class BoxShadowsEnumerator extends \System\ValueType
{

	/**
	 * @property
	 * @var \Avalonia\Media\BoxShadow
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @param \Avalonia\Media\BoxShadows $shadows
	 */
	public function __construct($shadows){}
}