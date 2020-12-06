<?php namespace Backend\Classes;

/**
 * Class QuickActionItem
 *
 * @package Backend\Classes
 */
class QuickActionItem
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $label;

    /**
     * @var null|string
     */
    public $icon;

    /**
     * @var null|string
     */
    public $iconSvg;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $order = -1;

    /**
     * @var array
     */
    public $attributes = [];

    /**
     * @var array
     */
    public $permissions = [];

    /**
     * @var Skeywords[]
     */
    public $keywords = [];

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $group;

    /**
     * @param null|string|int $attribute
     * @param null|string|array $value
     */
    public function addAttribute($attribute, $value)
    {
        $this->attributes[$attribute] = $value;
    }

    public function removeAttribute($attribute)
    {
        unset($this->attributes[$attribute]);
    }

    /**
     * @param string $permission
     * @param array $definition
     */
    public function addPermission(string $permission, array $definition)
    {
        $this->permissions[$permission] = $definition;
    }

    /**
     * @param string $permission
     * @return void
     */
    public function removePermission(string $permission)
    {
        unset($this->permissions[$permission]);
    }

    /**
     * @param array $data
     * @return static
     */
    public static function createFromArray(array $data)
    {
        $instance = new static();
        $instance->code = $data['code'];
        $instance->owner = $data['owner'];
        $instance->label = $data['label'];
        $instance->url = $data['url'];
        $instance->icon = $data['icon'] ?? null;
        $instance->iconSvg = $data['iconSvg'] ?? null;
        $instance->attributes = $data['attributes'] ?? $instance->attributes;
        $instance->permissions = $data['permissions'] ?? $instance->permissions;
        $instance->order = $data['order'] ?? $instance->order;
        $instance->keywords = $data['keywords'] ?? null;
        $instance->description = $data['description'] ?? null;
        $instance->group = $data['group'] ?? null;
        return $instance;
    }
}
