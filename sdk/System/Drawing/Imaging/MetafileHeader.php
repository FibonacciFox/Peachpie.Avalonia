<?php
namespace System\Drawing\Imaging;
/**
 */
class MetafileHeader extends \System\Object
{
	/**
	 * @var \System\Drawing\Rectangle
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $DpiX;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $DpiY;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $EmfPlusHeaderSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LogicalDpiX;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LogicalDpiY;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetafileSize;
	/**
	 * @var \System\Drawing\Imaging\MetafileType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Drawing\Imaging\MetaHeader
	 * @property
	 */
	public readonly $WmfHeader;
	/**
	 * @return \System\Drawing\Rectangle
	 */
	public  function get_Bounds(){}
	/**
	 * @return \System\Single
	 */
	public  function get_DpiX(){}
	/**
	 * @return \System\Single
	 */
	public  function get_DpiY(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EmfPlusHeaderSize(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LogicalDpiX(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LogicalDpiY(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MetafileSize(){}
	/**
	 * @return \System\Drawing\Imaging\MetafileType
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Drawing\Imaging\MetaHeader
	 */
	public  function get_WmfHeader(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsDisplay(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEmf(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEmfOrEmfPlus(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEmfPlus(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEmfPlusDual(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEmfPlusOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsWmf(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsWmfPlaceable(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
