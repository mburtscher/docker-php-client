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
class ServiceSpecRollbackConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ServiceSpecRollbackConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ServiceSpecRollbackConfig) {
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
        $object = new \DockerPhpClient\Model\ServiceSpecRollbackConfig();
        if (property_exists($data, 'Parallelism')) {
            $object->setParallelism($data->{'Parallelism'});
        }
        if (property_exists($data, 'Delay')) {
            $object->setDelay($data->{'Delay'});
        }
        if (property_exists($data, 'FailureAction')) {
            $object->setFailureAction($data->{'FailureAction'});
        }
        if (property_exists($data, 'Monitor')) {
            $object->setMonitor($data->{'Monitor'});
        }
        if (property_exists($data, 'MaxFailureRatio')) {
            $object->setMaxFailureRatio($data->{'MaxFailureRatio'});
        }
        if (property_exists($data, 'Order')) {
            $object->setOrder($data->{'Order'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getParallelism()) {
            $data->{'Parallelism'} = $object->getParallelism();
        }
        if (null !== $object->getDelay()) {
            $data->{'Delay'} = $object->getDelay();
        }
        if (null !== $object->getFailureAction()) {
            $data->{'FailureAction'} = $object->getFailureAction();
        }
        if (null !== $object->getMonitor()) {
            $data->{'Monitor'} = $object->getMonitor();
        }
        if (null !== $object->getMaxFailureRatio()) {
            $data->{'MaxFailureRatio'} = $object->getMaxFailureRatio();
        }
        if (null !== $object->getOrder()) {
            $data->{'Order'} = $object->getOrder();
        }
        return $data;
    }
}