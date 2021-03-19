<?php

namespace ContainerZ2Uk2fE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70ad8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6f1d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3b023 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getConnection', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getMetadataFactory', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getExpressionBuilder', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'beginTransaction', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getCache', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'transactional', array('func' => $func), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->transactional($func);
    }

    public function commit()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'commit', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->commit();
    }

    public function rollback()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'rollback', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'createQuery', array('dql' => $dql), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'createQueryBuilder', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'flush', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'clear', array('entityName' => $entityName), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'close', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->close();
    }

    public function persist($entity)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'persist', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'remove', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'refresh', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'detach', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'merge', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'contains', array('entity' => $entity), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getEventManager', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getConfiguration', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'isOpen', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getUnitOfWork', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getProxyFactory', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'getFilters', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'isFiltersStateClean', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'hasFilters', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return $this->valueHolder70ad8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc6f1d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder70ad8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70ad8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70ad8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, '__get', ['name' => $name], $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        if (isset(self::$publicProperties3b023[$name])) {
            return $this->valueHolder70ad8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70ad8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70ad8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70ad8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70ad8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, '__isset', array('name' => $name), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70ad8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70ad8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, '__unset', array('name' => $name), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70ad8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70ad8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, '__clone', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        $this->valueHolder70ad8 = clone $this->valueHolder70ad8;
    }

    public function __sleep()
    {
        $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, '__sleep', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;

        return array('valueHolder70ad8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6f1d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6f1d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6f1d && ($this->initializerc6f1d->__invoke($valueHolder70ad8, $this, 'initializeProxy', array(), $this->initializerc6f1d) || 1) && $this->valueHolder70ad8 = $valueHolder70ad8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70ad8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70ad8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
