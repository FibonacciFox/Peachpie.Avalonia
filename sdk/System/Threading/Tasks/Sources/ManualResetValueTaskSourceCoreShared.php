<?php
namespace System\Threading\Tasks\Sources;
/**
 */
class ManualResetValueTaskSourceCoreShared extends \System\Object
{
	/**
	 * @var \System\Action_1[System\Object]
	 * @field
	 */
	protected readonly $s_sentinel;
	/**
	 * @param \System\Object|object $_
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompletionSentinel($_){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
