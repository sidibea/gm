<?php

class ChannelRepository_04960bc extends \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder04960bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04960bc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties04960bc = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findOneByHostname(string $hostname) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findOneByHostname', array('hostname' => $hostname), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->findOneByHostname($hostname);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneByCode(string $code) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findOneByCode', array('code' => $code), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->findOneByCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function findByName(string $name) : iterable
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findByName', array('name' => $name), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->findByName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'add', array('resource' => $resource), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        $this->valueHolder04960bc->add($resource);
return;
    }

    /**
     * {@inheritDoc}
     */
    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'remove', array('resource' => $resource), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        $this->valueHolder04960bc->remove($resource);
return;
    }

    /**
     * {@inheritDoc}
     */
    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->createPaginator($criteria, $sorting);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'clear', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findAll', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'count', array('criteria' => $criteria), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'getClassName', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'matching', array('criteria' => $criteria), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return $this->valueHolder04960bc->matching($criteria);
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

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer04960bc = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolder04960bc) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository');
            $this->valueHolder04960bc = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder04960bc->__construct($em, $class);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__get', ['name' => $name], $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        if (isset(self::$publicProperties04960bc[$name])) {
            return $this->valueHolder04960bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;

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

        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__isset', array('name' => $name), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__unset', array('name' => $name), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__clone', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        $this->valueHolder04960bc = clone $this->valueHolder04960bc;
    }

    public function __sleep()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__sleep', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;

        return array('valueHolder04960bc');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer04960bc = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer04960bc;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'initializeProxy', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04960bc;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04960bc;
    }


}
