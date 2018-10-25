<?php

class PurgerLoader_cb68499 extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercb68499 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercb68499 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb68499 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PurgerLoader
    {
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, 'withPersister', array('persister' => $persister), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        return $this->valueHoldercb68499->withPersister($persister);
    }

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        return $this->valueHoldercb68499->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($instance);

        $instance->initializercb68499 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PurgerFactoryInterface $purgerFactory, string $defaultPurgeMode, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHoldercb68499) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');
            $this->valueHoldercb68499 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);

        }

        $this->valueHoldercb68499->__construct($decoratedLoader, $purgerFactory, $defaultPurgeMode, $logger);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, '__get', ['name' => $name], $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        if (isset(self::$publicPropertiescb68499[$name])) {
            return $this->valueHoldercb68499->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb68499;

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

        $targetObject = $this->valueHoldercb68499;
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
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb68499;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercb68499;
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
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, '__isset', array('name' => $name), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb68499;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb68499;
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
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, '__unset', array('name' => $name), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb68499;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb68499;
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
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, '__clone', array(), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        $this->valueHoldercb68499 = clone $this->valueHoldercb68499;
    }

    public function __sleep()
    {
        $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, '__sleep', array(), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;

        return array('valueHoldercb68499');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializercb68499 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercb68499;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercb68499 && ($this->initializercb68499->__invoke($valueHoldercb68499, $this, 'initializeProxy', array(), $this->initializercb68499) || 1) && $this->valueHoldercb68499 = $valueHoldercb68499;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb68499;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb68499;
    }


}
