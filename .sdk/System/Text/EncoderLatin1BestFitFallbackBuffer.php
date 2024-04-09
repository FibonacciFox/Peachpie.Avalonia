<?php
namespace System\Text;
final class EncoderLatin1BestFitFallbackBuffer extends \System\Text\EncoderFallbackBuffer
{
	/**
	 * @field
	 * @var \System\Char*
	 */
	protected $charStart;
	/**
	 * @field
	 * @var \System\Char*
	 */
	protected $charEnd;
	/**
	 * @field
	 * @var \System\Text\EncoderNLS
	 */
	protected $encoder;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $setEncoder;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $bUsedEncoder;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $bFallingBack;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $iRecursionCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Remaining;
	private static function TryBestFit($cUnknown){}
	/**
	 */
	public function __construct(){}
}