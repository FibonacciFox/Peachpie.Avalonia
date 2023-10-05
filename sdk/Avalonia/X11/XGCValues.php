<?php
namespace Avalonia\X11;
/**
 */
class XGCValues extends \System\ValueType
{
	/**
	 * @var \Avalonia\X11\GXFunction
	 * @field
	 */
	protected $function;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $plane_mask;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $foreground;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $background;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $line_width;
	/**
	 * @var \Avalonia\X11\GCLineStyle
	 * @field
	 */
	protected $line_style;
	/**
	 * @var \Avalonia\X11\GCCapStyle
	 * @field
	 */
	protected $cap_style;
	/**
	 * @var \Avalonia\X11\GCJoinStyle
	 * @field
	 */
	protected $join_style;
	/**
	 * @var \Avalonia\X11\GCFillStyle
	 * @field
	 */
	protected $fill_style;
	/**
	 * @var \Avalonia\X11\GCFillRule
	 * @field
	 */
	protected $fill_rule;
	/**
	 * @var \Avalonia\X11\GCArcMode
	 * @field
	 */
	protected $arc_mode;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $tile;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $stipple;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ts_x_origin;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ts_y_origin;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $font;
	/**
	 * @var \Avalonia\X11\GCSubwindowMode
	 * @field
	 */
	protected $subwindow_mode;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $graphics_exposures;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $clip_x_origin;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $clib_y_origin;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $clip_mask;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $dash_offset;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $dashes;
}
