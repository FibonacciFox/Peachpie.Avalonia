<?php
namespace Avalonia\OpenGL;
/**
 */
class GlConsts extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_UNSIGNED_BYTE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_UNSIGNED_SHORT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_FLOAT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_TRIANGLES;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH_TEST;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH_COMPONENT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_LINEAR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STENCIL_BITS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RGBA;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_TEXTURE_2D;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_TEXTURE_MAG_FILTER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_TEXTURE_MIN_FILTER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_NEAREST;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_VENDOR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RENDERER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_VERSION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_EXTENSIONS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_NO_ERROR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_INVALID_ENUM;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_INVALID_VALUE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_INVALID_OPERATION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STACK_OVERFLOW;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STACK_UNDERFLOW;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_OUT_OF_MEMORY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_INVALID_FRAMEBUFFER_OPERATION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_CONTEXT_LOST;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STENCIL_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_COLOR_BUFFER_BIT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_TEXTURE_BINDING_2D;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RGBA8;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_BGRA;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_TEXTURE0;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_ACTIVE_TEXTURE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_SAMPLES;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH_COMPONENT16;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_ARRAY_BUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_ELEMENT_ARRAY_BUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STATIC_DRAW;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_FRAGMENT_SHADER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_VERTEX_SHADER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_COMPILE_STATUS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_LINK_STATUS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_INFO_LOG_LENGTH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_MAJOR_VERSION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_MINOR_VERSION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_NUM_EXTENSIONS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH_STENCIL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH24_STENCIL8;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_FRAMEBUFFER_BINDING;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RENDERBUFFER_BINDING;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_READ_FRAMEBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DRAW_FRAMEBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_READ_FRAMEBUFFER_BINDING;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_FRAMEBUFFER_COMPLETE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_COLOR_ATTACHMENT0;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEPTH_ATTACHMENT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STENCIL_ATTACHMENT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_FRAMEBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RENDERBUFFER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RENDERBUFFER_WIDTH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_RENDERBUFFER_HEIGHT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_STENCIL_INDEX8;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $GL_NUM_DEVICE_UUIDS_EXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $GL_DEVICE_UUID_EXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $GL_HANDLE_TYPE_OPAQUE_FD_EXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $GL_DEVICE_LUID_EXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $GL_LAYOUT_COLOR_ATTACHMENT_EXT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $GL_LAYOUT_TRANSFER_SRC_EXT;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
