<?php
namespace Avalonia\X11\Glx;
/**
 */
class GlxConsts extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_USE_GL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BUFFER_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_LEVEL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_RGBA;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DOUBLEBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_STEREO;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_AUX_BUFFERS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_RED_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_GREEN_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BLUE_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_ALPHA_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DEPTH_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_STENCIL_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_ACCUM_RED_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_ACCUM_GREEN_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_ACCUM_BLUE_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_ACCUM_ALPHA_SIZE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BAD_SCREEN;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BAD_ATTRIBUTE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_NO_EXTENSION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BAD_VISUAL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BAD_CONTEXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BAD_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BAD_ENUM;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_VENDOR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_VERSION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_EXTENSIONS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONFIG_CAVEAT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DONT_CARE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_X_VISUAL_TYPE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_TYPE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_INDEX_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_RED_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_GREEN_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_BLUE_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_ALPHA_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_WINDOW_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PIXMAP_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PBUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_AUX_BUFFERS_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_FRONT_LEFT_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_FRONT_RIGHT_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BACK_LEFT_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BACK_RIGHT_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DEPTH_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_STENCIL_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_ACCUM_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_NONE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_SLOW_CONFIG;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRUE_COLOR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DIRECT_COLOR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PSEUDO_COLOR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_STATIC_COLOR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_GRAY_SCALE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_STATIC_GRAY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_RGB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_TRANSPARENT_INDEX;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_VISUAL_ID;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_SCREEN;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_NON_CONFORMANT_CONFIG;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DRAWABLE_TYPE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_RENDER_TYPE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_X_RENDERABLE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_FBCONFIG_ID;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_RGBA_TYPE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_COLOR_INDEX_TYPE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_MAX_PBUFFER_WIDTH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_MAX_PBUFFER_HEIGHT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_MAX_PBUFFER_PIXELS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PRESERVED_CONTENTS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_LARGEST_PBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_WIDTH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_HEIGHT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_EVENT_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_DAMAGED;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_SAVED;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_WINDOW;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PBUFFER_HEIGHT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PBUFFER_WIDTH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_RGBA_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_COLOR_INDEX_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PBUFFER_CLOBBER_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_SAMPLE_BUFFERS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_SAMPLES;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_PbufferClobber;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_BufferSwapComplete;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_DEBUG_BIT_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_FORWARD_COMPATIBLE_BIT_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_MAJOR_VERSION_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_MINOR_VERSION_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_FLAGS_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_CORE_PROFILE_BIT_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_COMPATIBILITY_PROFILE_BIT_ARB;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_ES2_PROFILE_BIT_EXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GLX_CONTEXT_PROFILE_MASK_ARB;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
