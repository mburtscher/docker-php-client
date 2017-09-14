<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContainersIdJsonResponse200StateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ContainersIdJsonResponse200State') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ContainersIdJsonResponse200State) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\ContainersIdJsonResponse200State();
        if (property_exists($data, 'Status')) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'Running')) {
            $object->setRunning($data->{'Running'});
        }
        if (property_exists($data, 'Paused')) {
            $object->setPaused($data->{'Paused'});
        }
        if (property_exists($data, 'Restarting')) {
            $object->setRestarting($data->{'Restarting'});
        }
        if (property_exists($data, 'OOMKilled')) {
            $object->setOOMKilled($data->{'OOMKilled'});
        }
        if (property_exists($data, 'Dead')) {
            $object->setDead($data->{'Dead'});
        }
        if (property_exists($data, 'Pid')) {
            $object->setPid($data->{'Pid'});
        }
        if (property_exists($data, 'ExitCode')) {
            $object->setExitCode($data->{'ExitCode'});
        }
        if (property_exists($data, 'Error')) {
            $object->setError($data->{'Error'});
        }
        if (property_exists($data, 'StartedAt')) {
            $object->setStartedAt($data->{'StartedAt'});
        }
        if (property_exists($data, 'FinishedAt')) {
            $object->setFinishedAt($data->{'FinishedAt'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        if (null !== $object->getRunning()) {
            $data->{'Running'} = $object->getRunning();
        }
        if (null !== $object->getPaused()) {
            $data->{'Paused'} = $object->getPaused();
        }
        if (null !== $object->getRestarting()) {
            $data->{'Restarting'} = $object->getRestarting();
        }
        if (null !== $object->getOOMKilled()) {
            $data->{'OOMKilled'} = $object->getOOMKilled();
        }
        if (null !== $object->getDead()) {
            $data->{'Dead'} = $object->getDead();
        }
        if (null !== $object->getPid()) {
            $data->{'Pid'} = $object->getPid();
        }
        if (null !== $object->getExitCode()) {
            $data->{'ExitCode'} = $object->getExitCode();
        }
        if (null !== $object->getError()) {
            $data->{'Error'} = $object->getError();
        }
        if (null !== $object->getStartedAt()) {
            $data->{'StartedAt'} = $object->getStartedAt();
        }
        if (null !== $object->getFinishedAt()) {
            $data->{'FinishedAt'} = $object->getFinishedAt();
        }
        return $data;
    }
}