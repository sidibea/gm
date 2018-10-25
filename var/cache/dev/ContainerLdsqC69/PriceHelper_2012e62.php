<?php

class PriceHelper_2012e62 extends \Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder2012e62 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2012e62 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2012e62 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getPrice(\Sylius\Component\Core\Model\ProductVariantInterface $productVariant, array $context) : int
    {
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, 'getPrice', array('productVariant' => $productVariant, 'context' => $context), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        return $this->valueHolder2012e62->getPrice($productVariant, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, 'getName', array(), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        return $this->valueHolder2012e62->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharset($charset)
    {
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, 'setCharset', array('charset' => $charset), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        return $this->valueHolder2012e62->setCharset($charset);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharset()
    {
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, 'getCharset', array(), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        return $this->valueHolder2012e62->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper $instance) {
            unset($instance->productVariantPriceCalculator);
        }, $instance, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper')->__invoke($instance);

        $instance->initializer2012e62 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Sylius\Component\Core\Calculator\ProductVariantPriceCalculatorInterface $productVariantPriceCalculator)
    {
        static $reflection;

        if (! $this->valueHolder2012e62) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper');
            $this->valueHolder2012e62 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper $instance) {
            unset($instance->productVariantPriceCalculator);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper')->__invoke($this);

        }

        $this->valueHolder2012e62->__construct($productVariantPriceCalculator);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, '__get', ['name' => $name], $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        if (isset(self::$publicProperties2012e62[$name])) {
            return $this->valueHolder2012e62->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2012e62;

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

        $targetObject = $this->valueHolder2012e62;
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
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2012e62;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder2012e62;
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
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, '__isset', array('name' => $name), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2012e62;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2012e62;
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
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, '__unset', array('name' => $name), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2012e62;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2012e62;
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
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, '__clone', array(), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        $this->valueHolder2012e62 = clone $this->valueHolder2012e62;
    }

    public function __sleep()
    {
        $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, '__sleep', array(), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;

        return array('valueHolder2012e62');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper $instance) {
            unset($instance->productVariantPriceCalculator);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\PriceHelper')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer2012e62 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer2012e62;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer2012e62 && ($this->initializer2012e62->__invoke($valueHolder2012e62, $this, 'initializeProxy', array(), $this->initializer2012e62) || 1) && $this->valueHolder2012e62 = $valueHolder2012e62;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2012e62;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2012e62;
    }


}
