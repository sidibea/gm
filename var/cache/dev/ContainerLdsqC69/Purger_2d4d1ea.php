<?php

class Purger_2d4d1ea extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder2d4d1ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2d4d1ea = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2d4d1ea = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        return $this->valueHolder2d4d1ea->create($mode, $purger);
    }

    /**
     * {@inheritDoc}
     */
    public function purge()
    {
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, 'purge', array(), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        return $this->valueHolder2d4d1ea->purge();
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($instance);

        $instance->initializer2d4d1ea = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHolder2d4d1ea) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHolder2d4d1ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHolder2d4d1ea->__construct($manager, $purgeMode);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, '__get', ['name' => $name], $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        if (isset(self::$publicProperties2d4d1ea[$name])) {
            return $this->valueHolder2d4d1ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d4d1ea;

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

        $targetObject = $this->valueHolder2d4d1ea;
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
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d4d1ea;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder2d4d1ea;
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
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, '__isset', array('name' => $name), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d4d1ea;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2d4d1ea;
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
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, '__unset', array('name' => $name), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d4d1ea;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2d4d1ea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, '__clone', array(), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        $this->valueHolder2d4d1ea = clone $this->valueHolder2d4d1ea;
    }

    public function __sleep()
    {
        $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, '__sleep', array(), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;

        return array('valueHolder2d4d1ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer2d4d1ea = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer2d4d1ea;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer2d4d1ea && ($this->initializer2d4d1ea->__invoke($valueHolder2d4d1ea, $this, 'initializeProxy', array(), $this->initializer2d4d1ea) || 1) && $this->valueHolder2d4d1ea = $valueHolder2d4d1ea;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2d4d1ea;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2d4d1ea;
    }


}
