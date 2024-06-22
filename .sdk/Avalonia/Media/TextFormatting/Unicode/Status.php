<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class Status extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\SByte
	 * @since readonly
	 */
	public $EmbeddingLevel;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @since readonly
	 */
	public $OverrideStatus;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsolateStatus;
	/**
	 * @param \System\SByte $embeddingLevel
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $overrideStatus
	 * @param \System\Boolean|bool $isolateStatus
	 */
	public function __construct($embeddingLevel, $overrideStatus, $isolateStatus){}
}