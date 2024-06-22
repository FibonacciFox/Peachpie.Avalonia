<?php
namespace System\Diagnostics\Tracing;
final class Impl extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Generic\List_1[System\Diagnostics\Tracing\FieldMetadata]
	 */
	protected $fields;
	/**
	 * @field
	 * @var \System\Int16
	 */
	protected $scratchSize;
	/**
	 * @field
	 * @var \System\SByte
	 */
	protected $dataCount;
	/**
	 * @field
	 * @var \System\SByte
	 */
	protected $pinCount;
	/**
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	public function AddScalar($size){}
	/**
	 * @return \System\Void|void
	 */
	public function AddNonscalar(){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginBuffered(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndBuffered(){}
	/**
	 * @param \System\Byte $metadata
	 * @return \System\Int32|int
	 */
	public function Encode($metadata){}
	/**
	 */
	public function __construct(){}
}