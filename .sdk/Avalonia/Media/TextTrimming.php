<?php
namespace Avalonia\Media;
class TextTrimming extends \System\Object
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	const DefaultEllipsisChar = '…';
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 * @since readonly
	 */
	public $None;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 * @since readonly
	 */
	public $CharacterEllipsis;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 * @since readonly
	 */
	public $WordEllipsis;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 * @since readonly
	 */
	public $PrefixCharacterEllipsis;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 * @since readonly
	 */
	public $LeadingCharacterEllipsis;
	/**
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $createInfo
	 * @return \Avalonia\Media\TextFormatting\TextCollapsingProperties
	 */
	abstract public function CreateCollapsingProperties($createInfo);
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function Parse($s){}
}