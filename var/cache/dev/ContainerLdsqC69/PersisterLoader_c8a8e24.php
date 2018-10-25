<?php

class PersisterLoader_c8a8e24 extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderc8a8e24 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc8a8e24 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc8a8e24 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PersisterLoader
    {
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, 'withPersister', array('persister' => $persister), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        return $this->valueHolderc8a8e24->withPersister($persister);
    }

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        return $this->valueHolderc8a8e24->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($instance);

        $instance->initializerc8a8e24 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister, ?\Psr\Log\LoggerInterface $logger = null, array $processors = [])
    {
        static $reflection;

        if (! $this->valueHolderc8a8e24) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');
            $this->valueHolderc8a8e24 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);

        }

        $this->valueHolderc8a8e24->__construct($decoratedLoader, $persister, $logger, $processors);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, '__get', ['name' => $name], $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        if (isset(self::$publicPropertiesc8a8e24[$name])) {
            return $this->valueHolderc8a8e24->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a8e24;

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

        $targetObject = $this->valueHolderc8a8e24;
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
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a8e24;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderc8a8e24;
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
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, '__isset', array('name' => $name), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a8e24;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc8a8e24;
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
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, '__unset', array('name' => $name), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8a8e24;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc8a8e24;
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
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, '__clone', array(), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        $this->valueHolderc8a8e24 = clone $this->valueHolderc8a8e24;
    }

    public function __sleep()
    {
        $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, '__sleep', array(), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;

        return array('valueHolderc8a8e24');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerc8a8e24 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerc8a8e24;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerc8a8e24 && ($this->initializerc8a8e24->__invoke($valueHolderc8a8e24, $this, 'initializeProxy', array(), $this->initializerc8a8e24) || 1) && $this->valueHolderc8a8e24 = $valueHolderc8a8e24;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8a8e24;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8a8e24;
    }


}
