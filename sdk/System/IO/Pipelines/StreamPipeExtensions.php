<?php
namespace System\IO\Pipelines;
/**
 */
class StreamPipeExtensions extends \System\Object
{
	/**
	 * @param \System\IO\Stream $source
	 * @param \System\IO\Pipelines\PipeWriter $destination
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public static function CopyToAsync($source, $destination, $cancellationToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
