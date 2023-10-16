<?php
namespace System\Diagnostics\Tracing;
/**
 */
class Impl extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\List_1[System\Diagnostics\Tracing\FieldMetadata]
	 * @field
	 */
	protected readonly $fields;
	/**
	 * @var \System\Int16
	 * @field
	 */
	protected $scratchSize;
	/**
	 * @var \System\SByte
	 * @field
	 */
	protected $dataCount;
	/**
	 * @var \System\SByte
	 * @field
	 */
	protected $pinCount;
	/**
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	public  function AddScalar($size){}
	/**
	 * @return \System\Void|void
	 */
	public  function AddNonscalar(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginBuffered(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndBuffered(){}
	/**
	 * @param \System\Byte[] $metadata
	 * @return \System\Int32|int
	 */
	public  function Encode($metadata){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
