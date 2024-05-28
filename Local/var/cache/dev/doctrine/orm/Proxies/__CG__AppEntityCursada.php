<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cursada extends \App\Entity\Cursada implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'ciclo_lectivo', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'alumno', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'cursada_docente', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'comision', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'examenAlumnos', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'libre', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'nota1', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'nota2', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'asignatura'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'ciclo_lectivo', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'alumno', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'cursada_docente', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'comision', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'examenAlumnos', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'libre', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'nota1', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'nota2', '' . "\0" . 'App\\Entity\\Cursada' . "\0" . 'asignatura'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cursada $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCicloLectivo(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCicloLectivo', []);

        return parent::getCicloLectivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCicloLectivo(int $ciclo_lectivo): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCicloLectivo', [$ciclo_lectivo]);

        return parent::setCicloLectivo($ciclo_lectivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlumno(): ?\App\Entity\Alumno
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlumno', []);

        return parent::getAlumno();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlumno(?\App\Entity\Alumno $alumno): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlumno', [$alumno]);

        return parent::setAlumno($alumno);
    }

    /**
     * {@inheritDoc}
     */
    public function getCursadaDocente(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCursadaDocente', []);

        return parent::getCursadaDocente();
    }

    /**
     * {@inheritDoc}
     */
    public function addCursadaDocente(\App\Entity\CursadaDocente $cursadaDocente): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCursadaDocente', [$cursadaDocente]);

        return parent::addCursadaDocente($cursadaDocente);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCursadaDocente(\App\Entity\CursadaDocente $cursadaDocente): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCursadaDocente', [$cursadaDocente]);

        return parent::removeCursadaDocente($cursadaDocente);
    }

    /**
     * {@inheritDoc}
     */
    public function getComision(): ?\App\Entity\Comision
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComision', []);

        return parent::getComision();
    }

    /**
     * {@inheritDoc}
     */
    public function setComision(?\App\Entity\Comision $comision): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComision', [$comision]);

        return parent::setComision($comision);
    }

    /**
     * {@inheritDoc}
     */
    public function getExamenAlumnos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExamenAlumnos', []);

        return parent::getExamenAlumnos();
    }

    /**
     * {@inheritDoc}
     */
    public function addExamenAlumno(\App\Entity\ExamenAlumno $examenAlumno): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExamenAlumno', [$examenAlumno]);

        return parent::addExamenAlumno($examenAlumno);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExamenAlumno(\App\Entity\ExamenAlumno $examenAlumno): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExamenAlumno', [$examenAlumno]);

        return parent::removeExamenAlumno($examenAlumno);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function isLibre(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLibre', []);

        return parent::isLibre();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibre(bool $libre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibre', [$libre]);

        return parent::setLibre($libre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNota1(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNota1', []);

        return parent::getNota1();
    }

    /**
     * {@inheritDoc}
     */
    public function setNota1(?int $nota1): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNota1', [$nota1]);

        return parent::setNota1($nota1);
    }

    /**
     * {@inheritDoc}
     */
    public function getNota2(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNota2', []);

        return parent::getNota2();
    }

    /**
     * {@inheritDoc}
     */
    public function setNota2(?int $nota2): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNota2', [$nota2]);

        return parent::setNota2($nota2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsignatura(): ?\App\Entity\Asignatura
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsignatura', []);

        return parent::getAsignatura();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsignatura(?\App\Entity\Asignatura $asignatura): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsignatura', [$asignatura]);

        return parent::setAsignatura($asignatura);
    }

}