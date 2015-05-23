<?php

namespace Lexik\Bundle\ColissimoBundle\Exception;

use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * InvalidRequestException thrown if request does not pass validation
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class InvalidRequestException extends \Exception
{
    /**
     * @var ConstraintViolationListInterface
     */
    protected $violations;

    /**
     * @param ConstraintViolationListInterface $violations
     */
    public function setViolations($violations)
    {
        $this->violations = $violations;
    }

    /**
     * @return ConstraintViolationListInterface
     */
    public function getViolations()
    {
        return $this->violations;
    }
}
