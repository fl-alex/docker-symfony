<?php

namespace ContainerGTdGg03;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder631cc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer26cf4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescc9ab = [
        
    ];

    public function getConnection()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getConnection', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getMetadataFactory', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getExpressionBuilder', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'beginTransaction', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getCache', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'transactional', array('func' => $func), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'commit', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->commit();
    }

    public function rollback()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'rollback', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getClassMetadata', array('className' => $className), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'createQuery', array('dql' => $dql), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'createNamedQuery', array('name' => $name), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'createQueryBuilder', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'flush', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'clear', array('entityName' => $entityName), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->clear($entityName);
    }

    public function close()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'close', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->close();
    }

    public function persist($entity)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'persist', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'remove', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'refresh', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'detach', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'merge', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'contains', array('entity' => $entity), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getEventManager', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getConfiguration', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'isOpen', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getUnitOfWork', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getProxyFactory', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'initializeObject', array('obj' => $obj), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'getFilters', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'isFiltersStateClean', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'hasFilters', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return $this->valueHolder631cc->hasFilters();
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

        $instance->initializer26cf4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder631cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder631cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder631cc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, '__get', ['name' => $name], $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        if (isset(self::$publicPropertiescc9ab[$name])) {
            return $this->valueHolder631cc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder631cc;

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

        $targetObject = $this->valueHolder631cc;
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
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder631cc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder631cc;
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
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, '__isset', array('name' => $name), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder631cc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder631cc;
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
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, '__unset', array('name' => $name), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder631cc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder631cc;
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
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, '__clone', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        $this->valueHolder631cc = clone $this->valueHolder631cc;
    }

    public function __sleep()
    {
        $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, '__sleep', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;

        return array('valueHolder631cc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer26cf4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer26cf4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer26cf4 && ($this->initializer26cf4->__invoke($valueHolder631cc, $this, 'initializeProxy', array(), $this->initializer26cf4) || 1) && $this->valueHolder631cc = $valueHolder631cc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder631cc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder631cc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
