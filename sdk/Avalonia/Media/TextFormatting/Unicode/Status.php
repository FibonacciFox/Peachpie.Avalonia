<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class Status extends \System\ValueType
{
	/**
	 * @var \System\SByte
	 * @property
	 */
	public readonly $EmbeddingLevel;
	/**
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @property
	 */
	public readonly $OverrideStatus;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsolateStatus;
	/**
	 * @return \System\SByte
	 */
	public  function get_EmbeddingLevel(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 */
	public  function get_OverrideStatus(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsolateStatus(){}
}
