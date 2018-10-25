<?php

class XliffFileLoader_17bf9c6 extends \Symfony\Component\Translation\Loader\XliffFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder17bf9c6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer17bf9c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17bf9c6 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        return $this->valueHolder17bf9c6->load($resource, $locale, $domain);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        $instance->initializer17bf9c6 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder17bf9c6) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\XliffFileLoader');
            $this->valueHolder17bf9c6 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, '__get', ['name' => $name], $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        if (isset(self::$publicProperties17bf9c6[$name])) {
            return $this->valueHolder17bf9c6->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17bf9c6;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder17bf9c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17bf9c6;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder17bf9c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, '__isset', array('name' => $name), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17bf9c6;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder17bf9c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, '__unset', array('name' => $name), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17bf9c6;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder17bf9c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, '__clone', array(), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        $this->valueHolder17bf9c6 = clone $this->valueHolder17bf9c6;
    }

    public function __sleep()
    {
        $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, '__sleep', array(), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;

        return array('valueHolder17bf9c6');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer17bf9c6 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer17bf9c6;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer17bf9c6 && ($this->initializer17bf9c6->__invoke($valueHolder17bf9c6, $this, 'initializeProxy', array(), $this->initializer17bf9c6) || 1) && $this->valueHolder17bf9c6 = $valueHolder17bf9c6;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder17bf9c6;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder17bf9c6;
    }


}
