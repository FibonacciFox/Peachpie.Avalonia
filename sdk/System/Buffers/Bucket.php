<?php
namespace System\Buffers;
/**
 */
class Bucket extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_bufferLength;
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Id(){}
	/**
	 * @return \System\Buffers\T[]
	 */
	protected  function Rent(){}
	/**
	 * @param \System\Buffers\T[] $array
	 * @return \System\Void|void
	 */
	protected  function Return($array){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
