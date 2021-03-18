<?php

namespace ContainerVDjjxqF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera635c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05746 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa4606 = [
        
    ];

    public function getConnection()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getConnection', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getMetadataFactory', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getExpressionBuilder', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'beginTransaction', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getCache', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'transactional', array('func' => $func), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->transactional($func);
    }

    public function commit()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'commit', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->commit();
    }

    public function rollback()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'rollback', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getClassMetadata', array('className' => $className), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'createQuery', array('dql' => $dql), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'createNamedQuery', array('name' => $name), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'createQueryBuilder', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'flush', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'clear', array('entityName' => $entityName), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->clear($entityName);
    }

    public function close()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'close', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->close();
    }

    public function persist($entity)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'persist', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'remove', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'refresh', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'detach', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'merge', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'contains', array('entity' => $entity), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getEventManager', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getConfiguration', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'isOpen', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getUnitOfWork', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getProxyFactory', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'initializeObject', array('obj' => $obj), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'getFilters', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'isFiltersStateClean', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'hasFilters', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return $this->valueHoldera635c->hasFilters();
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

        $instance->initializer05746 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera635c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera635c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera635c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, '__get', ['name' => $name], $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        if (isset(self::$publicPropertiesa4606[$name])) {
            return $this->valueHoldera635c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera635c;

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

        $targetObject = $this->valueHoldera635c;
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
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera635c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera635c;
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
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, '__isset', array('name' => $name), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera635c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera635c;
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
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, '__unset', array('name' => $name), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera635c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera635c;
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
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, '__clone', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        $this->valueHoldera635c = clone $this->valueHoldera635c;
    }

    public function __sleep()
    {
        $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, '__sleep', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;

        return array('valueHoldera635c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer05746 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer05746;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05746 && ($this->initializer05746->__invoke($valueHoldera635c, $this, 'initializeProxy', array(), $this->initializer05746) || 1) && $this->valueHoldera635c = $valueHoldera635c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera635c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera635c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
