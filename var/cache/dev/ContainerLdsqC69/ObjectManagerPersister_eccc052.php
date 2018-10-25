<?php

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldereccc052 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereccc052 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseccc052 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function persist($object)
    {
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, 'persist', array('object' => $object), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        return $this->valueHoldereccc052->persist($object);
    }

    /**
     * {@inheritDoc}
     */
    public function flush()
    {
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, 'flush', array(), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        return $this->valueHoldereccc052->flush();
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadata);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);

        $instance->initializereccc052 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHoldereccc052) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHoldereccc052 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadata);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHoldereccc052->__construct($manager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, '__get', ['name' => $name], $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        if (isset(self::$publicPropertieseccc052[$name])) {
            return $this->valueHoldereccc052->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereccc052;

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

        $targetObject = $this->valueHoldereccc052;
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
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereccc052;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldereccc052;
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
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, '__isset', array('name' => $name), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereccc052;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereccc052;
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
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, '__unset', array('name' => $name), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereccc052;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereccc052;
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
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, '__clone', array(), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        $this->valueHoldereccc052 = clone $this->valueHoldereccc052;
    }

    public function __sleep()
    {
        $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, '__sleep', array(), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;

        return array('valueHoldereccc052');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadata);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializereccc052 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializereccc052;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializereccc052 && ($this->initializereccc052->__invoke($valueHoldereccc052, $this, 'initializeProxy', array(), $this->initializereccc052) || 1) && $this->valueHoldereccc052 = $valueHoldereccc052;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereccc052;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereccc052;
    }


}
