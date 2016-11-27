<?php

namespace App\Mapper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

/**
 * Atividade
 *
 * @ORM\Table(name="Atividade", indexes={@ORM\Index(name="fk_Atividade_Projeto_idx",
 *     columns={"projeto_FK_idProjeto"}), @ORM\Index(name="fk_Atividade_Ator1_idx", columns={"ator_FK_idAtor"})})
 * @ORM\Entity(repositoryClass="App\Mapper\Repository\AtividadeRepository")
 */
class Atividade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAtividade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataconclusao", type="datetime", nullable=true)
     */
    private $dataconclusao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa", inversedBy="atividade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ator_FK_idAtor", referencedColumnName="idAtor")
     * })
     */
    private $pessoa;

    /**
     * @var Projeto
     *
     * @ORM\ManyToOne(targetEntity="Projeto", inversedBy="atividade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="projeto_FK_idProjeto", referencedColumnName="idProjeto")
     * })
     */
    private $projeto;

    /**
     * @var PersistentCollection
     *
     * @ORM\OneToMany(targetEntity="DetalhamentoAtividade", mappedBy="atividade", cascade={"persist", "remove"})
     */
    private $detalhamentoAtividade;

    /**
     * Atividade constructor.
     */
    public function __construct()
    {
        $this->detalhamentoAtividade = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return \DateTime
     */
    public function getDataconclusao(): \DateTime
    {
        return $this->dataconclusao;
    }

    /**
     * @param \DateTime $dataconclusao
     */
    public function setDataconclusao(\DateTime $dataconclusao)
    {
        $this->dataconclusao = $dataconclusao;
    }

    /**
     * @return boolean
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param boolean $status
     */
    public function setStatus(bool $status)
    {
        $this->status = $status;
    }

    /**
     * @return Pessoa
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param Pessoa $pessoa
     */
    public function setPessoa(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    /**
     * @return Projeto
     */
    public function getProjeto()
    {
        return $this->projeto;
    }

    /**
     * @param Projeto $projeto
     */
    public function setProjeto(Projeto $projeto)
    {
        $this->projeto = $projeto;
    }

    /**
     * @return PersistentCollection
     */
    public function getDetalhamentoAtividade()
    {
        return $this->detalhamentoAtividade;
    }

    /**
     * @param DetalhamentoAtividade $detalhamentoAtividade
     */
    public function setDetalhamentoAtividade(DetalhamentoAtividade $detalhamentoAtividade)
    {
        $detalhamentoAtividade->setAtividade($this);
        $this->detalhamentoAtividade->add($detalhamentoAtividade);
    }

}

