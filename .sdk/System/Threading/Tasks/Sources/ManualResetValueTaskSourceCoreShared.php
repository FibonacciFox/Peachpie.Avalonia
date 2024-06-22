<?php
namespace System\Threading\Tasks\Sources;
class ManualResetValueTaskSourceCoreShared extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Action_1[System\Object]
	 */
	protected static $s_sentinel;
	private static function CompletionSentinel($_){}
}