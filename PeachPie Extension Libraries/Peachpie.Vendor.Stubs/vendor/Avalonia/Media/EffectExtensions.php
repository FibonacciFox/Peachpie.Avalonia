<?php
namespace Avalonia\Media;
class EffectExtensions extends \System\Object
{

	private static function AdjustPaddingRadius($radius){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \Avalonia\Thickness
	 */
	protected static function GetEffectOutputPadding($effect){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	public static function ToImmutable($effect){}
	/**
	 * @param \Avalonia\Media\IImmutableEffect $immutable
	 * @param \Avalonia\Media\IEffect $right
	 * @return \System\Boolean|bool
	 */
	protected static function EffectEquals($immutable, $right){}
}