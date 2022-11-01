<?php

namespace ContainerPcQBp31;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd1216 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55b3a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b839 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getConnection', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getMetadataFactory', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getExpressionBuilder', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'beginTransaction', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getCache', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'transactional', array('func' => $func), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'commit', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->commit();
    }

    public function rollback()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'rollback', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getClassMetadata', array('className' => $className), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'createQuery', array('dql' => $dql), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'createNamedQuery', array('name' => $name), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'createQueryBuilder', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'flush', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'clear', array('entityName' => $entityName), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->clear($entityName);
    }

    public function close()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'close', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->close();
    }

    public function persist($entity)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'persist', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'remove', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'refresh', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'detach', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'merge', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'contains', array('entity' => $entity), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getEventManager', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getConfiguration', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'isOpen', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getUnitOfWork', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getProxyFactory', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'initializeObject', array('obj' => $obj), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'getFilters', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'isFiltersStateClean', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'hasFilters', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return $this->valueHolderd1216->hasFilters();
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

        $instance->initializer55b3a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd1216) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd1216 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd1216->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, '__get', ['name' => $name], $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        if (isset(self::$publicProperties8b839[$name])) {
            return $this->valueHolderd1216->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1216;

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

        $targetObject = $this->valueHolderd1216;
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
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1216;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1216;
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
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, '__isset', array('name' => $name), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1216;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd1216;
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
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, '__unset', array('name' => $name), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1216;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd1216;
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
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, '__clone', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        $this->valueHolderd1216 = clone $this->valueHolderd1216;
    }

    public function __sleep()
    {
        $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, '__sleep', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;

        return array('valueHolderd1216');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55b3a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55b3a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55b3a && ($this->initializer55b3a->__invoke($valueHolderd1216, $this, 'initializeProxy', array(), $this->initializer55b3a) || 1) && $this->valueHolderd1216 = $valueHolderd1216;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd1216;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd1216;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
