<?php
namespace Avalonia\Controls;
/**
 */
class CellCache extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ColumnIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $RowIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ColumnSpan;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $RowSpan;
	/**
	 * @var \Avalonia\Controls\Grid+LayoutTimeSizeType
	 * @field
	 */
	protected $SizeTypeU;
	/**
	 * @var \Avalonia\Controls\Grid+LayoutTimeSizeType
	 * @field
	 */
	protected $SizeTypeV;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Next;
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsStarU(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsAutoU(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsStarV(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsAutoV(){}
}
