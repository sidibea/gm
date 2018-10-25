<?php

class SimpleLoader_4473cb1 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4473cb1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4473cb1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4473cb1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        return $this->valueHolder4473cb1->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);

        $instance->initializer4473cb1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Nelmio\Alice\FilesLoaderInterface $fileLoader, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolder4473cb1) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolder4473cb1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);

        }

        $this->valueHolder4473cb1->__construct($fileLoader, $logger);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, '__get', ['name' => $name], $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        if (isset(self::$publicProperties4473cb1[$name])) {
            return $this->valueHolder4473cb1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4473cb1;

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

        $targetObject = $this->valueHolder4473cb1;
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
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4473cb1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4473cb1;
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
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, '__isset', array('name' => $name), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4473cb1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4473cb1;
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
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, '__unset', array('name' => $name), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4473cb1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4473cb1;
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
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, '__clone', array(), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        $this->valueHolder4473cb1 = clone $this->valueHolder4473cb1;
    }

    public function __sleep()
    {
        $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, '__sleep', array(), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;

        return array('valueHolder4473cb1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer4473cb1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer4473cb1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer4473cb1 && ($this->initializer4473cb1->__invoke($valueHolder4473cb1, $this, 'initializeProxy', array(), $this->initializer4473cb1) || 1) && $this->valueHolder4473cb1 = $valueHolder4473cb1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4473cb1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4473cb1;
    }


}
